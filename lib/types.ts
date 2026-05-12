export interface WorksFrontmatter {
  title: string;
  slug: string;
  category: string;
  date: string; // ISO 形式 e.g. "2024-03-15"
  thumbnail: string;
  url: string;
  tags: string[];
  summary: string;
  challenge: string;
  improvement: string;
  published: boolean;

  // 詳細ページ用
  overview?: string;
  approach?: string[];
  uiuxPoints?: string[];
  designIntent?: string;
  results?: string[];
  beforeImage?: string;
  afterImage?: string;
  beforeCaption?: string;
  afterCaption?: string;

  // SEO
  ogTitle?: string;
  ogDescription?: string;
}

export interface WorksPost {
  frontmatter: WorksFrontmatter;
  slug: string;
  content: string;
}
