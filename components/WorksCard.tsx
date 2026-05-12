'use client';

import { motion } from 'framer-motion';
import Image from 'next/image';
import Link from 'next/link';
import type { WorksPost } from '@/lib/types';
import styles from './WorksCard.module.css';

interface Props {
  post: WorksPost;
  index?: number;
}

export default function WorksCard({ post, index = 0 }: Props) {
  const { frontmatter, slug } = post;

  return (
    <motion.article
      initial={{ opacity: 0, y: 32 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true, margin: '-40px' }}
      transition={{ duration: 0.55, delay: index * 0.08, ease: [0.16, 1, 0.3, 1] }}
    >
      <Link href={`/works/${slug}`} className={styles.card}>
        {/* サムネイル */}
        <div className={styles.thumb}>
          <Image
            src={frontmatter.thumbnail}
            alt={frontmatter.title}
            fill
            sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
            className={styles.img}
          />
          <div className={styles.thumbOverlay} />
          <span className={styles.category}>{frontmatter.category}</span>
        </div>

        {/* 本文 */}
        <div className={styles.body}>
          <h2 className={styles.title}>{frontmatter.title}</h2>
          <p className={styles.url}>{frontmatter.url}</p>

          <div className={styles.meta}>
            <div className={styles.metaItem}>
              <span className={styles.metaLabel}>課題</span>
              <p className={styles.metaText}>{frontmatter.challenge}</p>
            </div>
            <div className={styles.metaItem}>
              <span className={styles.metaLabel}>改善ポイント</span>
              <p className={styles.metaText}>{frontmatter.improvement}</p>
            </div>
          </div>

          <div className={styles.tags}>
            {frontmatter.tags.slice(0, 3).map((tag) => (
              <span key={tag} className={styles.tag}>{tag}</span>
            ))}
          </div>

          <div className={styles.cta}>
            <span>詳しく見る</span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M3 8h10M8 3l5 5-5 5" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"/>
            </svg>
          </div>
        </div>
      </Link>
    </motion.article>
  );
}
