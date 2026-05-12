'use client';

import { useEffect, useRef, useState } from 'react';
import styles from './TableOfContents.module.css';

interface Heading { id: string; text: string; level: number; }

interface Props { headings: Heading[]; }

export default function TableOfContents({ headings }: Props) {
  const [activeId, setActiveId] = useState<string>('');
  const observer = useRef<IntersectionObserver | null>(null);

  useEffect(() => {
    const ids = headings.map((h) => h.id);
    const elements = ids.map((id) => document.getElementById(id)).filter(Boolean) as HTMLElement[];

    observer.current = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) setActiveId(entry.target.id);
        });
      },
      { rootMargin: '-80px 0px -60% 0px', threshold: 0 }
    );

    elements.forEach((el) => observer.current?.observe(el));
    return () => observer.current?.disconnect();
  }, [headings]);

  if (headings.length === 0) return null;

  return (
    <nav aria-label="目次" className={styles.toc}>
      <p className={styles.label}>目次</p>
      <ol className={styles.list}>
        {headings.map((h) => (
          <li key={h.id} className={styles.item} style={{ paddingLeft: `${(h.level - 2) * 12}px` }}>
            <a
              href={`#${h.id}`}
              className={`${styles.link} ${activeId === h.id ? styles.active : ''}`}
              onClick={(e) => {
                e.preventDefault();
                document.getElementById(h.id)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
              }}
            >
              {h.text}
            </a>
          </li>
        ))}
      </ol>
    </nav>
  );
}
