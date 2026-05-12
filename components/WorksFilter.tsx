'use client';

import { motion } from 'framer-motion';
import styles from './WorksFilter.module.css';

interface Props {
  categories: string[];
  active: string;
  onChange: (cat: string) => void;
}

export default function WorksFilter({ categories, active, onChange }: Props) {
  const all = ['すべて', ...categories];

  return (
    <div className={styles.wrapper} role="group" aria-label="カテゴリ絞り込み">
      {all.map((cat) => (
        <button
          key={cat}
          className={`${styles.btn} ${active === cat ? styles.active : ''}`}
          onClick={() => onChange(cat)}
          aria-pressed={active === cat}
        >
          {cat}
          {active === cat && (
            <motion.span
              className={styles.pill}
              layoutId="filter-pill"
              transition={{ type: 'spring', stiffness: 500, damping: 35 }}
              aria-hidden="true"
            />
          )}
        </button>
      ))}
    </div>
  );
}
