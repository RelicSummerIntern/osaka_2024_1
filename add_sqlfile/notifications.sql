-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql
-- 生成日時: 2024 年 8 月 20 日 07:48
-- サーバのバージョン： 8.0.32
-- PHP のバージョン: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `example_app`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` bigint NOT NULL COMMENT '記事ID',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '記事タイトル',
  `body` varchar(4095) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '記事本文',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '作成日',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '最終更新日',
  `last_editor_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '最終編集者'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `notifications`
--

INSERT INTO `notifications` (`notification_id`, `title`, `body`, `created_at`, `updated_at`, `last_editor_id`) VALUES
(2, '新店舗がオープンしました！', '本文2', '2024-08-20 07:46:04', '2024-08-20 07:46:04', 'daijiro'),
(3, '七夕祭りが開催されました！', '七夕祭りが盛大に開催され、色とりどりの笹飾りが街を彩りました。多くの人々が短冊に願いを書き、伝統的な風習を楽しみました。地域の活気溢れるイベントとなりました。', '2024-08-20 07:46:56', '2024-08-20 07:46:56', 'yutaro'),
(4, '夏祭りが開催されました！', '本文4', '2024-08-20 07:47:39', '2024-08-20 07:47:39', 'yutaro'),
(5, '秋祭りが開催されました！', '本文5', '2024-08-20 07:48:06', '2024-08-20 07:48:06', 'takuma');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` bigint NOT NULL AUTO_INCREMENT COMMENT '記事ID', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
