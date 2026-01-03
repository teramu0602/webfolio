# [プロジェクト名：Webfolio]

[プロジェクトの一言説明：実在する企業のコーポレートサイトをモデルにした、Laravel製ポートフォリオサイトです。]

## 📄 目次
- [完成品リンク](#完成品リンク)
- [プロジェクト概要](#プロジェクト概要)
- [使用技術](#使用技術)
- [こだわりのポイント](#こだわりのポイント)
- [デザイン・設計](#デザイン・設計)
- [参考サイト](#参考サイト)

---

## 🔗 完成品リンク
**[https://webfolio.mydns.jp]**
*(※現在公開中)*

---

## 📸 スクリーンショット
![Top Page](https://github.com/user-attachments/assets/7a69118c-8cd9-4390-8808-6d0a152720a6)

*キャプション：トップページのメインビジュアル部分*

---

## 📝 プロジェクト概要
実在する企業のウェブサイト（WordPress製）をモデルに、Laravelを用いてフルスクラッチで模写開発を行いました。

### 制作の背景
- **目的**: 実務に近いサイト構成をLaravelで再現し、HTML・CSSの基礎やデプロイのプロセスを習得するため。

---

## 🛠 使用技術
### フロントエンド
- HTML5 / CSS3 
- JavaScript
- Blade (Laravel Template Engine)

### バックエンド
- PHP 8.4
- Laravel 12.29.0
- SQLite (Session管理)

### インフラ / 開発環境
- AWS EC2 (Amazon Linux 2023)
- Nginx
- GitHub
- AWS Cloud9

---

## ✨ こだわりのポイント
- **自力でのデプロイ作業**: AWS EC2上に環境を構築し、Webサイトの公開（デプロイ）までをすべて自力で行いました。
- **レスポンシブ対応**: PC・スマホを問わず、表示されるようデザインを調整しました。
---

## 🎨 デザイン・設計
### Figma
[https://www.figma.com/design/7BVhhaHoYQl3xxeJIiPkIY/webfolio?node-id=0-1&t=L9UZNeYikyqvrirT-1]

### 元サイトの構成
- **参考元**: [株式会社ビジョン・コンサルティング:ホームページ (WordPressで構築されているサイトをモデルにしています)]
- **URL**: [https://visioncon-global.com]

---

## 🚀 導入・実行方法
1. `git clone https://github.com/teramu0602/webfolio.git`
2. `composer install`
3. `cp .env.example .env` (環境変数設定)
4. `php artisan key:generate`
5. `php artisan migrate`

