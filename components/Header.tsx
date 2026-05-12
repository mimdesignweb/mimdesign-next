'use client';

import Link from 'next/link';
import { usePathname } from 'next/navigation';
import { useEffect, useState } from 'react';
import styles from './Header.module.css';

export default function Header() {
  const pathname = usePathname();
  const [scrolled, setScrolled] = useState(false);
  const [menuOpen, setMenuOpen] = useState(false);

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    return () => window.removeEventListener('scroll', onScroll);
  }, []);

  useEffect(() => {
    // メニューを開いたときスクロールをロック
    document.body.style.overflow = menuOpen ? 'hidden' : '';
  }, [menuOpen]);

  // ページ遷移でメニューを閉じる
  useEffect(() => { setMenuOpen(false); }, [pathname]);

  return (
    <header className={`${styles.header} ${scrolled ? styles.scrolled : ''}`}>
      <div className={`${styles.inner} container`}>
        <Link href="/" className={styles.logo}>
          <span className={styles.logoText}>MIM</span>
          <span className={styles.logoDot}>DESIGN</span>
        </Link>

        <nav className={`${styles.nav} ${menuOpen ? styles.navOpen : ''}`} aria-label="メインナビゲーション">
          <ul className={styles.navList}>
            <li><Link href="/works" className={`${styles.navLink} ${pathname.startsWith('/works') ? styles.active : ''}`}>制作事例</Link></li>
            <li><Link href="/#service" className={styles.navLink}>サービス</Link></li>
            <li><Link href="/#flow" className={styles.navLink}>制作の流れ</Link></li>
            <li><Link href="/#faq" className={styles.navLink}>よくある質問</Link></li>
          </ul>
          <Link href="/#contact" className={styles.navCta}>無料で相談する</Link>
        </nav>

        <button
          className={`${styles.hamburger} ${menuOpen ? styles.hamburgerOpen : ''}`}
          onClick={() => setMenuOpen(!menuOpen)}
          aria-label={menuOpen ? 'メニューを閉じる' : 'メニューを開く'}
          aria-expanded={menuOpen}
        >
          <span /><span /><span />
        </button>
      </div>

      {menuOpen && (
        <div className={styles.overlay} onClick={() => setMenuOpen(false)} aria-hidden="true" />
      )}
    </header>
  );
}
