import type { Metadata } from 'next';
import { notFound } from 'next/navigation';
import Image from 'next/image';
import Link from 'next/link';
import { MDXRemote } from 'next-mdx-remote/rsc';
import remarkGfm from 'remark-gfm';
import rehypeSlug from 'rehype-slug';
import rehypeAutolinkHeadings from 'rehype-autolink-headings';

import { getAllWorksSlug, getRelatedWorks, getWorksBySlug } from '@/lib/works';
import Breadcrumb from '@/components/Breadcrumb';
import TableOfContents from '@/components/TableOfContents';
import RelatedWorks from '@/components/RelatedWorks';
import WorksCTA from '@/components/WorksCTA';
import styles from './page.module.css';

/* ─── 静的パス生成 ─────────────────────────────── */
export function generateStaticParams() {
  return getAllWorksSlug().map((slug) => ({ slug }));
}

/* ─── メタデータ ──────────────────────────────── */
export async function generateMetadata(
  { params }: { params: Promise<{ slug: string }> }
): Promise<Metadata> {
  const { slug } = await params;
  const post = getWorksBySlug(slug);
  if (!post) return {};
  const { frontmatter: fm } = post;

  return {
    title: fm.ogTitle ?? `${fm.title} | MIMDESIGN`,
    description: fm.ogDescription ?? fm.summary,
    openGraph: {
      title: fm.ogTitle ?? fm.title,
      description: fm.ogDescription ?? fm.summary,
      type: 'article',
      publishedTime: fm.date,
      images: [{ url: fm.thumbnail, width: 1200, height: 630 }],
    },
    twitter: {
      card: 'summary_large_image',
      title: fm.ogTitle ?? fm.title,
      description: fm.ogDescription ?? fm.summary,
      images: [fm.thumbnail],
    },
  };
}

/* ─── 見出し抽出（ToC 用）────────────────────── */
function extractHeadings(content: string) {
  const re = /^(#{2,3})\s+(.+)$/gm;
  const headings: { id: string; text: string; level: number }[] = [];
  let match;
  while ((match = re.exec(content)) !== null) {
    const text = match[2].trim();
    const id = text
      .toLowerCase()
      .replace(/[^\w\s぀-ゟ゠-ヿ一-龯]/g, '')
      .replace(/\s+/g, '-');
    headings.push({ id, text, level: match[1].length });
  }
  return headings;
}

/* ─── MDX カスタムコンポーネント ──────────────── */
const mdxComponents = {
  h2: (props: React.HTMLAttributes<HTMLHeadingElement>) => (
    <h2 className={styles.mdxH2} {...props} />
  ),
  h3: (props: React.HTMLAttributes<HTMLHeadingElement>) => (
    <h3 className={styles.mdxH3} {...props} />
  ),
  p: (props: React.HTMLAttributes<HTMLParagraphElement>) => (
    <p className={styles.mdxP} {...props} />
  ),
  ul: (props: React.HTMLAttributes<HTMLUListElement>) => (
    <ul className={styles.mdxUl} {...props} />
  ),
  li: (props: React.HTMLAttributes<HTMLLIElement>) => (
    <li className={styles.mdxLi} {...props} />
  ),
  strong: (props: React.HTMLAttributes<HTMLElement>) => (
    <strong className={styles.mdxStrong} {...props} />
  ),
};

/* ─── ページ ──────────────────────────────────── */
export default async function WorksDetailPage(
  { params }: { params: Promise<{ slug: string }> }
) {
  const { slug } = await params;
  const post = getWorksBySlug(slug);
  if (!post) notFound();

  const { frontmatter: fm, content } = post;
  const headings = extractHeadings(content);
  const related = getRelatedWorks(post);

  const formattedDate = new Date(fm.date).toLocaleDateString('ja-JP', {
    year: 'numeric', month: 'long', day: 'numeric',
  });

  return (
    <>
      {/* ── KV ── */}
      <section className={styles.kv}>
        <div className={styles.kvBg}>
          <Image
            src={fm.thumbnail}
            alt={fm.title}
            fill
            priority
            className={styles.kvImg}
          />
          <div className={styles.kvOverlay} />
        </div>
        <div className={`${styles.kvInner} container`}>
          <Breadcrumb
            items={[
              { label: 'ホーム', href: '/' },
              { label: '制作事例', href: '/works' },
              { label: fm.title },
            ]}
          />
          <div className={styles.kvMeta}>
            <span className={styles.kvCategory}>{fm.category}</span>
            <time dateTime={fm.date} className={styles.kvDate}>{formattedDate}</time>
          </div>
          <h1 className={styles.kvTitle}>{fm.title}</h1>
          <p className={styles.kvSummary}>{fm.summary}</p>
          <div className={styles.kvTags}>
            {fm.tags.map((tag) => (
              <span key={tag} className={styles.kvTag}>{tag}</span>
            ))}
          </div>
        </div>
      </section>

      {/* ── URL バー ── */}
      <div className={styles.urlBar}>
        <div className="container">
          <div className={styles.urlInner}>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <circle cx="8" cy="8" r="7" stroke="currentColor" strokeWidth="1.5"/>
              <path d="M5 8s0-3 3-3 3 3 3 3-0 3-3 3-3-3-3-3z" stroke="currentColor" strokeWidth="1.5"/>
            </svg>
            <a
              href={`https://${fm.url}`}
              target="_blank"
              rel="noopener noreferrer"
              className={styles.urlLink}
            >
              {fm.url}
            </a>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" className={styles.urlArrow}>
              <path d="M2 10L10 2M10 2H4M10 2v6" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
            </svg>
          </div>
        </div>
      </div>

      {/* ── Main ── */}
      <div className={`${styles.main} container`}>
        <div className={styles.layout}>

          {/* サイドバー（ToC） */}
          <aside className={styles.sidebar}>
            <TableOfContents headings={headings} />
          </aside>

          {/* コンテンツ */}
          <article className={styles.article}>

            {/* 1. プロジェクト概要 */}
            {fm.overview && (
              <section className={styles.section} id="overview">
                <h2 className={styles.sectionTitle}>プロジェクト概要</h2>
                <p className={styles.bodyText}>{fm.overview}</p>
              </section>
            )}

            {/* 2. 課題 */}
            <section className={styles.section} id="challenge">
              <h2 className={styles.sectionTitle}>課題</h2>
              <div className={styles.challengeCard}>
                <div className={styles.challengeIcon} aria-hidden="true">⚠</div>
                <p className={styles.challengeText}>{fm.challenge}</p>
              </div>
            </section>

            {/* 3. 改善アプローチ */}
            {fm.approach && fm.approach.length > 0 && (
              <section className={styles.section} id="approach">
                <h2 className={styles.sectionTitle}>改善アプローチ</h2>
                <ol className={styles.approachList}>
                  {fm.approach.map((item, i) => (
                    <li key={i} className={styles.approachItem}>
                      <span className={styles.approachNum}>{String(i + 1).padStart(2, '0')}</span>
                      <p>{item}</p>
                    </li>
                  ))}
                </ol>
              </section>
            )}

            {/* 4. UI/UX 設計ポイント */}
            {fm.uiuxPoints && fm.uiuxPoints.length > 0 && (
              <section className={styles.section} id="uiux">
                <h2 className={styles.sectionTitle}>UI/UX 設計ポイント</h2>
                <ul className={styles.pointList}>
                  {fm.uiuxPoints.map((item, i) => (
                    <li key={i} className={styles.pointItem}>
                      <span className={styles.pointDot} aria-hidden="true" />
                      <p>{item}</p>
                    </li>
                  ))}
                </ul>
              </section>
            )}

            {/* 5. デザイン意図 */}
            {fm.designIntent && (
              <section className={styles.section} id="design">
                <h2 className={styles.sectionTitle}>デザイン意図</h2>
                <blockquote className={styles.quote}>
                  <p>{fm.designIntent}</p>
                </blockquote>
              </section>
            )}

            {/* 6. Before / After */}
            {fm.beforeImage && fm.afterImage && (
              <section className={styles.section} id="before-after">
                <h2 className={styles.sectionTitle}>Before / After</h2>
                <div className={styles.baGrid}>
                  <figure className={styles.baFigure}>
                    <div className={styles.baThumb}>
                      <span className={`${styles.baBadge} ${styles.baBefore}`}>Before</span>
                      <Image
                        src={fm.beforeImage}
                        alt="改修前"
                        fill
                        className={styles.baImg}
                      />
                    </div>
                    {fm.beforeCaption && (
                      <figcaption className={styles.baCaption}>{fm.beforeCaption}</figcaption>
                    )}
                  </figure>
                  <figure className={styles.baFigure}>
                    <div className={styles.baThumb}>
                      <span className={`${styles.baBadge} ${styles.baAfter}`}>After</span>
                      <Image
                        src={fm.afterImage}
                        alt="改修後"
                        fill
                        className={styles.baImg}
                      />
                    </div>
                    {fm.afterCaption && (
                      <figcaption className={styles.baCaption}>{fm.afterCaption}</figcaption>
                    )}
                  </figure>
                </div>
              </section>
            )}

            {/* 7. 成果 */}
            {fm.results && fm.results.length > 0 && (
              <section className={styles.section} id="results">
                <h2 className={styles.sectionTitle}>成果</h2>
                <div className={styles.resultsGrid}>
                  {fm.results.map((item, i) => (
                    <div key={i} className={styles.resultCard}>
                      <span className={styles.resultIcon} aria-hidden="true">↗</span>
                      <p className={styles.resultText}>{item}</p>
                    </div>
                  ))}
                </div>
              </section>
            )}

            {/* MDX 本文（追記コンテンツ） */}
            {content.trim() && (
              <section className={styles.section} id="detail">
                <MDXRemote
                  source={content}
                  components={mdxComponents}
                  options={{
                    mdxOptions: {
                      remarkPlugins: [remarkGfm],
                      rehypePlugins: [
                        rehypeSlug,
                        [rehypeAutolinkHeadings, { behavior: 'wrap' }],
                      ],
                    },
                  }}
                />
              </section>
            )}

            {/* 8. 関連事例 */}
            <RelatedWorks posts={related} />

          </article>
        </div>
      </div>

      {/* ── CTA ── */}
      <WorksCTA />

      {/* JSON-LD */}
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{
          __html: JSON.stringify({
            '@context': 'https://schema.org',
            '@type': 'Article',
            headline: fm.title,
            description: fm.summary,
            datePublished: fm.date,
            image: fm.thumbnail,
            author: { '@type': 'Organization', name: 'MIMDESIGN' },
          }),
        }}
      />
    </>
  );
}
