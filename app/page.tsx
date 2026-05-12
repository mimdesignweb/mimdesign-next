import { redirect } from 'next/navigation';

// ルート（/）にアクセスされた場合は制作事例一覧へリダイレクト
// 本番では既存の LP（index.html）にリンクし、/works のみを Next.js で管理
export default function Home() {
  redirect('/works');
}
