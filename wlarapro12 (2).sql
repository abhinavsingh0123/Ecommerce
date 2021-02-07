-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 02:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wlarapro12`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2019-04-21 07:35:18', '2019-04-21 07:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `price`, `image`, `date`) VALUES
(1, 'Beginning With PHP and MySQL', '500', 'php.jpg', '2019-02-17 13:33:02'),
(2, 'Learning Javascript', '300', 'javascript.jpg', '2019-02-17 13:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Entertainment', '471981762.jpg', '2019-04-27 02:08:41', '2019-04-28 02:11:15'),
(5, 'Technology', '155825107.jpg', '2019-04-27 02:27:00', '2019-04-28 02:10:11'),
(6, 'Politics', '894652420.jpg', '2019-04-28 02:05:50', '2019-04-28 02:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_21_072201_create_admins_table', 1),
(2, '2019_04_21_080114_create_categories_table', 2),
(6, '2019_04_28_072501_create_news_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Politics', 'If Article 370 is bad then leave J&K: Mehbooba Mufti to PM Modi', 'Former Jammu and Kashmir Chief Minister Mehbooba Mufti on Saturday slammed Prime Minister Narendra Modi over his \"Article 370 has done maximum damage to J&K\" remark, saying that \"if Article 370 is so bad then leave the state\".\r\n\r\nSpeaking to the media, Mehbooba Mufti said, \"If the prime minister believes that our relationship has a foundation without Article 370 then leave Kashmir. If he thinks Kashmir is staring at bankruptcy then leave Kashmir. Why does he want to take the burden of this bankruptcy?\"\r\n\r\nIn an interview to Aaj Tak, PM Modi had said that Article 370 and 35A have done maximum damage to Jammu and Kashmir and only former Prime Minister Atal Bihari Vajpayee\'s formula of \"Insaniyat, Kashmiriyat and Jamhooriyat\" will work in Jammu and Kashmir.\r\n\r\n\"We set up AIIMS and IIM in Kashmir but top professors are not ready to go there because they can\'t buy property there. The rents there are very high. There is no investment in J&K because investors feel they won\'t get land there.\"\r\n\r\nPM Modi also said that \"Kashmir is staring at bankruptcy\". He said, \"Terrorists have finished tourism in the state. There is no investment because of Articles 370 and 35A. Now, people in Kashmir feel there is a need for change.\"\r\n\r\nOn being asked about the BJP\'s promise of removing Articles 370 and 35A of the Constitution, Modi said that people who talk of secession have no right to fight elections. \"J&K has been part of India for thousands of years. Questions should be asked to those who talk about secession.\"\r\n\r\nEarlier, Mehbooba Mufti had accused the Congress and the National Conference (NC) of weakening Article 370 that gives special status to Jammu and Kashmir.', '80957412.jpeg', '2019-04-28 02:07:10', '2019-04-28 02:07:10'),
(2, 'Politics', 'Vajpayee formula of insaniyat, kashmiriyat & jamhooriyat is the only way for J&K: PM Modi', 'Prime Minister Narendra Modi on Friday said that only Atal Bihari Vajpayee ji\'s formula can work for Jammu and Kashmir.\r\n\r\nTalking about Jammu and Kashmir, in an exclusive interview with Aaj Tak in Varanasi, Prime Minister vowed to follow Vajpayee\'s doctrine of \"Insaniyat, Jamhuriyat and Kashmiriyat\" but with a caveat -- not to let the state be \"emotionally blackmailed by a handful of families.\"\r\n\r\nAsked about correct approach for dealing with the Kashmir issue, PM Modi said the BJP knew the right approach to Kashmir issue even before coming to power. He said that a handful of families in the state have made it a \"tool of blackmail\"\r\n\r\nTerming the PDP-BJP alliance as a mistake, PM Modi said it was \"our mahamilawat [grand adulteration]\". \"The verdict was such that alliance with PDP was the only choice. Later we ended the alliance too. We conducted panchayat poll in Kashmir,\" PM Modi said.\r\n\r\n\"The Vajpayee formula of insaniyat, kashmiriyat & jamhooriyat is the only way. These handful of families (Abdullahs and Muftis) speak one language in Kashmir and another in Delhi. I am exposing their doublespeak. If they (Abdullahs and Muftis) have the guts, stop this doublespeak. Both PDP and NC boycotted panchayat elections, yet the turnout was 75%,\" the prime minister added.\r\n\r\nPM Modi also said that Kashmir had a peaceful election as compared to other states. He said, \"Kashmir, which is known to have violence, saw peaceful elections. Compare that with West Bengal, where people were killed during panchayat elections. Money from Government of India is going directly to panchayats in J&K. Development work is going on in Kashmir.\"\r\n\r\nSpeaking exclusively to Aaj Tak, Prime Minister Modi spoke on issues ranging from Lok Sabha elections, Kashmir, jobs, farmers\' crisis, and Pakistan.', '1598702783.jpeg', '2019-04-28 02:09:16', '2019-04-28 02:09:16'),
(3, 'Technology', 'Realme 3 Pro vs Samsung Galaxy M30: Which phone offers best value under Rs 15,000?', 'We are yet to reach the halfway mark in 2019, but we have already seen some exciting new phones to have launched in India. The sub-Rs 15,000 is truly getting competitive with some fantastic phones that will make you think twice about buying a premium flagship phone. Xiaomi, of course, has the popular Redmi Note 7 Pro, but Samsung has also made a comeback this year and is offering some great affordable phones, especially the Galaxy M30 in this segment. And now we have the Realme 3 Pro, which was launched in India earlier this week and is to go on its first sale on Monday, April 29.\r\n\r\nThe Realme 3 Pro is quite possibly the biggest and most exciting phone in this segment right now, and after reviewing the device we are quite convinced this is one of the best phones under Rs 15,000. Recently, we checked out how the Realme 3 Pro stands against the Redmi Note 7 Pro. In this piece, we look at how the device goes up against Samsung\'s Galaxy M30, which is also a value-for-money option under Rs 15,000.', '1421053975.jpeg', '2019-04-28 02:10:36', '2019-04-28 02:10:36'),
(4, 'Entertainment', 'Mahesh Babu\'s film with Anil Ravipudi titled Sarileru Neekevvaru?', 'Mahesh Babu\'s upcoming film Maharshi is yet to hit the screens, but fans are already excited about his next film with Anil Ravipudi. The 26th movie in Mahesh Babu\'s career is tentatively called SSMB 26. The film was announced a few weeks ago much to the surprise of Mahesh Babu\'s fans who were expecting the actor to team up with Rangasthalam director Sukumar.\r\n\r\nNow, the latest buzz about the film is that, SSMB 26 is titled as Sarileru Neekevvaru. Reports state that Anil Ravipudi has finalised the titled but he is yet to make it official. Makers of the upcoming film will soon reveal the official title of the project, which will go on floors after Maharshi hits the screens.\r\n\r\nMahesh Babu, initially, signed in for a film with Sukumar but due to an alleged fallout between the actor and the director, the project was shelved. Mahesh Babu took to Twitter to announce that he will not be working with Sukumar due to creative differences.\r\n\r\nSukumar signed a film with Allu Arjun recently and that seems to be the reason for the rift between Mahesh Babu and the director. Later, Sukumar seems to have met Mahesh Babu to solve the problem.\r\n\r\nMeanwhile, Maharshi shooting has been wrapped up and the film is currently on the editor\'s table. Starring Pooja Hegde and Allari Naresh in lead roles, the film is slated to hit the screens in May.\r\n\r\nMaharshi also has Meenakshi Dixit in a lead role. Devi Sri Prasad is composing the music for the film.', '1911697897.jpeg', '2019-04-28 02:11:51', '2019-04-28 02:11:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_unique` (`category`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
