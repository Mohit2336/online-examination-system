-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql213.infinityfree.com
-- Generation Time: May 03, 2026 at 02:03 AM
-- Server version: 11.4.10-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41773066_examsportal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `total_questions` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `exam_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `user_name`, `subject_id`, `total_questions`, `score`, `percentage`, `exam_date`) VALUES
(1, 'MOHIT YADAV ', 0, 2, 2, 100, '2026-04-28 16:49:48'),
(2, 'MOHIT YADAV ', 0, 1, 1, 100, '2026-04-28 17:01:37'),
(3, 'MOHIT YADAV ', 0, 2, 2, 100, '2026-04-28 17:20:53'),
(4, 'MOHIT YADAV ', 0, 2, 2, 100, '2026-04-29 09:19:07'),
(5, 'MOHIT YADAV ', 0, 20, 19, 95, '2026-04-29 17:39:34'),
(6, 'MOHIT YADAV ', 0, 1, 1, 100, '2026-04-30 09:23:05'),
(7, 'MOHIT YADAV ', 0, 2, 2, 100, '2026-05-01 11:49:02'),
(8, 'MOHIT YADAV ', 0, 5, 4, 80, '2026-05-03 01:54:55'),
(9, 'MOHIT YADAV ', 0, 5, 5, 100, '2026-05-03 05:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 1, '2 + 2 = ?', '2', '3', '4', '5', '4'),
(2, 1, '5 * 2 = ?', '10', '8', '6', '12', '10'),
(3, 2, 'Synonym of Happy?', 'Sad', 'Joyful', 'Angry', 'Tired', 'Joyful'),
(4, 3, 'Capital of India?', 'Delhi', 'Mumbai', 'Kolkata', 'Chennai', 'Delhi'),
(5, 4, 'Who developed the C language?', 'Dennis Ritchie', 'James Gosling', 'Bjarne Stroustrup', 'Guido van Rossum', 'Dennis Ritchie'),
(6, 5, 'à¤¨à¤¿à¤®à¥à¤¨à¤²à¤¿à¤–à¤¿à¤¤ à¤¶à¥à¤°à¥ƒà¤‚à¤–à¤²à¤¾ à¤®à¥‡à¤‚ à¤²à¥à¤ªà¥à¤¤ à¤ªà¤¦ (Missing Term) à¤•à¤¾ à¤šà¤¯à¤¨ à¤•à¤°à¥‡à¤‚: AZ, CX, EV, ?', 'GT', 'GS', 'HS', 'FU', 'GT'),
(7, 4, 'What is called the brain of the computer?', 'RAM', 'CPU', 'Hard Disk', 'Monitor', 'CPU'),
(8, 4, 'Which of the following is an input device?', 'Printer', 'Monitor', 'Keyboard', 'Speaker', 'Keyboard'),
(9, 4, 'What is the full form of ROM?', 'Read Only Memory ', 'Random Only Memory', 'Run Only Memory', 'Read Open Memory', 'Read Only Memory'),
(10, 4, 'What is the main() function in C?', 'Optional', 'Starting point of the program', 'A loop', 'A variable', 'Starting point of the program'),
(11, 4, 'What is the purpose of a loop?', 'Decision making', 'Repetition of code', 'Taking input', 'Displaying output', 'Repetition of code'),
(12, 4, 'What is the full form of SQL?', 'Structured Query Language', 'Simple Query Language', 'Standard Question Language', 'Structured Question Logic', 'Structured Query Language'),
(13, 4, 'Which command is used to insert data into a table?', 'SELECT', 'UPDATE', 'INSERT', 'DELETE', 'INSERT'),
(14, 4, 'Which command is used to retrieve data from a table?', 'GET', 'SELECT', 'FETCH', 'OPEN', 'SELECT'),
(15, 4, 'What does Internet stand for?', 'International Network', 'Interconnected Network', 'Internal Network', 'Inter Net', 'Interconnected Network'),
(16, 4, 'What is the purpose of an IP address?', 'To increase speed', 'To identify a computer on a network', 'For storage', 'For printing', 'To identify a computer on a network'),
(17, 4, 'What is the full form of WWW?', 'World Wide Web', 'World Web Wide', 'Web World Wide', 'Wide Web World', 'World Wide Web'),
(18, 4, 'What is the main function of an Operating System?', 'Manage hardware and software resources', 'Play games', 'Run internet', 'Typing', 'Manage hardware and software resources'),
(19, 4, 'Windows is which type of Operating System?', 'Open Source', 'Closed Source', 'Network OS', 'None', 'Closed Source'),
(20, 4, 'Linux is which type of Operating System?', 'Paid', 'Closed Source', 'Open Source', 'None', 'Open Source'),
(21, 4, 'What is the purpose of a Primary Key in a database?', 'Allows duplicates', 'Uniquely identifies records', 'Deletes data', 'Sorts data', 'Uniquely identifies records'),
(22, 4, 'What does a compiler do?', 'Executes code', 'Converts high-level code into machine code', 'Stores data', 'Deletes files', 'Converts high-level code into machine code'),
(23, 4, 'What is the full form of HTML?', 'Hyper Text Markup Language', 'High Text Machine Language', 'Hyper Tool Multi Language', 'None', 'Hyper Text Markup Language'),
(24, 4, 'Which device is used for printing?', 'Monitor', 'Printer', 'Scanner', 'Mouse', 'Printer'),
(25, 4, 'Which is system software?', 'MS Word', 'Windows', 'Excel', 'Chrome', 'Windows'),
(26, 2, 'Choose the correct antonym of Big:', 'Large', 'Huge', 'Small', 'Wide', 'Small'),
(27, 2, 'Fill in the blank:\r\nShe ___ going to school.', 'is', 'are', 'am', 'be', 'is'),
(28, 2, 'Choose the correct article:\r\n___ apple a day keeps the doctor away.', 'A', 'An', 'The', 'No article', 'An'),
(29, 2, 'Identify the noun:', 'Run', 'Beautiful', 'Book', 'Quickly', 'Book'),
(30, 2, 'Identify the verb:', 'Table', 'Run', 'Blue', 'Happy', 'Run'),
(31, 2, 'Choose the correct spelling:', 'Recieve', 'Receive', 'Receeve', 'Receve', 'Receive'),
(32, 2, 'Fill in the blank:\r\nHe ___ a letter yesterday.', 'write', 'writes', 'wrote', 'writing', 'wrote'),
(33, 2, 'Choose the correct preposition:\r\nShe is sitting ___ the chair.', 'in', 'on', 'at', 'under ', 'on'),
(34, 2, 'Choose the correct sentence:', 'She go to school daily', 'She goes to school daily', 'She going to school', 'She gone school', 'She goes to school daily'),
(35, 2, 'Identify the adjective:', 'Quickly', 'Run', 'Beautiful', 'Speak', 'Beautiful'),
(36, 2, 'Choose the correct tense:\r\nI ___ my homework now.', 'do', 'did', 'am doing', 'done', 'am doing'),
(37, 2, 'Choose the correct pronoun:\r\n___ is my friend.', 'He', 'Him', 'His', 'Himself', 'He'),
(38, 2, 'Choose the plural form of Child:', 'Childs', 'Children', 'Childes', 'Child', 'Children'),
(39, 2, 'Choose the correct conjunction:\r\nI was tired ___ I went to bed.', 'but', 'so', 'because', 'although', 'so'),
(40, 2, 'Fill in the blank:\r\nThey ___ playing cricket.', 'is', 'are', 'am', 'be', 'are'),
(41, 2, 'Choose the correct meaning of Brave:', 'Coward', 'Fearless', 'Weak', 'Lazy', 'Fearless'),
(42, 2, 'Choose the correct antonym of Hot:', 'Warm', 'Cold', 'Boiling', 'Heat', 'Cold'),
(43, 2, 'Choose the correct sentence:', 'He don\'t like tea', 'He doesn\'t like tea', 'He not like tea', 'He no like tea', 'He doesn\'t like tea'),
(44, 2, 'Arrange the following parts to form a meaningful sentence:\r\nP: in the park\r\nQ: are playing\r\nR: the children\r\nS: happily', 'RQSP', 'RQPS', 'RQSP', 'RQSP', 'RQSP'),
(45, 1, 'What is 25% of 200?', '25', '40', '50', '75', '50'),
(46, 1, 'If X+5=12, find x.\r\nX+5=12', '5', '6', '7', '8', '7'),
(47, 1, 'What is the square of 15?', '200', '210', '225', '250', '225'),
(48, 1, 'What is the cube of 4?', '12', '16', '64', '32', '64'),
(49, 1, 'Find the value of: 12 Ã— 8', '88', '96', '108', '86', '96'),
(50, 1, 'Simplify: 100 Ã· 5', '10', '15', '20', '25', '20'),
(51, 1, 'What is the LCM of 4 and 6?', '10', '12', '8', '24', '12'),
(52, 1, 'What is the HCF of 12 and 18?', '2', '3', '6', '9', '6'),
(53, 1, 'A number increased by 10 is 50. Find the number.\r\nX+10=50', '30', '35', '40', '45', '40'),
(54, 1, 'What is 10% of 500?', '25', '50', '75', '100', '50'),
(55, 1, 'If a = 5, b = 3, find a + b', '6', '7', '8', '9', '8'),
(56, 1, 'Find the perimeter of a square of side 4 cm.', '12 cm', '14 cm', '16 cm', '18 cm', '16 cm'),
(57, 1, 'Find the area of a rectangle: length = 5 cm, width = 4 cm', '20 cmÂ²', '25 cmÂ²', '15 cmÂ²', '10 cmÂ²', '20 cmÂ²'),
(58, 1, 'Find the average of 2, 4, 6, 8', '4', '5', '6', '7', '5'),
(59, 1, 'What is the simple interest on â‚¹1000 at 10% for 1 year?', 'â‚¹50', 'â‚¹100', 'â‚¹150', 'â‚¹200', 'â‚¹100'),
(60, 1, 'Convert 1/2 into percentage', '25%', '50%', '75%', '100%', '50%'),
(61, 1, 'What is the value of âˆš49?', '6', '7', '8', '9', '7'),
(62, 1, 'If 2x = 10, find x\r\n2x = 10', '2', '3', '5', '10', '5'),
(63, 1, 'What is the ratio of 10:20?', '1:2', '2:1', '1:1', '2:3', '1:2'),
(64, 1, 'Find the value of 7Â²', '42', '48', '49', '56', '49'),
(65, 3, 'Who is known as the Father of the Nation in India?', 'Jawaharlal Nehru', 'Mahatma Gandhi', 'Subhas Chandra Bose', 'Bhagat Singh', 'Mahatma Gandhi'),
(66, 3, 'Which is the largest planet in the solar system?', 'Earth', 'Mars', 'Jupiter', 'Venus', 'Jupiter'),
(67, 3, 'What is the national animal of India?', 'Lion', 'Elephant', 'Tiger', 'Leopard', 'Tiger'),
(68, 3, 'Which river is the longest in India?', 'Yamuna', 'Ganga', 'Godavari', 'Narmada', 'Ganga'),
(69, 3, 'Who invented the telephone?', 'Thomas Edison', 'Alexander Graham Bell ', 'Nikola Tesla', 'Newton', 'Alexander Graham Bell '),
(70, 3, 'Which is the smallest continent?', 'Europe', 'Australia', 'Antarctica', 'South America', 'Australia'),
(71, 3, 'What is the national currency of India?', 'Dollar', 'Rupee', 'Euro', 'Pound', 'Rupee'),
(72, 3, 'Who wrote the National Anthem of India?', 'Rabindranath Tagore', 'Bankim Chandra', 'Gandhi', 'Nehru', 'Rabindranath Tagore'),
(73, 3, 'Which is the fastest land animal?', 'Lion', 'Tiger', 'Cheetah', 'Leopard', 'Cheetah'),
(74, 3, 'What is the full form of ISRO?', 'Indian Space Research Organisation', 'International Space Research Org', 'Indian Satellite Research Org', 'None', 'Indian Space Research Organisation'),
(75, 3, 'Who was the first Prime Minister of India?', 'Mahatma Gandhi', 'Jawaharlal Nehru', 'Sardar Patel', 'Rajendra Prasad', 'Jawaharlal Nehru'),
(76, 3, 'Which gas do plants absorb?', 'Oxygen', 'Nitrogen', 'Carbon Dioxide', 'Hydrogen', 'Carbon Dioxide'),
(77, 3, 'Which is the largest ocean in the world?', 'Atlantic', 'Indian', 'Pacific', 'Arctic', 'Pacific'),
(78, 3, 'Who discovered gravity?', 'Einstein', 'Newton', 'Galileo', 'Tesla', 'Newton'),
(79, 3, 'What is the boiling point of water?', '90Â°C', '100Â°C', '120Â°C', '80Â°C', '100Â°C'),
(80, 3, 'Which country is known as the Land of the Rising Sun?', 'China', 'Japan', 'Korea', 'Thailand', 'Japan'),
(81, 3, 'Which is the national sport of India (traditionally)?', 'Cricket', 'Hockey', 'Football', 'Kabaddi', 'Hockey'),
(82, 3, 'Who was the first President of India?', 'Dr. Rajendra Prasad', 'Nehru', 'Gandhi', 'Abdul Kalam', 'Dr. Rajendra Prasad'),
(83, 3, 'Which vitamin is obtained from sunlight?', 'Vitamin A', 'Vitamin B', 'Vitamin C', 'Vitamin D', 'Vitamin D'),
(84, 5, 'à¤¶à¥à¤°à¥ƒà¤‚à¤–à¤²à¤¾ à¤ªà¥‚à¤°à¥€ à¤•à¤°à¥‡à¤‚:\r\n2, 4, 8, 16, ___', '18', '20', '32', '24', '32'),
(85, 5, 'à¤¯à¤¦à¤¿ CAT = 24, à¤¤à¥‹ DOG = ?', '36', '28', '30', '26', '26'),
(86, 5, 'à¤µà¤¿à¤·à¤® à¤¶à¤¬à¥à¤¦ à¤šà¥à¤¨à¤¿à¤:', 'Apple', 'Mango', 'Car', 'Banana', 'Car'),
(87, 5, 'A, B à¤¸à¥‡ à¤²à¤‚à¤¬à¤¾ à¤¹à¥ˆà¥¤ B, C à¤¸à¥‡ à¤²à¤‚à¤¬à¤¾ à¤¹à¥ˆà¥¤ à¤¸à¤¬à¤¸à¥‡ à¤²à¤‚à¤¬à¤¾ à¤•à¥Œà¤¨?', 'B', 'C', 'A', 'Cannot say', 'A'),
(88, 5, 'à¤¦à¤°à¥à¤ªà¤£ à¤ªà¥à¤°à¤¤à¤¿à¤¬à¤¿à¤‚à¤¬ à¤®à¥‡à¤‚ LEFT à¤•à¥ˆà¤¸à¥‡ à¤¦à¤¿à¤–à¥‡à¤—à¤¾?', 'TFEL', 'LEFT', 'FLET', 'LTFE', 'TFEL'),
(89, 5, '5 + 3 Ã— 2 = ?', '16', '11', '10', '13', '11'),
(90, 5, '1, 3, 6, 10, ___', '12', '14', '15', '18', '15'),
(91, 5, 'A = 1, B = 2, à¤¤à¥‹ Z = ?', '24', '25', '26', '27', '26'),
(92, 5, 'à¤˜à¤¡à¤¼à¥€ à¤®à¥‡à¤‚ 3:00 à¤¬à¤œà¥‡ à¤˜à¤‚à¤Ÿà¥‡ à¤”à¤° à¤®à¤¿à¤¨à¤Ÿ à¤•à¥€ à¤¸à¥à¤ˆ à¤•à¤¾ à¤•à¥‹à¤£ à¤•à¤¿à¤¤à¤¨à¤¾ à¤¹à¥‹à¤—à¤¾?', '90Â°', '60Â°', '120Â°', '180Â°', '90Â°'),
(93, 5, 'à¤¯à¤¦à¤¿ RAM = 82, à¤¤à¥‹ SAM = ?', '75', '80', '79', '89', '79'),
(94, 5, 'à¤¯à¤¦à¤¿ 7 Ã— 6 = 42, à¤¤à¥‹ 9 Ã— 8 = ?', '72', '70', '74', '76', '72'),
(95, 5, 'à¤¶à¤¬à¥à¤¦ \"INDIA\" à¤®à¥‡à¤‚ à¤•à¤¿à¤¤à¤¨à¥‡ à¤…à¤•à¥à¤·à¤° à¤¹à¥ˆà¤‚?', '4', '5', '6', '7', '5'),
(96, 5, 'à¤à¤• à¤µà¤°à¥à¤— à¤®à¥‡à¤‚ à¤•à¤¿à¤¤à¤¨à¥‡ à¤­à¥à¤œà¤¾à¤à¤ à¤¹à¥‹à¤¤à¥€ à¤¹à¥ˆà¤‚?', '3', '4', '5', '6', '4'),
(97, 5, '10, 20, 40, 80, ___', '120', '140', '160', '180', '160'),
(98, 5, '100 à¤•à¤¾ à¤†à¤§à¤¾ à¤•à¥à¤¯à¤¾ à¤¹à¥ˆ?', '25', '40', '50', '60', '50'),
(99, 5, 'à¤¯à¤¦à¤¿ à¤•à¥à¤› à¤ªà¥‡à¤¨ à¤¨à¥€à¤²à¥‡ à¤¹à¥ˆà¤‚ à¤”à¤° à¤•à¥à¤› à¤ªà¥‡à¤¨ à¤²à¤¾à¤² à¤¹à¥ˆà¤‚, à¤¤à¥‹ à¤•à¥à¤¯à¤¾ à¤¨à¤¿à¤·à¥à¤•à¤°à¥à¤· à¤¹à¥‹à¤—à¤¾?', 'à¤¸à¤­à¥€ à¤ªà¥‡à¤¨ à¤¨à¥€à¤²à¥‡ à¤¹à¥ˆà¤‚', 'à¤¸à¤­à¥€ à¤ªà¥‡à¤¨ à¤²à¤¾à¤² à¤¹à¥ˆà¤‚', 'à¤•à¥à¤› à¤ªà¥‡à¤¨ à¤¨à¥€à¤²à¥‡ à¤”à¤° à¤²à¤¾à¤² à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¹à¥‹ à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚', 'à¤•à¥‹à¤ˆ à¤¨à¤¿à¤·à¥à¤•à¤°à¥à¤· à¤¨à¤¹à¥€à¤‚', 'à¤•à¥à¤› à¤ªà¥‡à¤¨ à¤¨à¥€à¤²à¥‡ à¤”à¤° à¤²à¤¾à¤² à¤¦à¥‹à¤¨à¥‹à¤‚ à¤¹à¥‹ à¤¸à¤•à¤¤à¥‡ à¤¹à¥ˆà¤‚'),
(100, 5, 'X, Y à¤•à¤¾ à¤­à¤¾à¤ˆ à¤¹à¥ˆà¥¤ Y, Z à¤•à¥€ à¤¬à¤¹à¤¨ à¤¹à¥ˆà¥¤ Z à¤•à¤¾ à¤­à¤¾à¤ˆ à¤•à¥Œà¤¨?', 'X', 'Y', 'Z', 'None', 'X'),
(101, 5, '4, 9, 16, 25, ___', '30', '35', '36', '40', '36'),
(102, 5, 'A : B :: C : ?', 'D', 'E', 'F', 'G', 'D'),
(103, 5, 'à¤à¤• à¤†à¤¦à¤®à¥€ à¤‰à¤¤à¥à¤¤à¤° à¤•à¥€ à¤“à¤° à¤®à¥à¤‚à¤¹ à¤•à¤°à¤•à¥‡ à¤–à¤¡à¤¼à¤¾ à¤¹à¥ˆ, à¤µà¤¹ à¤¦à¤¾à¤à¤ à¤®à¥à¤¡à¤¼à¤¤à¤¾ à¤¹à¥ˆ, à¤«à¤¿à¤° à¤¦à¤¾à¤à¤ à¤®à¥à¤¡à¤¼à¤¤à¤¾ à¤¹à¥ˆà¥¤ à¤…à¤¬ à¤µà¤¹ à¤•à¤¿à¤¸ à¤¦à¤¿à¤¶à¤¾ à¤®à¥‡à¤‚ à¤¹à¥ˆ?', 'à¤ªà¥‚à¤°à¥à¤µ', 'à¤¦à¤•à¥à¤·à¤¿à¤£', 'à¤ªà¤¶à¥à¤šà¤¿à¤®', 'à¤‰à¤¤à¥à¤¤à¤°', 'à¤¦à¤•à¥à¤·à¤¿à¤£');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_name`, `marks`, `date`) VALUES
(1, 'MOHIT YADAV ', 1, '2026-04-28 00:49:37'),
(2, 'MOHIT YADAV ', 1, '2026-04-28 00:50:48'),
(3, 'MOHIT YADAV ', 1, '2026-04-28 04:13:10'),
(4, 'MOHIT YADAV ', 0, '2026-04-28 04:13:38'),
(5, 'MOHIT YADAV ', 1, '2026-04-28 04:20:08'),
(6, 'MOHIT YADAV ', 0, '2026-04-28 04:48:00'),
(7, 'MOHIT YADAV ', 1, '2026-04-28 05:11:22'),
(8, 'MOHIT YADAV ', 1, '2026-04-28 07:02:18'),
(9, 'MOHIT YADAV ', 1, '2026-04-28 07:03:44'),
(10, 'MOHIT YADAV ', 1, '2026-04-28 07:20:35'),
(11, 'MOHIT YADAV ', 0, '2026-04-28 07:37:08'),
(12, 'MOHIT YADAV ', 0, '2026-04-28 07:37:11'),
(13, 'MOHIT YADAV ', 0, '2026-04-28 07:37:13'),
(14, 'MOHIT YADAV ', 0, '2026-04-28 07:37:19'),
(15, 'MOHIT YADAV ', 0, '2026-04-28 07:37:26'),
(16, 'MOHIT YADAV ', 0, '2026-04-28 07:37:29'),
(17, 'MOHIT YADAV ', 0, '2026-04-28 07:37:32'),
(26, 'MOHIT YADAV ', 1, '2026-04-28 08:09:38'),
(27, 'MOHIT YADAV ', 1, '2026-04-28 08:10:23'),
(28, 'MOHIT YADAV ', 1, '2026-04-28 08:11:22'),
(29, 'MOHIT YADAV ', 1, '2026-04-28 08:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`) VALUES
(1, 'Mathematics'),
(2, 'English'),
(3, 'General Knowledge'),
(4, 'Computer Science'),
(5, 'Reasoning');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'MOHIT YADAV ', 'mohitsy268@gmail.com', 'Mohit@12345'),
(2, 'Madeeha', 'madeehashahid1525@gmail.com', '54321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
