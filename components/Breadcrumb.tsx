import Link from 'next/link';
import styles from './Breadcrumb.module.css';

interface Crumb { label: string; href?: string; }

interface Props { items: Crumb[]; }

export default function Breadcrumb({ items }: Props) {
  const jsonLd = {
    '@context': 'https://schema.org',
    '@type': 'BreadcrumbList',
    itemListElement: items.map((item, i) => ({
      '@type': 'ListItem',
      position: i + 1,
      name: item.label,
      ...(item.href ? { item: item.href } : {}),
    })),
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />
      <nav aria-label="パンくず" className={styles.breadcrumb}>
        <ol className={styles.list}>
          {items.map((item, i) => (
            <li key={i} className={styles.item}>
              {i > 0 && <span className={styles.sep} aria-hidden="true">/</span>}
              {item.href && i < items.length - 1 ? (
                <Link href={item.href} className={styles.link}>{item.label}</Link>
              ) : (
                <span className={styles.current} aria-current={i === items.length - 1 ? 'page' : undefined}>
                  {item.label}
                </span>
              )}
            </li>
          ))}
        </ol>
      </nav>
    </>
  );
}
