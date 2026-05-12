import type { NextConfig } from 'next';

const nextConfig: NextConfig = {
  // 外部ドメインの画像を許可（各クライアントサイトのサムネイルが外部にある場合）
  images: {
    remotePatterns: [
      { protocol: 'https', hostname: '**' },
    ],
  },
  // MDX 対応
  pageExtensions: ['ts', 'tsx', 'md', 'mdx'],
};

export default nextConfig;
