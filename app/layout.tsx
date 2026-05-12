import type { Metadata } from 'next';
import { Noto_Sans_JP, Inter } from 'next/font/google';
import './globals.css';
import Header from '@/components/Header';

const notoSansJP = Noto_Sans_JP({
  subsets: ['latin'],
  weight: ['400', '500', '600', '700'],
  variable: '--font-noto',
  display: 'swap',
});

const inter = Inter({
  subsets: ['latin'],
  weight: ['400', '500', '600', '700'],
  variable: '--font-inter',
  display: 'swap',
});

export const metadata: Metadata = {
  metadataBase: new URL('https://mimdesign.jp'),
  title: {
    default: 'MIMDESIGN | Web サイト改善・制作',
    template: '%s | MIMDESIGN',
  },
  description: '中小企業・店舗の Web サイト改善・制作を専門に行うデザイン事務所。LP 改善・コーポレートサイト・EC サイトまで対応。問い合わせ数・売上の改善にコミットします。',
  openGraph: {
    siteName: 'MIMDESIGN',
    locale: 'ja_JP',
    type: 'website',
  },
  twitter: { card: 'summary_large_image' },
  robots: { index: true, follow: true },
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="ja" className={`${notoSansJP.variable} ${inter.variable}`}>
      <body>
        <Header />
        <main>{children}</main>
        <footer style={{
          borderTop: '1px solid var(--border)',
          padding: '32px 0',
          textAlign: 'center',
          color: 'var(--text-muted)',
          fontSize: 'var(--text-sm)',
        }}>
          <div className="container">
            © {new Date().getFullYear()} MIMDESIGN. All rights reserved.
          </div>
        </footer>
      </body>
    </html>
  );
}
