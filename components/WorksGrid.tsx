'use client';

import { AnimatePresence, motion } from 'framer-motion';
import { useState } from 'react';
import type { WorksPost } from '@/lib/types';
import WorksCard from './WorksCard';
import WorksFilter from './WorksFilter';
import styles from './WorksGrid.module.css';

interface Props {
  posts: WorksPost[];
  categories: string[];
}

export default function WorksGrid({ posts, categories }: Props) {
  const [active, setActive] = useState('すべて');

  const filtered = active === 'すべて'
    ? posts
    : posts.filter((p) => p.frontmatter.category === active);

  return (
    <div className={styles.wrapper}>
      <WorksFilter categories={categories} active={active} onChange={setActive} />

      <AnimatePresence mode="wait">
        <motion.div
          key={active}
          className={styles.grid}
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          exit={{ opacity: 0 }}
          transition={{ duration: 0.2 }}
        >
          {filtered.length > 0 ? (
            filtered.map((post, i) => (
              <WorksCard key={post.slug} post={post} index={i} />
            ))
          ) : (
            <p className={styles.empty}>該当する制作事例がありません</p>
          )}
        </motion.div>
      </AnimatePresence>
    </div>
  );
}
