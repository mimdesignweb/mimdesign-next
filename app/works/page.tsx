import type { Metadata } from 'next';
import { getAllCategories, getAllWorks } from '@/lib/works';
import WorksGrid from '@/components/WorksGrid';
import WorksCTA from '@/components/WorksCTA';
import styles from './page.module.css';

export const metadata: Metadata = {
  title: '制作事例 | MIMDESIGN',
  description: 'Web サイトの改善・制作実績を掲載しています。コーポレートサイト・LP 改善・EC サイトなど、業種を問わず対応可能です。',
  openGraph: {
    title: '制作事例 | MIMDESIGN',
    description: 'Web サイトの改善・制作実績。コーポレート・LP 改善・UI/UX 改善など。',
    type: 'website',
  },
};

export default function WorksPage() {
  const posts = getAllWorks();
  const categories = getAllCategories();

  return (
    <>
      {/* ── Hero ── */}
      <section className={styles.hero}>
        <div className={`${styles.heroInner} container`}>
          <p className={styles.eyebrow}>CASE STUDIES</p>
          <h1 className={styles.heroTitle}>制作事例</h1>
          <p className={styles.heroDesc}>
            業種・規模を問わず、クライアントの課題を解決してきた実績をご紹介します。<br />
            改善前後の数値や設計の意図まで、詳しく解説しています。
          </p>
          <div className={styles.heroStats}>
            <div className={styles.stat}>
              <span className={styles.statNum}>50+</span>
              <span className={styles.statLabel}>制作実績</span>
            </div>
            <div className={styles.statDivider} />
            <div className={styles.stat}>
              <span className={styles.statNum}>4</span>
              <span className={styles.statLabel}>対応カテゴリ</span>
            </div>
            <div className={styles.statDivider} />
            <div className={styles.stat}>
              <span className={styles.statNum}>92%</span>
              <span className={styles.statLabel}>リピート率</span>
            </div>
          </div>
        </div>
        <div className={styles.heroGlow} aria-hidden="true" />
      </section>

      {/* ── Grid ── */}
      <section className={styles.list}>
        <div className="container">
          <WorksGrid posts={posts} categories={categories} />
        </div>
      </section>

      {/* ── CTA ── */}
      <WorksCTA />
    </>
  );
}
