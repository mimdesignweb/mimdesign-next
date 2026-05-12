'use client';

import { motion } from 'framer-motion';
import Link from 'next/link';
import styles from './WorksCTA.module.css';

export default function WorksCTA() {
  return (
    <motion.section
      className={styles.cta}
      initial={{ opacity: 0, y: 40 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ duration: 0.6, ease: [0.16, 1, 0.3, 1] }}
    >
      <div className={`${styles.inner} container`}>
        <p className={styles.eyebrow}>FREE CONSULTATION</p>
        <h2 className={styles.title}>
          あなたのサイトも、<br />
          <span className={styles.accent}>改善できるかもしれません</span>
        </h2>
        <p className={styles.desc}>
          現在のサイトを確認したうえで、改善できる点をお伝えします。<br />
          まずは無料でご相談ください。返信は通常 1〜2 営業日以内。
        </p>
        <div className={styles.actions}>
          <Link href="/#contact" className={styles.primaryBtn}>
            無料で相談する
          </Link>
          <Link href="/works" className={styles.secondaryBtn}>
            他の制作事例を見る
          </Link>
        </div>
      </div>
    </motion.section>
  );
}
