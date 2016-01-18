-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E18 日 08:56
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime_list`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `animes_lists`
--

CREATE TABLE IF NOT EXISTS `animes_lists` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `program_name` varchar(250) NOT NULL,
  `company` varchar(250) DEFAULT NULL,
  `voice_actor` varchar(250) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `genre2` varchar(250) DEFAULT NULL,
  `televising_year` int(4) DEFAULT NULL,
  `picture_url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `animes_lists`
--

INSERT INTO `animes_lists` (`id`, `created`, `modified`, `program_name`, `company`, `voice_actor`, `genre_id`, `genre2`, `televising_year`, `picture_url`) VALUES
(1, '2016-01-09 11:45:19', '2016-01-13 12:08:58', '化物語', 'シャフト', '神谷浩史', 1, '学園もの', 2015, 'aaaaa'),
(2, '2016-01-13 10:08:36', '2016-01-13 10:42:13', '忍たま乱太郎 お正月特別放送', '亜細亜堂', '高山 みなみ', 2, 'ccc', 2016, 'aaaaaaaaaaa'),
(3, '2016-01-13 10:44:19', '2016-01-13 10:44:44', '英国一家、日本を食べる', 'ファンワークス', '竹本英史', 2, '', 2016, ''),
(4, '2016-01-13 10:46:13', '2016-01-13 10:46:13', 'デュラララ!!×２ 承', '朱夏', '沢城みゆき', 1, '', 2016, ''),
(5, '2016-01-13 10:48:24', '2016-01-13 10:48:24', '翠星のガルガンティア OVA', 'Production I.G', '石川界人', 1, '', 2016, ''),
(6, '2016-01-13 10:49:38', '2016-01-13 10:49:38', 'プリンス・オブ・ストライド オルタナティブ', 'マッドハウス', '木村良平', 2, '', 2016, ''),
(7, '2016-01-13 10:51:45', '2016-01-13 10:51:45', 'SUSHI POLICE', 'セディック・インターナショナル', '山下晶', 2, '', 2016, ''),
(8, '2016-01-13 10:53:03', '2016-01-13 10:53:03', '無彩限のファントム・ワールド', '京都アニメーション', '下野紘', 1, '', 2016, ''),
(9, '2016-01-13 10:54:30', '2016-01-13 10:54:30', 'ハルチカ～ハルタとチカは青春する～', 'P.A.WORKS', '斉藤壮馬', 2, '', 2016, ''),
(10, '2016-01-13 10:55:37', '2016-01-13 10:55:37', 'アクティヴレイド 機動強襲室第八係', 'プロダクションアイムズ', '島崎信長', 1, '', 2016, ''),
(11, '2016-01-13 10:56:24', '2016-01-13 10:56:24', '少女たちは荒野を目指す', 'project No.9', '山下誠一郎', 2, '', 2016, ''),
(12, '2016-01-13 10:57:34', '2016-01-13 10:57:34', 'NORN9 ノルン+ノネット', 'キネマシトラス×オレンジ', '藤村 歩', 1, '', 2016, ''),
(13, '2016-01-13 10:58:31', '2016-01-13 10:58:31', '僕だけがいない街', 'A-1 Pictures', '満島真之介', 1, '', 2016, ''),
(14, '2016-01-13 10:59:08', '2016-01-13 10:59:08', 'おじさんとマシュマロ', 'ドリームクリエイション', ' 稲田 徹', 2, '', 2016, ''),
(15, '2016-01-13 11:00:36', '2016-01-13 11:00:36', 'ファンタシースターオンライン2 ジ アニメーション', 'テレコム・アニメーションフィルム', '蒼井翔太', 1, '', 2016, ''),
(16, '2016-01-13 11:01:48', '2016-01-13 11:01:48', 'だがしかし', 'feel.', '竹達彩奈', 2, '', 2016, ''),
(17, '2016-01-13 11:03:41', '2016-01-13 11:03:41', '暗殺教室 第2期', 'Lerche', '福山 潤', 1, '', 2016, ''),
(18, '2016-01-13 11:04:41', '2016-01-13 11:04:41', 'おしえて！ギャル子ちゃん', 'feel.', '和氣あず未', 2, '', 2016, ''),
(19, '2016-01-13 11:07:31', '2016-01-13 11:07:31', '旅街レイトショー', 'コミックス・ウェーブ・フィルム', '森下由樹子', 1, '', 2016, ''),
(20, '2016-01-13 11:08:17', '2016-01-13 11:08:17', '石膏ボーイズ', 'ライデンフィルム', '杉田智和', 2, '', 2016, ''),
(21, '2016-01-13 11:09:29', '2016-01-13 11:09:29', 'ディバインゲート', 'studioぴえろ', '柿原徹也', 1, '', 2016, ''),
(22, '2016-01-13 11:10:47', '2016-01-13 11:10:47', '紅殻のパンドラ', 'Studio五組', '福沙奈恵', 1, '', 2016, ''),
(23, '2016-01-13 11:11:34', '2016-01-13 11:11:34', '霊剣山 星屑たちの宴', 'スタジオディーン', '代永翼', 1, '', 2016, ''),
(24, '2016-01-13 11:12:49', '2016-01-13 11:12:49', 'GATE(ゲート) -自衛隊 彼の地にて、斯く戦えり-', 'A-1 Pictures', '諏訪部順一', 1, '', 2016, ''),
(25, '2016-01-13 11:13:53', '2016-01-13 11:13:53', '昭和元禄落語心中', 'スタジオディーン', '関 智一', 2, '', 2016, ''),
(26, '2016-01-13 11:15:13', '2016-01-13 11:15:13', 'FAIRY TAIL ZERO', 'A-1 Pictures　／　ブリッジ', '能登麻美子', 1, '', 2016, ''),
(27, '2016-01-13 11:16:00', '2016-01-13 11:16:00', 'ブブキ・ブランキ', 'サンジゲン', '小林裕介', 1, '', 2016, ''),
(28, '2016-01-13 11:16:45', '2016-01-13 11:16:45', 'ラクエンロジック', '動画工房', '小野賢章', 1, '', 2016, ''),
(29, '2016-01-13 11:17:53', '2016-01-13 11:17:53', 'デュラララ!!×2 結', '朱夏', '沢城みゆき', 1, '', 2016, ''),
(30, '2016-01-13 11:18:59', '2016-01-13 11:18:59', 'ナースウィッチ小麦ちゃんＲ', 'タツノコプロ', '巴奎依', 1, '', 2016, ''),
(31, '2016-01-13 11:19:39', '2016-01-13 11:19:39', '暦物語', 'シャフト', '神谷浩史', 1, '', 2016, ''),
(32, '2016-01-13 11:20:18', '2016-01-13 11:20:18', '虹色デイズ', 'プロダクションリード', '松岡禎丞', 2, '', 2016, ''),
(33, '2016-01-13 11:21:19', '2016-01-13 11:21:19', '大家さんは思春期！', 'セブン・アークス・ピクチャーズ', '久保ユリカ', 2, '', 2016, ''),
(34, '2016-01-13 11:22:41', '2016-01-13 11:22:41', 'Dimension W', 'Studio 3Hz X ORANGE', '小野大輔', 1, '', 2016, ''),
(35, '2016-01-13 11:23:46', '2016-01-13 11:23:46', '灰と幻想のグリムガル', 'A-1 Pictures', '細谷佳正', 1, '', 2016, ''),
(36, '2016-01-13 11:24:30', '2016-01-13 11:24:30', 'シュヴァルツェス マーケン', 'ixtl×LIDENFILMS', '鈴村 健一', 1, '', 2016, ''),
(37, '2016-01-13 11:25:40', '2016-01-13 11:25:40', '闇芝居 第3期', 'ILCA', '村井良大', 1, '', 2016, ''),
(38, '2016-01-13 11:26:31', '2016-01-13 11:26:31', '最弱無敗の神装機竜', 'Lerche', '安藤正臣', 1, '', 2016, ''),
(39, '2016-01-13 11:27:32', '2016-01-13 11:27:32', '赤髪の白雪姫 第2クール', 'ボンズ', '早見沙織', 1, '', 2016, ''),
(40, '2016-01-13 11:28:12', '2016-01-13 11:28:12', 'てーきゅう 第7期', 'ミルパンセ', '三森 すずこ', 2, '', 2016, ''),
(41, '2016-01-13 11:29:16', '2016-01-13 11:29:16', '血液型くん！4', 'アース・スター エンターテイメント', '福山潤', 2, '', 2016, ''),
(42, '2016-01-13 11:30:13', '2016-01-13 11:30:13', '魔法少女なんてもういいですから。', 'PINE　JAM', '藤田茜', 2, '', 2016, ''),
(43, '2016-01-13 11:31:39', '2016-01-13 11:31:39', '蒼の彼方のフォーリズム', 'GONZO', '福圓美里', 1, '', 2016, ''),
(44, '2016-01-13 11:32:16', '2016-01-13 11:32:16', 'この素晴らしい世界に祝福を!', 'スタジオディーン', '福島 潤', 1, '', 2016, ''),
(45, '2016-01-13 11:33:30', '2016-01-13 11:33:30', '亜人', 'ポリゴン・ピクチュアズ', '宮野真守', 1, '', 2016, ''),
(46, '2016-01-13 11:34:09', '2016-01-13 11:34:09', 'がんばれ！ルルロロ 第3シリーズ', 'ァンワークス', '清水詩音', 2, '', 2016, ''),
(47, '2016-01-13 11:35:40', '2016-01-13 11:35:40', 'この男子、魔法がお仕事です。', '© Soubi Yamamoto', '小野 友樹', 1, '', 2016, ''),
(48, '2016-01-13 11:42:49', '2016-01-13 11:42:49', 'リルリルフェアリル～妖精のドア～', 'スタジオディーン', '', 1, '', 2016, ''),
(49, '2016-01-13 11:43:57', '2016-01-13 11:43:57', '魔法つかいプリキュア！', '東映', '高橋李依', 1, '', 2016, ''),
(50, '2016-01-13 11:45:40', '2016-01-13 11:45:40', '彼女と彼女の猫 -Everything Flows-', 'ライデンフィルム京都スタジオ', '花澤香菜', 2, '', 2016, ''),
(51, '2016-01-13 11:46:27', '2016-01-13 11:46:27', 'GOD EATER -ゴッドイーター- EP 10-13「メテオライト編」', 'ufotable', '木島隆一', 1, '', 2016, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `genre_name` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `genres`
--

INSERT INTO `genres` (`id`, `created`, `modified`, `genre_name`) VALUES
(1, '0000-00-00 00:00:00', '2016-01-14 08:37:06', 'アクション/バトル'),
(2, '2016-01-14 08:31:59', '2016-01-14 08:31:59', 'SF'),
(3, '2016-01-14 08:32:21', '2016-01-14 08:39:54', 'ギャグ/コメディ'),
(4, '2016-01-14 08:32:33', '2016-01-14 08:32:33', '学園'),
(5, '2016-01-14 08:36:57', '2016-01-14 08:36:57', 'ホラー'),
(6, '2016-01-14 08:37:40', '2016-01-14 08:37:40', 'サスペンス/ミステリー'),
(7, '2016-01-14 08:39:09', '2016-01-14 08:39:09', 'ファンタジー'),
(8, '2016-01-14 08:42:09', '2016-01-14 08:42:09', 'スポーツ'),
(9, '2016-01-14 08:43:18', '2016-01-14 08:48:28', 'ロボット/メカ'),
(10, '2016-01-14 08:43:33', '2016-01-14 08:46:37', '日常/ほのぼの'),
(11, '2016-01-14 08:44:43', '2016-01-14 08:44:43', '恋愛/ラブコメ'),
(12, '2016-01-14 08:44:49', '2016-01-14 08:44:49', '萌え'),
(13, '2016-01-14 08:45:04', '2016-01-14 08:45:04', 'キッズ'),
(14, '2016-01-14 08:46:24', '2016-01-14 08:46:24', '感動'),
(15, '2016-01-14 08:48:39', '2016-01-14 08:48:39', 'その他');

-- --------------------------------------------------------

--
-- テーブルの構造 `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `animes_list_id` int(11) NOT NULL,
  `review_rank` int(11) NOT NULL,
  `review` varchar(2000) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `reviews`
--

INSERT INTO `reviews` (`id`, `created`, `modified`, `animes_list_id`, `review_rank`, `review`, `user_id`) VALUES
(1, '2016-01-13 12:06:42', '2016-01-14 11:42:43', 1, 100, 'くそ面白い', 3),
(2, '2016-01-14 10:05:30', '2016-01-14 10:05:30', 2, 5, 'nintama', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `user_name`, `password`) VALUES
(3, '2016-01-13 12:05:08', '2016-01-13 12:05:08', 'mizuno', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animes_lists`
--
ALTER TABLE `animes_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animes_lists`
--
ALTER TABLE `animes_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;