-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2022 г., 20:13
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web11_lara`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Собачки', NULL),
(2, 'Кошечки', NULL),
(3, 'Всякая хрень собачья ну и кошачья', NULL),
(9, 'Попугаи', NULL),
(10, 'Попугаи 2', NULL),
(11, 'Попугаи 3', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(10, '2022_08_09_175415_create_roles_table', 2),
(11, '2022_08_09_180153_edit_roles_table_add_field_aleas', 2),
(12, '2022_08_16_175144_edit_product_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `id` int(4) NOT NULL,
  `title` varchar(150) NOT NULL,
  `decription` text DEFAULT NULL,
  `keywords` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `title`, `decription`, `keywords`) VALUES
(1, 'Категории', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL,
  `category_id` int(4) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `old_price`, `category_id`, `img`, `status`, `count`) VALUES
(1, 'Сибирский хаски', 100000, NULL, 1, 'vse-o-glazah-haski.jpg', 0, 1),
(2, 'Американский Булли', 200000, 250000, 1, 'aa3057af31639307401da972e89618ce.jpeg', 0, 1),
(3, 'Невская маскарадная', 150000, NULL, 2, 'nevskaya-maskaradnaya-1.jpeg', 1, 1),
(14, 'qHwBL4a7aI6IewwBhcCwZlO7bqRwcVID9Q4YkROO', 1000, 2000, 3, '0.jpg', 0, 1),
(15, '729yQc8mSVwDQWMXDSGGnW50Wih2GQCRxfgvukbH', 1000, 2000, 3, '0.jpg', 0, 1),
(16, 'R0FMcayer64oNf9KmGXeYx4mtBsp2v9qcUsT2NI5', 1000, 2000, 3, '0.jpg', 0, 1),
(17, '5qHcouUZe8dwk1PXJ0CBaO5I8BVWGHCijQkl2aI4', 1000, 2000, 3, '0.jpg', 0, 1),
(18, '7GTd6vzsj8Qa1PygIKgYnsguzACC3zbtnNoyrhVa', 1000, 2000, 3, '0.jpg', 0, 1),
(19, 'fjawoYV7f9V6pBr1ecA61LDnqfU08BEN8CLJNA8M', 1000, 2000, 3, '0.jpg', 0, 1),
(20, 'FcPpWHN4KbVYG4FuH8CU3usVxHroyGLmNshNeCOD', 1000, 2000, 3, '0.jpg', 0, 1),
(21, '67Cvh9HUXjrD5V2CmmJ5y1FLCKMMsrYHAFyAnbAT', 1000, 2000, 3, '0.jpg', 0, 1),
(22, 'C8VOL8PyVTutvSctj5B4orNGJgGHcelRIs0s01A6', 1000, 2000, 3, '0.jpg', 0, 1),
(23, 'gXPbFUCCjalDul3e0FUxkmRNGSlEIpcOaD5QoPS1', 1000, 2000, 3, '0.jpg', 0, 1),
(24, 'ufyGH4d3Tmtb9bwErdvC0YZtLvZqLnnuNWeAl5Pl', 1000, 2000, 3, '0.jpg', 0, 1),
(25, 'ZNkN4odUfMZlmWcM2TxxKasBKVbRm1R6Ucyx7nPf', 1000, 2000, 3, '0.jpg', 0, 1),
(26, '9aFHtP0ljKYCQC5ZswGupXVwFKkwbtyKvQk0AYDm', 1000, 2000, 3, '0.jpg', 0, 1),
(27, 'T8Y9QJwmim9j1nTs5yBg5WDVqH2Wtc8SdVqCNq6A', 1000, 2000, 3, '0.jpg', 0, 1),
(28, 'wvKy1dvQXlPjgiRxYVk9JJbWAGaDLbzWjqm55jcJ', 1000, 2000, 3, '0.jpg', 0, 1),
(29, '6q1xsxcS0EvYtm9WBtLHfiUd2388Nczc3fR5GTKz', 1000, 2000, 3, '0.jpg', 0, 1),
(30, 'ekB3gR5yp1plDyNHQ7HZmABPItWkQb0HywUz3mAv', 1000, 2000, 3, '0.jpg', 0, 1),
(31, 'miwGZ9WQeG0lVdV7rC6kV88w4h4GVl5f2iYo1FJp', 1000, 2000, 3, '0.jpg', 0, 1),
(32, 'kconFsr3iTN47frHdSVbYEkKsDVf95jVuZYJqI2c', 1000, 2000, 3, '0.jpg', 0, 1),
(33, '2Z6AOTYgsQyPFcySkjZxLfeqpx220yQwpOErH6Iw', 1000, 2000, 3, '0.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aleas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'admin', 'admin@mail.ru', '2022-07-14 17:00:33', '$2y$10$7uCpXQArCCICMFydlo8tAOuuVB2F6wJqLVztWm78pVnSnybxlyANu', NULL, '2022-07-14 17:00:33', '2022-07-14 17:00:33', 1),
(2, 'oleg', 'oleg@mail.ru', NULL, '$2y$10$7uCpXQArCCICMFydlo8tAOuuVB2F6wJqLVztWm78pVnSnybxlyANu', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `widgets`
--

CREATE TABLE `widgets` (
  `id` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `widgets`
--

INSERT INTO `widgets` (`id`, `name`, `content`) VALUES
(1, 'Sign Up for Newsletters', 'Be the First to Know. Sign up for newsletter today');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `page`
--
ALTER TABLE `page`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
