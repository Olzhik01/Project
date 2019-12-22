-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2019 г., 14:18
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `findbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `book_id` int(11) UNSIGNED NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `num_pages` int(11) NOT NULL,
  `book_release` int(11) NOT NULL,
  `book_status` varchar(20) NOT NULL,
  `age_restric` int(11) NOT NULL,
  `book_format` varchar(20) NOT NULL,
  `book_weight` varchar(20) NOT NULL,
  `book_cover` varchar(20) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_phone` varchar(200) NOT NULL,
  `present_text` text NOT NULL,
  `overview_text` text NOT NULL,
  `book_category` varchar(20) NOT NULL,
  `book_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `num_pages`, `book_release`, `book_status`, `age_restric`, `book_format`, `book_weight`, `book_cover`, `contact_name`, `contact_phone`, `present_text`, `overview_text`, `book_category`, `book_image`) VALUES
(1, 'Abai', 'Muxtar', 300, 2000, 'available', 12, 'A4', '78g', 'Normal', 'Olzhas', '87024869876', 'fdsf', 'fdsf', 'sciencs', '5df81d9390c4d0.14401871.jpg'),
(5, 'Abai', 'Author', 20, 2020, 'available', 12, 'A4', '78g', 'Normal', 'Olzhas', '87024869876', 'Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.', 'Text messages are used for personal, family, business and social purposes. Governmental and non-governmental organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages has become an accepted part of many cultures, as happened earlier with emailing.[1] This makes texting a quick and easy way to communicate with friends, family and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voicemail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.', 'drama', '5df890ec249662.94756261.jpeg'),
(27, 'Book name', 'Author', 20, 2020, 'ava', 2, 'das', '78g', 'dsad', 'fdsf', 'dfsf', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'triller', '5df9c4d6351fb1.81616285.jpg'),
(28, 'Book name', 'Author', 20, 2020, 'ava', 2, 'das', '78g', 'dsad', 'fdsf', 'dfsf', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'triller', '5df9c4f1560820.44337446.jpg'),
(29, 'Book name', 'Author', 20, 2020, 'ava', 2, 'das', '78g', 'dsad', 'fdsf', 'dfsf', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'A book is a medium for recording information in the form of writing and images, typically composed of pages that are bound together and protected by a cover.[1] The technical term for this physical arrangement is codex. A single sheet in a codex is a leaf, and each side of a leaf is a page. In the history of hand-held physical supports for extended written compositions or records, the scroll dominated the written world prior to the codex.', 'triller', '5df9c4fe1de1e8.60398138.jpg'),
(35, 'Book name', 'Author', 300, 2020, 'available', 12, 'das', '78g', 'dsad', 'Olzhas', '87024869876', 'Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.', 'Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.Text messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile devices, desktops/laptops, or other type of compatible computer. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.', 'kids', '5dfbfdeea8e654.59676539.jpg'),
(37, 'Alena', 'Olzhas', 20, 2020, 'available', 2, 'A4', '78g', 'dsad', 'dsad', '87024869876', 'Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð½ÑƒÑ‚Ñ€Ð¸ ÑÑ‡ÐµÐµÐº.\r\n(1) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ñ€Ð¾ÐºÐ¸ (Ð¿Ð¾ Ð³Ð¾Ñ€Ð¸Ð·Ð¾Ð½Ñ‚Ð°Ð»Ð¸).\r\n(2) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ð¾Ð»Ð±Ñ†Ð° (Ð¿Ð¾ Ð²ÐµÑ€Ñ‚Ð¸ÐºÐ°Ð»Ð¸).', 'Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð½ÑƒÑ‚Ñ€Ð¸ ÑÑ‡ÐµÐµÐº.\r\n(1) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ñ€Ð¾ÐºÐ¸ (Ð¿Ð¾ Ð³Ð¾Ñ€Ð¸Ð·Ð¾Ð½Ñ‚Ð°Ð»Ð¸).\r\n(2) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ð¾Ð»Ð±Ñ†Ð° (Ð¿Ð¾ Ð²ÐµÑ€Ñ‚Ð¸ÐºÐ°Ð»Ð¸).Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð½ÑƒÑ‚Ñ€Ð¸ ÑÑ‡ÐµÐµÐº.\r\n(1) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ñ€Ð¾ÐºÐ¸ (Ð¿Ð¾ Ð³Ð¾Ñ€Ð¸Ð·Ð¾Ð½Ñ‚Ð°Ð»Ð¸).\r\n(2) Ð’Ñ‹Ñ€Ð°Ð²Ð½Ð¸Ð²Ð°ÐµÑ‚ ÑÐ»ÐµÐ¼ÐµÐ½Ñ‚Ñ‹ Ð²Ð´Ð¾Ð»ÑŒ Ð¾ÑÐ¸ ÑÑ‚Ð¾Ð»Ð±Ñ†Ð° (Ð¿Ð¾ Ð²ÐµÑ€Ñ‚Ð¸ÐºÐ°Ð»Ð¸).', 'detective', '5dfcc986da1609.26783722.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `favorite_books`
--

CREATE TABLE `favorite_books` (
  `favorite_book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favorite_books`
--

INSERT INTO `favorite_books` (`favorite_book_id`) VALUES
(36),
(37);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`) VALUES
(8, 'Olzhas', 'Syrbek', 'admin', 'admin'),
(9, 'Olzhas', 'Syrbek', 'olzhas', 'root'),
(10, 'Alisher', 'Koi', 'alisher', 'alisher');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `favorite_books`
--
ALTER TABLE `favorite_books`
  ADD PRIMARY KEY (`favorite_book_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
