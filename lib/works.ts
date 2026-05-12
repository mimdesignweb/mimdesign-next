import fs from 'fs';
import path from 'path';
import matter from 'gray-matter';
import type { WorksFrontmatter, WorksPost } from './types';

const CONTENT_DIR = path.join(process.cwd(), 'content/works');

/** content/works/ 配下の全 .mdx ファイルを読み込む */
function getMDXFiles(): string[] {
  if (!fs.existsSync(CONTENT_DIR)) return [];
  return fs.readdirSync(CONTENT_DIR).filter((f) => f.endsWith('.mdx'));
}

/** 単一ファイルをパースして WorksPost を返す */
function parsePost(filename: string): WorksPost | null {
  const filePath = path.join(CONTENT_DIR, filename);
  const raw = fs.readFileSync(filePath, 'utf-8');
  const { data, content } = matter(raw);
  const frontmatter = data as WorksFrontmatter;
  if (!frontmatter.published) return null;
  const slug = filename.replace(/\.mdx$/, '');
  return { frontmatter, slug, content };
}

/** 公開済み記事を新しい順で返す */
export function getAllWorks(): WorksPost[] {
  return getMDXFiles()
    .map(parsePost)
    .filter((p): p is WorksPost => p !== null)
    .sort(
      (a, b) =>
        new Date(b.frontmatter.date).getTime() -
        new Date(a.frontmatter.date).getTime()
    );
}

/** slug から単一記事を返す */
export function getWorksBySlug(slug: string): WorksPost | null {
  const filename = `${slug}.mdx`;
  const filePath = path.join(CONTENT_DIR, filename);
  if (!fs.existsSync(filePath)) return null;
  return parsePost(filename);
}

/** 全 slug の配列（静的パス生成用）*/
export function getAllWorksSlug(): string[] {
  return getMDXFiles()
    .map((f) => f.replace(/\.mdx$/, ''))
    .filter((slug) => {
      const post = parsePost(`${slug}.mdx`);
      return post !== null;
    });
}

/** カテゴリ一覧（重複なし）*/
export function getAllCategories(): string[] {
  const all = getAllWorks().map((p) => p.frontmatter.category);
  return Array.from(new Set(all));
}

/** 関連記事：同カテゴリ or 共通タグが多い順（自分を除く最大 3 件）*/
export function getRelatedWorks(current: WorksPost, limit = 3): WorksPost[] {
  const all = getAllWorks().filter((p) => p.slug !== current.slug);
  const scored = all.map((p) => {
    let score = 0;
    if (p.frontmatter.category === current.frontmatter.category) score += 3;
    const sharedTags = p.frontmatter.tags.filter((t) =>
      current.frontmatter.tags.includes(t)
    );
    score += sharedTags.length;
    return { post: p, score };
  });
  return scored
    .sort((a, b) => b.score - a.score)
    .slice(0, limit)
    .map((s) => s.post);
}
