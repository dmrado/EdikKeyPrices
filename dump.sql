-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Фев 03 2019 г., 11:42
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `EdikKeyPricesdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carbrands`
--

CREATE TABLE `carbrands` (
  `carbrand_id` int(10) UNSIGNED NOT NULL,
  `carbrand_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carbrands`
--

INSERT INTO `carbrands` (`carbrand_id`, `carbrand_name`) VALUES
(1, 'ACURA'),
(2, 'ALFA ROMEO'),
(3, 'AUDI'),
(4, 'BMW'),
(5, 'BUICK'),
(6, 'CADILLAC'),
(7, 'CHEVROLET'),
(8, 'CHRYSLER'),
(9, 'CITROEN'),
(10, 'DODGE'),
(11, 'EAGLE'),
(12, 'FIAT'),
(13, 'FORD'),
(14, 'GMC'),
(15, 'HOLDEN'),
(16, 'HONDA'),
(17, 'HUMMER'),
(18, 'HYUNDAI'),
(19, 'INFINITI'),
(20, 'ISUZU'),
(21, 'IVECO'),
(22, 'JEEP'),
(23, 'KIA'),
(24, 'LADA'),
(25, 'LANCIA'),
(26, 'LEXUS'),
(27, 'MAZDA'),
(28, 'MERCEDES'),
(29, 'MERCURY'),
(30, 'MITSUBISHI'),
(31, 'NISSAN'),
(32, 'OLDSMOBILE'),
(33, 'OPEL'),
(34, 'PEUGEOT'),
(35, 'PONTIAC'),
(36, 'PORSCHE'),
(37, 'PROTON'),
(38, 'RENAULT'),
(39, 'SAAB'),
(40, 'SATURN'),
(41, 'SSANGYONG'),
(42, 'SEAT'),
(43, 'SKODA'),
(44, 'SUBARU'),
(45, 'SUZUKI'),
(46, 'TOYOTA'),
(47, 'VOLKSWAGEN'),
(48, 'VOLVO'),
(49, 'MOTO'),
(50, 'ДРУГОЕ');

-- --------------------------------------------------------

--
-- Структура таблицы `carmods`
--

CREATE TABLE `carmods` (
  `carmod_id` int(10) UNSIGNED NOT NULL,
  `carbrand_id` smallint(6) NOT NULL,
  `carmod_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carmods`
--

INSERT INTO `carmods` (`carmod_id`, `carbrand_id`, `carmod_name`) VALUES
(1, 2, '145'),
(2, 2, '146');

-- --------------------------------------------------------

--
-- Структура таблицы `caryears`
--

CREATE TABLE `caryears` (
  `caryear_id` int(10) UNSIGNED NOT NULL,
  `carmod_id` smallint(6) NOT NULL,
  `caryear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `caryears`
--

INSERT INTO `caryears` (`caryear_id`, `carmod_id`, `caryear`) VALUES
(1, 1, '1995-01-01'),
(2, 2, '1995-01-01');

-- --------------------------------------------------------

--
-- Структура таблицы `keys`
--

CREATE TABLE `keys` (
  `key_id` int(10) UNSIGNED NOT NULL,
  `caryear_id` smallint(6) NOT NULL,
  `keyName` int(11) NOT NULL,
  `keySubscr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyPict` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `keys`
--

INSERT INTO `keys` (`key_id`, `caryear_id`, `keyName`, `keySubscr`, `keyPict`) VALUES
(1, 1, 500, 'Марка: \r\nToyota\r\nМодель: \r\nToyota VALEO (2 кнопки), чип 4D-70. Лезвие TOY 47. Подходит к моделям, произведенным в Великобритании до 2010 г.в.\r\nОригинал: \r\nДа\r\nЛезвие: \r\nНевыкидное\r\nДействия кнопок: \r\nоткрытие-закрытие дверей', 'http://localhost:8888/EdikKeyPrices/public/img/alfa_romeo_big.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `description`, `duration`, `created_at`, `updated_at`) VALUES
(1, '6aBupDg95H', 'sdzQ6jk3vPGx9cjfwoOWcnbwKnaM1H6tqIZodNaWFblUFJ6ENxFaSlPaKTlzdef6hPJHRd8azGUKNhxZHfX0R4Cw9ttipsYSINN2', 62, NULL, NULL),
(2, 'Amie Yundt', 'Beatae occaecati est nulla. Qui quia aliquid consequatur eius aspernatur sint ut. Qui minima neque sit. Doloribus veniam rem aut inventore ipsum. Repudiandae et labore ut molestiae cum iusto.', 60, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(3, 'Prof. Jonathon Dicki Sr.', 'Dicta esse optio sit expedita dicta molestias. Illo odit dolore nihil. Ut ea debitis tempora quae.', 63, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(4, 'Ignacio Hodkiewicz', 'Repellendus facilis officia ut dolores voluptatem voluptatibus. Natus culpa animi exercitationem doloribus voluptas magni. Fugiat placeat impedit nihil vero est.', 78, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(5, 'Jameson Rice', 'Nesciunt sunt beatae quo suscipit unde sunt. Quo natus qui occaecati. Iure dolor sint nihil non illum. Sed error ea et nesciunt.', 80, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(6, 'Eliseo Satterfield IV', 'Ipsum et doloribus possimus beatae quaerat. Dolore voluptatem deserunt recusandae. Quis dolores est consequatur harum. Sed commodi molestias molestiae sit.', 82, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(7, 'Rebekah Gaylord PhD', 'Ipsum cumque odio consectetur in. Ut necessitatibus nesciunt omnis ut sequi. Vero doloremque nihil quam nam. Architecto molestias vero quas voluptas et consectetur.', 83, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(8, 'Dr. Vladimir Schaden', 'Cumque inventore excepturi maiores dolore vel aliquam quaerat. Beatae veniam hic ea iste. Dolorem rem eum consequatur aspernatur.', 60, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(9, 'Mr. Patrick Kemmer Sr.', 'Possimus voluptatem minima maxime veniam est. Hic commodi odio sed quo. Voluptatem nihil commodi ducimus voluptas voluptatem nam.', 70, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(10, 'Clark Swaniawski I', 'Doloribus saepe et ratione aliquid nemo dolorem. Ut consectetur explicabo voluptatem id ut quo. Hic ut ex beatae laborum porro. Unde laboriosam libero minus animi.', 71, '2019-01-27 11:46:27', '2019-01-27 11:46:27'),
(11, 'Adrianna Feil', 'Iusto iure omnis id minus. Sapiente ut nam nostrum dolor ipsa est laborum. Consequuntur delectus omnis deserunt optio et a rem. Voluptatibus ipsum laboriosam repellendus rerum qui id.', 67, '2019-01-27 11:46:27', '2019-01-27 11:46:27');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_20_185016_first_level_carbrand', 1),
(4, '2018_11_20_185037_second_level_carmod', 1),
(5, '2018_11_20_185051_third_level_caryear', 1),
(6, '2018_11_20_191807_fourth_level_key_vendor', 1),
(7, '2019_01_19_144140_create_sevises_table', 2),
(8, '2019_01_27_140654_lessons_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sevises`
--

CREATE TABLE `sevises` (
  `id` int(10) UNSIGNED NOT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sevises`
--

INSERT INTO `sevises` (`id`, `service`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'england', 500.00, NULL, NULL),
(2, 'vertical', 800.00, NULL, NULL),
(3, 'Программирование ключа', 2000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carbrands`
--
ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`carbrand_id`);

--
-- Индексы таблицы `carmods`
--
ALTER TABLE `carmods`
  ADD PRIMARY KEY (`carmod_id`);

--
-- Индексы таблицы `caryears`
--
ALTER TABLE `caryears`
  ADD PRIMARY KEY (`caryear_id`);

--
-- Индексы таблицы `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`key_id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sevises`
--
ALTER TABLE `sevises`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `carbrand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `carmods`
--
ALTER TABLE `carmods`
  MODIFY `carmod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `caryears`
--
ALTER TABLE `caryears`
  MODIFY `caryear_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `keys`
--
ALTER TABLE `keys`
  MODIFY `key_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sevises`
--
ALTER TABLE `sevises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
