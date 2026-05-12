import Link from 'next/link';
import Image from 'next/image';
import type { WorksPost } from '@/lib/types';
import styles from './RelatedWorks.module.css';

interface Props { posts: WorksPost[]; }

export default function RelatedWorks({ posts }: Props) {
  if (posts.length === 0) return null;

  return (
    <section className={styles.section}>
      <h2 className={styles.heading}>関連事例</h2>
      <div className={styles.grid}>
        {posts.map((post) => (
          <Link key={post.slug} href={`/works/${post.slug}`} className={styles.card}>
            <div className={styles.thumb}>
              <Image
                src={post.frontmatter.thumbnail}
                alt={post.frontmatter.title}
                fill
                sizes="(max-width: 768px) 100vw, 33vw"
                className={styles.img}
              />
            </div>
            <div className={styles.body}>
              <span className={styles.category}>{post.frontmatter.category}</span>
              <p className={styles.title}>{post.frontmatter.title}</p>
            </div>
          </Link>
        ))}
      </div>
    </section>
  );
}
