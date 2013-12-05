-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2013 at 10:45 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE IF NOT EXISTS `advisor` (
  `advisor_name` varchar(200) NOT NULL,
  `advisor_id` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(100) NOT NULL,
  `last_modified_at` datetime NOT NULL,
  `interest` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `advisor_id` (`advisor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`advisor_name`, `advisor_id`, `id`, `pass`, `last_modified_at`, `interest`) VALUES
('Dr. Ashish Anand', 'anand.ashish', 2, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2013-04-14 20:55:49', 'MACHINE LEARNNG,COMPUTATIONAL BIOLOGY'),
('Dr. Amit Awekar', 'awekar', 3, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-10 11:53:48', 'DATA MINING'),
('Prof. Gautam Barua', 'gb', 4, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'OPERATING SYSTEMS,DATABASE,NETWORKING'),
('Dr. Purandar Bhaduri', 'pbhaduri', 5, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'EMBEDED SYSTEMS'),
('Dr. Samit Bhattacharya', 'samit', 6, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'HUMAN COMPUTER INTERACTIONS'),
('Dr. Santosh Biswas', 'santosh_biswas', 7, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'NETWORKING,EMBEDED SYSTEMS,VLSI'),
('Dr. Pradip Kr. Das', 'pkdas', 8, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-20 14:32:31', 'INTELLIGENT SYSTEMS'),
('Dr. Jatindra Kr. Deka', 'jatin', 9, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'VLSI'),
('Dr. Diganta Goswami', 'dgoswami', 10, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'SOFTWARE ENGINEERING'),
('Dr. R. Inkulu', 'rinkulu', 11, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ALGORITHMS'),
('Dr. Benny George K', 'ben', 12, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ALGORITHMS,COMBINATORICS'),
('Dr. Hemangee Kalpesh Kapoor', 'hemangee', 13, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-18 11:24:59', 'COMPUTER ARCHITECTURE'),
('Dr. Sushanta Karmakar', 'sushantak', 14, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ALGORITHMS,NETWORKING'),
('Dr. Pinaki Mitra', 'pinaki', 15, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ALGORITHMS, COMPUTATIONAL GEOMETRY'),
('Dr. S. B. Nair', 'sbnair', 16, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'INTELLIGENT SYSTEMS'),
('Prof. Sukumar Nandi', 'sukumar', 17, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'NETWORKING'),
('Dr. S. V. Rao', 'svrao', 18, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-11-16 09:52:50', 'COMPUTATIONAL GEOMETRY'),
('Dr. Aryabartta Sahu', 'asahu', 19, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'EMBEDED SYSTEMS,VLSI,COMPUTER ARCHITECTURE'),
('Dr. Sajith G.', 'sajith', 20, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ALGORITHMS'),
('Dr. V. Vijaya Saradhi', 'saradhi', 21, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'MACHINE LEARNING, DATA MINING'),
('Dr. Sanasam Ranbir Singh', 'ranbir', 22, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'MACHINE LEARNING, DATA MINING'),
('Dr. Arijit Sur', 'arijit', 23, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2013-04-15 21:45:00', 'STEGANOGRAPHY'),
('Dr. T. Venkatesh', 't.venkat', 24, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'NETWORKING'),
('Prof. Krishnamachar Sreenivasan', 'sreenivasan', 25, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-18 17:02:55', 'GAME THEORY'),
('Dr. Deep Medhi', 'dmedhi', 26, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-09 00:00:00', 'ARTIFICIAL INTELLIGENCE'),
('Admin', 'thesisadmin', 27, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-04-13 00:00:00', 'COMPLEXITY THEORY'),
('Dr. Deepanjan Kesh', 'deepkesh', 28, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-11-09 10:32:13', 'ALGEBRA'),
('Dr. Saswata Shannigrahi', 'saswata.sh', 29, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-11-09 10:34:03', 'ALGORITHMS, COMPUTATIONAL GEOMETRY'),
('Dr. Asish Mukhopadhyay', 'asishm', 30, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2012-11-09 10:35:54', 'WEB MINING'),
('Dr. Arnab Sarkar', 'arnabsarkar', 31, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2013-04-15 08:44:54', 'EMBEDED SYSTEMS, COMPUTER ARCHITECTURE, ALGORITHMS'),
('Dr. Sandipan Dandapat', 'sdandapat', 32, 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2013-04-15 08:45:19', '');

-- --------------------------------------------------------

--
-- Table structure for table `calander`
--

CREATE TABLE IF NOT EXISTS `calander` (
  `Totime` datetime DEFAULT NULL,
  `Fromtime` datetime DEFAULT NULL,
  `User_name` text,
  `Content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calander`
--

INSERT INTO `calander` (`Totime`, `Fromtime`, `User_name`, `Content`) VALUES
('2013-12-04 00:00:00', '2013-12-03 15:30:00', 'santosh_biswas', ' test'),
('2013-12-05 08:35:00', '2013-12-04 00:14:00', 'santosh_biswas', ' vjhvjh j j jh fkkkk jgjjkfj');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `from_id` varchar(100) NOT NULL,
  `to_id` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `unread` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`time`, `from_id`, `to_id`, `message`, `unread`) VALUES
('2013-11-30 09:21:31', 'santosh_biswas', 'shashi', 'Finally, Done this...', 0),
('2013-11-30 09:21:31', 'santosh_biswas', 'shashi', 'Hmmm...', 0),
('2013-11-30 09:21:18', 'shashi', 'santosh_biswas', 'Reply 1', 0),
('2013-11-30 09:21:18', 'shashi', 'santosh_biswas', 'Reply 2: Finally!!!!', 0),
('2013-12-02 07:43:37', 'shashi', 'santosh_biswas', 'yo', 0),
('2013-12-02 07:44:18', 'santosh_biswas', 'shashi', 'seriously, stop!', 0),
('2013-12-02 07:44:46', 'shashi', 'santosh_biswas', 'lol', 0),
('2013-12-02 07:44:47', 'shashi', 'santosh_biswas', ':P', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission_log`
--

CREATE TABLE IF NOT EXISTS `permission_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advisor_id` varchar(50) NOT NULL,
  `permitted_to` varchar(50) NOT NULL,
  `permitted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `advisor_id` (`advisor_id`),
  KEY `permitted_to` (`permitted_to`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

--
-- Dumping data for table `permission_log`
--

INSERT INTO `permission_log` (`id`, `advisor_id`, `permitted_to`, `permitted_at`) VALUES
(203, 'saradhi', 'aditya.k', '2013-04-14 18:49:59'),
(204, 'saradhi', 'a.parag', '2013-04-14 18:50:02'),
(205, 'saradhi', 'r.barua', '2013-04-14 18:50:03'),
(206, 'saradhi', 'k.virendra', '2013-04-14 18:50:04'),
(207, 'sbnair', 'akash.g', '2013-04-15 10:40:59'),
(208, 'sbnair', 'behara', '2013-04-15 10:41:02'),
(209, 'hemangee', 'k.apoorv', '2013-04-15 12:01:52'),
(210, 'hemangee', 'm.narendra', '2013-04-15 12:01:54'),
(211, 'hemangee', 'vibhuti', '2013-04-15 12:01:55'),
(212, 'awekar', 's.sumeet', '2013-04-15 17:42:10'),
(213, 'awekar', 'snehlata', '2013-04-15 17:42:24'),
(214, 'awekar', 'n.teja', '2013-04-15 17:42:26'),
(215, 'arijit', 'karri', '2013-04-15 21:44:29'),
(216, 'pinaki', 'y.singh', '2013-04-16 09:21:13'),
(217, 'pinaki', 'a.sonker', '2013-04-16 09:21:20'),
(218, 'pinaki', 'ayushi', '2013-04-16 09:21:21'),
(219, 'pinaki', 's.ratnu', '2013-04-16 09:21:24'),
(220, 'svrao', 'rovin', '2013-04-16 10:13:31'),
(221, 'svrao', 's.pardeshi', '2013-04-16 10:13:38'),
(222, 'svrao', 'gundlapalli', '2013-04-16 10:13:40'),
(223, 'asahu', 'c.prakash', '2013-04-16 12:26:48'),
(224, 'asahu', 'k.kuldeep', '2013-04-16 12:26:51'),
(225, 'asahu', 'sunil.k', '2013-04-16 12:26:55'),
(226, 'samit', 'a.madrosiya', '2013-04-16 16:21:34'),
(227, 'samit', 'ankit.j', '2013-04-16 16:21:41'),
(228, 'samit', 'k.sudhir', '2013-04-16 16:21:43'),
(229, 'samit', 'r.sethia', '2013-04-16 16:21:44'),
(230, 'thesisadmin', 's.sumeet', '2013-04-17 10:45:06'),
(231, 'thesisadmin', 's.sumeet', '2013-04-17 18:32:56'),
(232, 'thesisadmin', 's.sumeet', '2013-04-17 18:35:59'),
(233, 'saswata.sh', 'a.anshu', '2013-04-18 15:09:00'),
(234, 'saswata.sh', 'k.gunjan', '2013-04-18 15:09:01'),
(235, 'pkdas', 'v.goyal', '2013-04-19 06:39:30'),
(236, 'pkdas', 'tejinder', '2013-04-19 06:40:26'),
(237, 'pkdas', 'pasunuri', '2013-04-19 06:40:27'),
(238, 'pkdas', 'nagendra', '2013-04-19 06:40:28'),
(239, 'pkdas', 'n.dang', '2013-04-19 06:40:29'),
(240, 'anand.ashish', 'k.rajat', '2013-04-19 09:51:53'),
(241, 'anand.ashish', 't.shubham', '2013-04-19 09:51:56'),
(242, 'gb', 'shah', '2013-04-19 10:34:01'),
(243, 'gb', 's.singla', '2013-04-19 10:34:03'),
(244, 'gb', 'pooja', '2013-04-19 10:34:06'),
(245, 'arijit', 'a.syal', '2013-04-19 14:14:17'),
(246, 't.venkat', 'b.juhi', '2013-04-19 14:41:55'),
(247, 'saradhi', 'r.barua', '2013-04-19 15:25:14'),
(248, 'sajith', 'n.abhinandan', '2013-04-19 15:32:46'),
(249, 'sajith', 's.rajkumar', '2013-04-19 15:32:54'),
(250, 'sajith', 'n.prashanth', '2013-04-19 15:32:55'),
(251, 'santosh_biswas', 'purwar', '2013-04-19 16:02:31'),
(252, 'santosh_biswas', 'c.pravin', '2013-04-19 16:02:33'),
(253, 'santosh_biswas', 'rohit.raj', '2013-04-19 16:02:34'),
(254, 'arijit', 'r.borah', '2013-04-19 16:30:14'),
(255, 'pbhaduri', 'anik', '2013-04-19 16:48:02'),
(256, 'pbhaduri', 'saurabh.s', '2013-04-19 16:48:04'),
(257, 'ranbir', 'n.mehra', '2013-04-19 16:49:47'),
(258, 'ranbir', 'r.anurag', '2013-04-19 16:49:51'),
(259, 'ranbir', 'k.ankit', '2013-04-19 16:49:54'),
(260, 'gb', 'pooja', '2013-04-19 17:11:15'),
(261, 'dgoswami', 'r.akash', '2013-04-19 17:16:46'),
(262, 'dgoswami', 'pragya', '2013-04-19 17:16:48'),
(263, 'dgoswami', 'rahul.br', '2013-04-19 17:16:49'),
(264, 'anand.ashish', 'g.pranav', '2013-04-19 17:18:47'),
(265, 'sukumar', 'anchal', '2013-04-19 18:24:58'),
(266, 'sukumar', 'apul', '2013-04-19 18:24:59'),
(267, 'sukumar', 's.naga', '2013-04-19 18:25:00'),
(268, 'asahu', 'k.kuldeep', '2013-04-19 18:34:58'),
(269, 'thesisadmin', 'a.parolia', '2013-04-20 20:40:10'),
(270, 'thesisadmin', 'b.khatri', '2013-04-21 17:03:38'),
(271, 'thesisadmin', 'shashi', '2013-10-01 15:50:43'),
(272, 'santosh_biswas', 'c.pravin', '2013-10-01 15:52:45'),
(273, 'santosh_biswas', 'mayank.agl', '2013-10-01 15:58:13'),
(274, 'thesisadmin', 'a.jeph', '2013-10-09 12:48:22'),
(275, 'thesisadmin', 'n.kurakula', '2013-10-09 13:11:59'),
(276, 'thesisadmin', 'c.prakash', '2013-10-09 14:03:02'),
(277, 'thesisadmin', 'n.abhinandan', '2013-10-09 16:01:24'),
(278, 'thesisadmin', 'a.sonker', '2013-10-09 16:01:25'),
(279, 'thesisadmin', 'k.sudhir', '2013-10-09 16:57:14'),
(280, 'arijit', 'a.syal', '2013-10-09 19:02:13'),
(281, 'thesisadmin', 'v.goyal', '2013-12-03 13:06:27'),
(282, 'santosh_biswas', 'shashi', '2013-12-02 13:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `user_nm` varchar(200) NOT NULL,
  `thesis_title` varchar(400) NOT NULL,
  `report_file_name` varchar(50) NOT NULL,
  `abstract` text NOT NULL,
  `submitted_at` datetime NOT NULL,
  `submitted_by` varchar(400) NOT NULL,
  PRIMARY KEY (`user_nm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`user_nm`, `thesis_title`, `report_file_name`, `abstract`, `submitted_at`, `submitted_by`) VALUES
('a.anshu', 'Crossings and Intersections in Hypergraphs', '09010110.pdf', 'We address the problem of computing the number of intersecting hyperedges in a complete\r\nhypergraph embedded in an n- dimensional manifold. The problem has made considerable\r\nprogress in 2 and 3 dimensions. We attempt to build upon them by obtaining a lower bound on number of crossing pairs of hyperedges in a\r\ngeneral dimension and employing numerical techniques in 4 dimensions to obtain estimates\r\non lower bounds and upper bounds. We obtain a relation between the number of crossing\r\npairs and number of convex tuples, which may be useful in obtaining tight upper bounds on\r\nthese quantities. Ham-sandwich theorem serves as an important tool in our analysis, as it\r\ntransforms the difficult geometric problem into a combinatorial one.\r\n', '2013-04-19 16:59:17', 'ANURAG ANSHU[a.anshu]'),
('a.madrosiya', 'Aesthetics of Web Pages', 'Report.pdf', '              Attempts have been made to develop mechanisms which determine the aesthetic quality of web pages but most of them have considered only the geometric placement of the various components of the page. Text, along with being the most basic component of web pages is also the most abundant. This work attempts two different approaches for aesthetic modelling: first being the analytical method and second a machine learning approach, the co-training algorithm. Performances of these approaches are studied and compares with each other. Feature sets consist of factors derived from CSS and typography point of view. Both the approaches acquire their required data from multiple stage user studies conducted across various participants.                              ', '2013-04-19 17:21:08', 'AKSHAY MADROSIYA[a.madrosiya]'),
('a.parag', 'Learning from Cricket Text Commentary', '9010130-BTP2.pdf', 'In this work we study the applicability of Correspondence Analysis to the ESPN cricket text commentary to capture the patterns seen in the game of cricket. By analyzing these patterns we identify the vulnerabilities of individual players (or a team) as they would affect the outcome of a match. Hence it can be used to improve the performance of a player (or a team). To the best of our knowledge mining of cricket text commentary data to analyze and understand strength/weakness of a player has not been carried out in the literature. We attempt to do so in this work.\r\n\r\nWe propose a novel 3D cubical representation of the cricket commentary data for correspondence analysis. Each dimension in the 3D stands for batting features, bowling features and time (i.e. number of overs, breaks in the game, one full day, one innings etc.). Every pair of dimensions are sampled and contingency tables are formulated to analyze the weakness/strength of a player.\r\n\r\nBi-plots obtained through CA are simple to interpret. This approach can be applied to any player of any sport. In this work, we consider the following Indian cricket players,\r\nBowlers:\r\nZaheer Khan\r\nHarbhajan Singh \r\n\r\nBatsmen:\r\nM. S. Dhoni\r\nVirendra Sehwag\r\nfor test cricket matches only. Further, we provide inferences for the whole Indian Team also. Our findings over past 5 years of test cricket played by the above players are coherently explained.\r\n\r\nWe validate the obtained results through (i) critics'' comments available in the commentary and (ii) through a survey conducted on the Indian Institute of Technology	Guwahati cricket team players.\r\n\r\nKeywords: Correspondence Analysis (CA), Cricket Commentary, Text Commentary, Sports Data, Text Mining, Interrelationships and Patterns.', '2013-04-19 14:39:59', 'PARAG AGRAWAL[a.parag]'),
('a.parolia', 'MARS - A Mobile Agent platform for Robotic Systems', 'parolia.pdf', '    A mobile agent is a process that can transport its state from one environment to another,\r\nwith its data intact. Mobile agents perform a users task by migrating and executing on\r\nseveral hosts connected to the network. An agent platform is a technical structural design\r\nproviding the environment in which agents can actively exist and operate to achieve their\r\ngoals. Mobile agents provide the functionality of distributed computing paradigms and en-\r\nables a natural design philosophy for distributed computing systems. This provides robot\r\nsystem developers with variety of options for initial development and future extension of\r\ntheir systems, and an intuitive and robust design environment. Our goal is to design and\r\nimplement a software framework for multi-agent systems providing a common language and\r\na structured way that deals with the complexity of a robotic system.                                        ', '2013-04-20 20:40:59', 'AYUSH PAROLIA[a.parolia]'),
('a.sonker', 'Experimental Performance analysis of ARQs', 'BTP FINAL.pdf', '                                            The problem of errors in data communication and networks field is a growing concern. The\r\ntransmission errors caused by channel noise and channel bandwidth prevent the delivery of correct\r\ndata to the end user.\r\nTo solve this problem, a method of error correcting and error detecting codes is used. There are two\r\nbasic mechanisms to implement these methods: ARQ Schemes and forward error correction (FEC)\r\nschemes. These schemes are used in different scenarios and in some situations even a hybrid\r\napproach of these two are used.\r\n\r\nPerformance analysis and their pros and cons analysed\r\n', '2013-04-19 15:53:52', 'ABHINAV SONKER[a.sonker]'),
('a.syal', 'Scalable Watermarking for Spatial Adaptations', '09010113.pdf', '     \r\nWith the development of the internet, digital media has got tremendous acceleration. One\r\ncan easily find and download large number of images and videos from internet. However,\r\nthese advancements demand copyright and content authorization to prevent media piracy and media tampering. Digital\r\nwatermarking has been used for copy control and media identification.\r\n\r\nA scalable encoder encodes a video to its highest quality and the bitstream is adapted\r\naccording to the requirement of various communication channels and user-end display de-\r\nvices. The content adaptation is done by scaling the resolution quality and frame rate\r\nof the video. These content adaptations can corrupt content protection data. Content\r\nadaptation can be considered as potential attack to the watermark .\r\n\r\nIn this report a new watermarking scheme is proposed which is robust to geometric distortions and can be used for securing watermark during content adaptation. We make use of scale-invariant feature transform(SIFT) for our watermarking scheme. We study the various pre-existing watermarking\r\nmethods that use SIFT. A new watermarking scheme is then proposed which is shown to be more robust than the existing schemes.                                       ', '2013-04-19 19:35:52', 'AYUSH SYAL[a.syal]'),
('aditya.k', 'Subgraph Mining and its application in Network Traffic Identification', 'thesis.pdf', '        The study of graph mining, and specically frequent subgraph mining, has generated con-\r\nsiderable interest due to its potential uses in numerous areas. Since most large-scale data\r\nin elds like biology, networks, chemistry and many others can be modelled as a graph,\r\ngraph mining can be used to extract required information from large data. The problem is\r\nchallenging because there is an exponential number of possible subgraphs. Thus research on\r\nnew algorithms which can optimally nd frequent subgraphs is constantly ongoing. One of\r\nthe areas in which subgraph analysis can be used is network trac identication.                                    ', '2013-04-19 19:14:25', 'ADITYA KUMAR[aditya.k]'),
('akash.g', 'Emotional Control Over Situated Robots', 'BTP Report Akash Gupta(09010105).pdf', 'Many researchers have worked on to use artificial  human emotions on autonomous\r\nagents. These emotions helps agents to improve their abilities and perform better in an\r\nenvironment. They let agents to have good quality of life and perform more of high profile\r\ntasks throughout its life. In this project, the experiment is conducted on a situated robot\r\nwhich is made to survive in an artificial environment. The robot consumes the resources\r\npresent in the environment. It also has some decision making capabilities by which it selects some high and low profile tasks to perform in environment during its lifetime. Tasks\r\nto perform are decided by its urge or need for doing it. Quality of life of robot in environment is decided by the comfort level, calculated based on fuzzy logic system. This comfort\r\nlevel motivates robot to perform more of high profile tasks in the environment. The main\r\nobjective of this work is to come up with a hybrid model and find instances or situation in\r\nrobots life where emotions can be used such that quality of life of robot is much better and\r\nit performs better.                                   ', '2013-04-19 17:31:54', 'AKASH GUPTA[akash.g]'),
('anchal', 'Load Balancing based Horizontal Handover in IEEE 802.11 Networks', 'thesis.pdf', 'In the present world of growing technology and smart phones, the user base of hand-held devices has increased enormously over the past few years. IEEE 802.11 is a widely used Wireless LAN technology that provides fast access to the internet. Wi-fi hot spots are deployed at various public places that enable users to access multimedia and other real-time internet applications. Mobile stations need to associate to an Access point(AP) to access internet and communicate to other mobile devices. Conventionally, mobile devices associate to the AP from which they receive maximum signal strength. Since the received signal strength depends on the distance of mobile node from AP, all mobile nodes associate to the closest available AP. It often happens that some regions are more crowded as compared to others. This leads to uneven distribution of load among the access points. An AP may be highly overloaded while there is spare bandwidth available in the neighboring AP. The mobile nodes associated to loaded access point experience degraded performance in terms of lower throughput and increased end-to-end delay.In this report, we propose a handover algorithm that distributes the load evenly among access points by associating mobile nodes to APs based on load in the network.                                            ', '2013-04-19 18:33:14', 'ANCHAL CHOUBEY[anchal]'),
('anik', 'Automated Interface Generation', 'thesis.pdf', '    In our context an interface for a component is dynamic in nature i.e. it refers to all\r\nthe sequence of legal method calls on that component. Typically an interface has to be both\r\nsafe and permissive. While safety property is achieved quite easily in polynomial time by\r\nmodel-checkers, guaranteeing permissiveness is an inherently difficult problem. Since the\r\nmodel of the component contains nondeterminism, the problem of checking permissivenss\r\nbecomes NP-hard and hence cannot easily be afforded. As a result different well known\r\nheuristic based approaches are prevalent which do not necessary promise permissiveness.\r\nIn our work we propose an approach which is supposed to act as a benevolent check for\r\nthese heuristic based methods and is capable of supplying necessary counterexamples. We\r\nconstruct an approximate all-unsafe interface and check if the complement of the interface\r\nconjectured by these heuristics based methods are equivalent or not. But this check is not\r\nguaranteed to be cost-efficent in all cases. So again we need to adopt this check heuristically\r\nor let programmer manully handle this step.                                        ', '2013-04-19 17:52:06', 'ANIK CHATTOPADHYAY[anik]'),
('ankit.j', 'Creating 3-D Map of Buildings'' Interior', '09010108.pdf', '               To a very large degree, people experience and interact with their surroundings from a visual perspective. An often-cited advantage of maps of places or buildings is the ability to present information (paths, position of different objects) in a visual manner, easing the cognitive burden on respondents and allowing for richer, more meaningful responses. But these maps do not mimic the exact behaviour of the real world.\r\nIf the user is provided with a 3D map of a place, his experience of understanding and visualizing the environment can be made closer to the reality. With the help of such kind of maps, one can move around the place virtually in 360 degrees and can easily explore it without actually being there.\r\nIt would be great if one can save ones visit to different places in the form of a 3D map and can revisit these places virtually without actually being there.\r\nThe report describes some of the work already done in creating such experiences and my initial attempt in creating an application which can generate such a map.\r\n\r\n                             ', '2013-04-19 17:26:12', 'ANKIT JAISWAL[ankit.j]'),
('apul', 'QoS in Multi-Channel Multi-Interface Wireless Mesh Networks', 'apul.pdf', 'In today''s world we have wireless devices capable of working on multiple channels simul-\r\ntaneously. Network infrastructure supporting multiple channels can be utilized to provide\r\ndierentiated service to the end users depending upon the quality of service and cost re-\r\nquirements. For example, less delay and high throughput service is desired for real-time\r\nvoice and video communications despite their high cost of service whereas for less priority\r\nrequests like text-messaging, a low-cost channel can be used. QoS in multi-channel wireless\r\nnetworks thus becomes an interesting area of research where we try to maximize the overall\r\nthroughput of the network satisfying the desired quality of service. Wireless standards\r\nsuch as IEEE 802.11a/b already support multiple channels which can be leveraged to oer\r\nsuch advantages. In this thesis work, we study the problem of \r\now-scheduling and quality\r\nof service in wireless mesh networks. We propose and implement a novel solution which\r\nprovides soft guarantees of the desired QoS properties improving the overall performance\r\nof the network. Performance of the proposed scheme is evaluated using the simulation in\r\nNS-3.                                        ', '2013-04-20 20:42:24', 'APUL JAIN[apul]'),
('ayushi', 'Data Mining In Multi Database System', '9010114.pdf', '       Association rule mining is an important model in the data mining. Association rule\r\nmining algorithm discovers all item association (or rules) in the data that satisfy the user-\r\nspecified minimum support (minsup) and minimum confidence (minconf ) constraints. Since\r\nonly one minsup is used for the whole database, the model implicitly assumes that all items\r\nin the data are of the same nature and/or have similar frequencies in the data. This is ,\r\nhowever, seldom the case in real life applications, interesting patterns often occurs at varied\r\nlevels of support. In this report we proposed one algorithm for association rule mining with\r\nnon-uniform support, which works on the notion of support constraints. We have also\r\ndiscussed about finding global exceptional in Multi-Database systems. We have done some\r\noptimizations on a existing algorithm. We found out that ordering the database in increasing\r\norder of their minsup or size increase the performace. We have done a extensive graphical\r\nanalysis on our algorithm and it turns out to be very efficient.\r\n                                        ', '2013-04-19 15:13:42', 'AYUSHI MATHUR[ayushi]'),
('b.juhi', 'Issues with TCP in Data Center Networks', 'btpthesis.pdf', 'We will discuss traffic characteristics of data center networks at macroscopic and microscopic level which can be used in optimizing traffic engineering techniques in data centers. We will see what kinds of problems TCP causes in data centers, mention TCP outcast[1] and TCP incast throughput collapse[4] problem in detail and highlight their possible solutions which can be used to mitigate the problem. In this report,we present experiment results that show the existence of TCP outcast problem across three different topologies - Fat Tree Network, Traditional 3-tier Topology, and Canonical 2-tier Topology. Using ns-2 simulations, we compare these three topologies on the basis of average throughput, jains fairness index and packet loss percentage. We vary all the relevant parameters such as traffic pattern, switch buffer size, number of senders, bottleneck locations and TCP parameters to characterize the conditions for the TCP Outcast problem and their impact on the degree of resulting throughput unfairness. We also evaluate the comparative performance of two different TCP variant- TCP NewReno and TCP Vegas.', '2013-04-19 15:11:07', 'JUHI BAGRODIA[b.juhi]'),
('b.khatri', 'Unsupervised Entailment Detection between Dependency Graph Fragments', 'BTP_khatri.pdf', '(Uploaded by shirshendu). I could not able to copy his abstarct from the pdf given.                                        ', '2013-04-21 17:09:00', 'BHARAT KHATRI[b.khatri]'),
('behara', 'Implementation of FIPA Specications in Typhon', '09010168-Shyam Patro.pdf', '   In this report we present Typhon 2.0 which is an extension to Typhon[MN11].Typhon[MN11]\r\nwhich is based on LPA Prolog`s Chimera agent system. Typhon 2.0 is built according to\r\nFIPA specications.This framework allows for typhlet mobility across heterogeneous FIPA\r\ncomplaint mobile agent platforms.This is added as an extension so that the systems devel-\r\noped on Typhon[MN11] can be easily made compatible with Typhon 2.0.                                         ', '2013-04-20 20:43:47', 'BEHARA MANI SHYAM PATRO[behara]'),
('c.prakash', 'Deadlock Free Routing for 2D mesh topology', '08010113-btp-phase2-report.pdf', 'In this report, we are talking about deadlock free routing algorithm for 2D mesh without adding virtual channels. An implementation of this algorithm is done by me in C++ using some graphics library                                            ', '2013-04-19 13:08:29', 'CHETAN PRAKASH[c.prakash]'),
('c.pravin', 'Incorporating Fault Tolerance in LEACH  Protocol of Wireless Sensor Networks and Implementation  in NS2', '09010134.pdf', 'Arena for Wireless Sensor Network is increasing day-by-day. LEACH \r\n(LowEnergy Adaptive Clustering Hierarchy) protocol is one of the significant \r\nprotocols for routing in WSN. It is a clustering based organization of nodes. In \r\nLEACH, sensor nodes are organized in several small clusters where there are \r\ncluster heads in each cluster. These CHs gather data from their local clusters \r\naggregate them and send them to the base station. Incorporating fault tolerance in \r\nLEACH will further improve its reliability. We have tried to incorporate fault \r\ntolerance and tried to simulate its behavior in NS2                                 ', '2013-04-19 18:05:55', 'PRAVIN KUMAR CHATURVEDI[c.pravin]'),
('g.pranav', 'Multi Label Classification', 'btp_report-sem8.pdf', 'Multi Class ''Multi'' Label Classification classifies a single input instance into multiple labels/classes than just one label as in the case of Multi Class ''Single'' Label Classification. Most methods reduce the problem to existing single label classification techniques. The possible output space is the powerset of given labels, which is exponentially large. However, not all labels are correlated, or at least not significantly correlated, and can be considered independent of each other. The most important approaches differ mainly in the way they exploit this set of label correlations. We discuss various such approaches and related works. One of these methods prunes the output space itself, considering, for classification, sets of only those labels that are significantly correlated and thus, most relevant. We develop a new method using such an approach, compare its performance with state of the art and show its superiority.', '2013-04-19 17:28:40', 'PRANAV GUPTA[g.pranav]'),
('gundlapalli', 'Linear layouts of weakly triangulated graphs', 'to-do.pdf', '       A triangulated (chordal) graph is one in which there are no chordless cycles of length\r\n4 or more. Damaschke [Dam03] showed how to compute all linear layouts of a chordal\r\ngraph, given a valid assignment of lengths to the edges of G. Through our project we try\r\nto extend his result to weakly triangulated (chordal) graphs. Weakly triangulated graphs are\r\nidentified by the existence of a peripheral edge ordering, which will therefore be helpful to\r\nfind the number of linear layouts of such graphs. The time complexity of our algorithm to\r\ndetermine the edge peripheral ordering of a graph is O(n2 Â· m), which is an improvement of\r\na factor of n from the obvious extension of the two-pair algorithm of [AR91]. Along with\r\nthe proposed algorithm, we discuss the implementation of the entire quad-tree algorithm to\r\ndetermine the linear layouts for weakly chordal graphs within the time bound of O(n2 Â· m).\r\nFurther, we try to determine the minimum number of edge queries that will be required to\r\nuniquely place a set of points in 2-dimensions by obtaining the asymptotic density of some\r\nplanar rigid graphs in 2-dimensions.\r\n                                        ', '2013-04-19 17:39:20', 'GUNDLAPALLI SRINIVAS[gundlapalli]'),
('k.ankit', 'A weighted sum Ensemble approach for Ranking algorithms', 'thesis.pdf', 'Existing Algorithms for ranking can not be easily compared when talk about efficiency, it\r\njust depend upon the data so this work uses machine learning approach and tries to combine\r\nthe existing algorithms for ranking in such a way that independent of what algorithm is\r\nperforming better, this combined algorithm will perform comparative to the best one among\r\nthem and often give good results. This approach of combining the algorithms is called\r\nEnsembling. It uses simple combining function weighted sum and tries to predict the weights\r\nusing NDCG[JK00] measure as loss function and genetic algorithm to minimize it. It uses\r\nyahoo Learning to Rank challenge set 2 dataset so tries ensembling on 700 conventional\r\nranking methods which includes TF.IDF, PageRank [CC11].\r\n', '2013-04-19 18:19:04', 'ANKIT KUMAR[k.ankit]'),
('k.apoorv', 'Wireless Network on Chips', 'thesis.pdf', 'NoC is currently the many-core paradigm of the future, with many implementations already out in the wild showing promising prospects. The scaling issues however continue to bug the interconnect based architecture. In one of the most touted products, the Intel tera-flop processor for instance, sending data from one core to another might take as much as 75 cycles. As we reach a far more denser integration , with more elements on chip, the problem is only likely to aggravate.\r\n\r\nIn this report we look at some of the primary solutions that are being considered for replacing the wired interconnects. The ones include - RF Interconnects , optical/photonic interconnects and wireless interconnects. Out of these, wireless holds the greatest promise because of easy implementation, high level of reconfigurability, viability and available data-bandwidth.\r\nFinally we propose a new wireless network on chip architecture and show how it, and varying various associated parameters, help alleviate congestion and improve performance through RTL simulations.', '2013-04-19 17:45:06', 'APOORV KUMAR[k.apoorv]'),
('k.gunjan', 'Energy Efficient algorithm', 'thesis.pdf', '    A modern processor can dynamically set it''s speed while it''s active, and can make a transition to sleep state when required. When the processor is active, the energy consumed per unit time when  a job is scheduled at speed $s$ is given by a strictly convex power function $P(s)$ with the property that $P(0) &gt; 0$. Therefore, some  energy is consumed  even if the processor is not scheduling any job in the active state. On the otherhand, no energy is consumed when the processor is in the sleep state. However, $C &gt;  0$ units of energy is required to make a transition from the sleep state to the active state and therefore it is not always fruitful to  go asleep when there is no work to be processed at some point of time. \\\\\r\n% Jobs are specified by their arrival time, deadline and processing volume. We consider an optimization problem where each job has to be scheduled within their arrival time and deadline, and the goal is to minimize the total energy consumption.\r\nIn this thesis,  we consider  scheduling problem where $n$ jobs $J_1, J_2, \\ldots, J_n$\r\nneed to be executed such that the total energy usage of these jobs is minimized while ensuring that\r\neach job is finished within it''s deadline. First, we work\r\non an online setting where a job is known only at it''s arrival time, along with\r\nit''s processing volume and deadline. In such a setting, the currently best-known algorithm by Han\r\net al. \\cite{han} provides a competitive ratio max $\\{4, 2 + {\\alpha}^{\\alpha}\\}$ \r\nof energy usage for the Power function of the form  $ s^\\alpha + g $. In this thesis, we\r\npresent a new online algorithm SqOA which provides a competitive ratio  \r\nmax $\\{4, 2 + (2-1/{\\alpha})^\\alpha 2^{\\alpha-1}\\}$ of energy usage.  We also extend the hardness result for the offline version of the problem. Albers.et.al. [1] proved that the problem is NP-hard when $P(s)$ and $C$ are taken as a part of input. However,  $P(s)$ and $C$ depends on processor and so are known to us.  We prove the problem remains NP-hard even when P(s) and C are fixed.                                        ', '2013-04-19 18:23:52', 'GUNJAN KUMAR[k.gunjan]'),
('k.kuldeep', 'QoS based Task Scheduling on Large Scale Chip Multiprocessor', '09010122.pdf', 'My work involves developing a scalable algorithm/heuristic so that tasks can be mapped\r\n(allocated) on a multicore architecture in order to give better performance. Yet it have\r\nnot been tested on real computer, though we are able to simulate the algorithm to give\r\nappropriate results. Performance measurement concerns not only time taken by a single\r\nprocess, but together with number of process accepted. To fulfill it, we minimized CPU\r\nfragmentation keeping reasonable network latency. To get input to be fed to my program,\r\nGaussian random distribution generator is used.\r\n', '2013-04-19 16:12:19', 'KULDEEP[k.kuldeep]'),
('k.rajat', 'Improving Bioevent extraction with the help of Coreference Resolution', 'thesis.pdf', 'Biomedical event extraction has received a lot of attention lately because of easy availability of the suitable corpora. However, most work has been focused on extracting relations between entities within the same sentence. In this report, we discuss the use of coreference resolution to augment existing event extraction systems by making it feasible to capture relationships that span across a document. Due to the unavailability of a high quality coreference resolver suitable for biomedical domain, we focus on proposing such a system based on earlier approaches and observations in the field.  ', '2013-04-19 16:13:19', 'RAJAT KHANDUJA[k.rajat]'),
('k.sudhir', 'Virtual AdSpace', 'thesis.pdf', 'Augmented Reality (AR) is an emerging field and the past decade has seen many consumer\r\napplications based on AR. With the advent of smartphones which bring enormous computing\r\npower with mobility and data from numerous sensors, augmented reality(AR) applications\r\npromise to become ubiquitous, and with the wide range of applications in which they can\r\nbe used, quite possibly irreplaceable. In this report we discuss about our project which uses\r\nAR to enhance the human experience while providing advertisers a potential space to target\r\nand reach out to consumers of AR applications.\r\nVirtual AdSpace as the name suggests\r\nprovides a virtual advertising space for advertisers to connect to the customers through\r\nadvertisements which are placed on the buildings like virtual hoardings. Thus the app creates\r\na Virtual AdSpace in the environment and hence demonstrates a commercial aspect of\r\naugmented reality navigation system. These ads are visible through an AR application which\r\ncan run on a smartphone or on headgears, in future may be on Google Glass1 . Keywords:\r\nAugmented Reality, Mobile Apps, HCI, Location-based service\r\n', '2013-04-19 17:35:51', 'KULKARNI ANAND SUDHIR[k.sudhir]'),
('karri', 'Steganographic Algorithm Based on Randomization of DCT Kernel', 'final_thesis.pdf', 'Calibration attack is one of the most important attacks specially on JPEG domain steganography.\r\nPrediction of cover image statistics from its stego image is an important requirement\r\nin calibration based attacks. Domain separation techniques are used as counter measures\r\nagainst such attacks because they make the cover image prediction process rather difficult.\r\nMost of the algorithms in the past are based on randomization of embedding locations. In\r\nthis thesis, we propose a new domain separation technique which is based on randomization\r\nof DCT kernel matrix. A comprehensive set of experiments are done to validate that\r\nproposed domain separation scheme performs better than the related existing schemes.                                            ', '2013-04-19 14:47:25', 'KARRI SWATHI[karri]'),
('m.narendra', 'Multicast Routing In 3D Networks On Chip', 'BtpReportFinal.pdf', 'Since for better interconnection communication between many IP cores in SoCs,NoCs provide a better performance and also the technology trends toward the increased number of processing elements with higher levels of integration and higher performance will require scalable and efficient communication infrastructure, that why 3D NoCs are becoming very important for designing better interconnection communication in System-On-Chips (SoCs). Multicast communication provide a better solution among many cache coherence protocols and parallel algorithms. A lot of research has been done so for in the field of multicasting in 2D and 3D NoCs. In this work we\r\nsummarize many multicasting technique and discuss their shortcomings and analyze the scope for a new efficient solution. We have proposed a New Recursive Partitioning Multicast Algorithm (3D-RPM) and optimized version of it a New Optimized Recursive Partitioning Multicast Algorithm (3D-ORPM) for 3D mesh networks, and implement them using our own C++ based simulator. We have achieved up to 8-13% reduction in %link utilization and total power consumed for our proposed approach compare to XYZ 3D multicast routing algorithm. Our results clearly shows that our approach is more scalable to larger network and larger destinations set than any previously proposed approach.                                  ', '2013-04-18 15:25:01', 'NARENDRA KUMAR MEENA[m.narendra]'),
('mayank.agl', 'csx', '17oct1.pdf', '     czxczcx                                       ', '2013-12-02 14:53:00', 'Mayank Agarwal[mayank.agl]'),
('n.abhinandan', 'I/O Efficient Algorithms for Computing Minimum Spanning Trees(MST)', 'BTP_09010101.pdf', '                                            We present a new algorithm for computing the Minimum Spanning Tree of Massive Graphs. The proposed algorithm outperforms the current best one in most cases. We also document the many failed attempts we made while tackling the problem.', '2013-04-19 15:43:25', 'ABHINANDAN NATH[n.abhinandan]'),
('n.mehra', 'Learning to Rank: Comparative study of Pairwise and Listwise algorithms', 'my_final_thesis.pdf', 'This report presents a theoretical framework for learning to rank, and demonstrates how to\r\nperform generalization analysis of pairwise and listwise learning to rank algorithms. Many\r\nlearning-to-rank algorithms have been proposed in recent years. Among them, some listwise\r\nand pairwise algorithms has shown higher ranking performance when compared to others\r\napproaches. We compare the performance of different algorithms on a representative dataset\r\nusing NDCG, MAP and Precision evaluation parameters. We then analyze the observations\r\nand have shown that LambdaMART is performs better than RankNet, MART, RankBoost,\r\nAdaRank.                                      ', '2013-04-19 17:29:09', 'NARESH MEHRA[n.mehra]'),
('n.prashanth', 'REDUCTION OF NON-SYMMETRIC MATRIX TO BANDED HESSENBERG FORM(TILE APPROACH)', '09010124.pdf', '                                            Bulk of the data resides in secondary memory for large data sets,which is much slower than\r\nthe main memory.Hence the complexity of algorithms on these datasets is judged by the number\r\nof I/Os executed.There are e cient out of core algorithms that perform matrix computations\r\nbut very few of them are designed to be memory e cient.Here we discuss the memory e cient\r\nalgorithm for the reduction of a non-symmetric matrix to a banded hessenberg form using tile\r\napproach.\r\n', '2013-04-19 15:52:09', 'N ESWARA PRASHANTH[n.prashanth]'),
('n.teja', 'Incremental Clustering for the ROCK-Robust Clustering Algorithm for Categorical Attributes', '09010125.pdf', '                                            Clustering is an important technique which allows us to organize datasets containing millions of datapoints\r\nand identify patterns in the data. Incremental clustering refers to modifying existing clusters on data to make\r\nthem suited to the newly added data.The ROCK clustering is a techinque that is used to cluster data which\r\nis categorical in nature. ROCK maps points to clusters based on the concept of neighbors. In this report, the\r\nexisitng ROCK algorithm is discussed and a new incremental version of the clustering algorithm is proposed.\r\nIn addition to this, an experimental study is conducted on real life datasets to demonstrate its viability. Our\r\nnew algorithm achieves a considerable speed up but trades oâ†µ accuracy in exchange for it.\r\n', '2013-04-19 15:53:33', 'N. VISHNU TEJA[n.teja]'),
('nagendra', 'Support Vector Machine Algorithm', '09010127.pdf', '                                            ', '2013-04-19 17:30:25', 'NAGENDRA RAM[nagendra]'),
('pasunuri', 'Performance Analysis of Alternate Boosting Algorithms for Viola-Jones Object Detection', 'thesis.pdf', '                                            Viola and Jones proposed an object detection framework which can be used to process\r\nimages rapidly and also in achieving high detection rates at the same time. They proposed\r\na learning algorithm based on AdaBoost which selects a small critical number of features\r\nand yields highly efficient classifiers. In this paper, I will be introducing you to two other\r\nboosting algorithms proposed as alternatives to the original boosting algorithm which was\r\noriginally proposed by Viola and Jones[VJ01b]. The algorithms are then compared with the\r\nnative boosting algorithm and it can be clearly seen that these achieve better detection rates\r\nand also reduce the number of false-negatives and classification speed. These algorithms\r\nare designed realizing that the native algorithm mainly works on minimizing a quantity\r\nrelated to classification error, rather than concentrating on minimizing the number of false-\r\nnegatives. The addition of two more alternatives to the boosting algorithm gives one a\r\nflexibilty to choose the corresponding boosting algorithm based on the requirements.\r\n', '2013-04-19 17:30:50', 'PASUNURI RAHUL[pasunuri]'),
('pooja', 'Virtual Memory Algorithms For Systems with Flash as Their Secondary Storage', 'btpreport _09010132.pdf', 'This report presents a case for using Flash memory as swap space for mobile devices. Flash offers very fast reads but much slower writes, which presents an interesting challenge for its use\r\nas swap. After introducing Flash and virtual memory, we first present theoretical arguments in\r\nfavor of using low latency stores for swapping. Then we describe technologies in the current\r\nLinux kernel which allow the use of Flash devices as swap. Finally, we describe the construction\r\nof a virtual memory simulator and the results from our experiments on it.                  ', '2013-04-19 16:28:40', 'POOJA DUBEY[pooja]'),
('pragya', 'A Comparison of Search Methods for unstructured Peer-to-Peer Systems', 'report.pdf', 'Peer-to-Peer systems have become an important area of research over the past few years. In this\r\nwork, we present a brief overview of the Peer-to-Peer systems and their classification as well as the various problems associated with them. We then present a detailed comparison of the\r\nvarious search algorithms for unstructured peer-to-peer networks. At the end we propose an\r\nadvanced search algorithm and compare and establish its superiority with some of the already\r\nexisting ones.', '2013-04-19 17:23:38', 'PRAGYA PARUL[pragya]'),
('purwar', 'Application of Discrete Event Systems for Detection Of Network Attacks', '09010135.pdf', '                                            Abstractâ€”Since preserving energy resources is a foremost\r\nrequirement of handheld devices like PDA, mobiles, smartphones\r\nand laptops, 802.11 has provided a power management feature\r\nthat enables the station to enter into sleep mode so that they can\r\nsave energy without the fear of loosing packets. While a station\r\nis asleep the access point (AP) buffers all the packets destined\r\nfor the station in sleep mode. The station in the sleep state wakes\r\nup a pre-determined intervals and check for buffered data at the\r\naccess points (AP) by looking into the TIM of beacon frame. If\r\nthe AP has buffered packets for the station then it sends a PS-\r\nPoll frame to retrive the buffered packets at AP. However since\r\nthe PS-Poll frame is sent un-encrypted, attackers can easily spoof\r\nthem and launch a Denial of Service (DoS) attack on the target\r\nWi-Fi networks.', '2013-04-19 17:25:37', 'PURWAR SANKETH KISHAN[purwar]'),
('r.akash', 'A critical study of Frama-C Program Slicing Tool''s PDG and Slicing Plugin', 'AkashBtp.pdf', '                                            This work aims to contribute in the development of opensource Program Slicing tool Frama-C by providing insight into PDG and Slicing Plugin''s software architecture. The goal of phase 1 of this work was to get familiar with various technical details related to Program Slicing and getting started with some previous work in the field. Chapter 1 of this report discusses Intraprocedural Slicing of programs with structs and pointers proposed and implemented by Aseem Rastogi . The work is an extension of Intraprocedural slicing algorithm for C programs containing only scalar variables, given by Kumar and Horwitz . The work used C Intermediate language(CIL) for transforming C programs to a simple intermediate form, control flow analysis,data flow analysis and Ocaml programming language for the implementation. \r\nPhase II of this work gives a Critical Insight into Frama-C''s PDG and Slicing Plugins, both from application perspective as well as from software architecture perspective.', '2013-04-19 17:23:32', 'AKASH DEEP RAWAT[r.akash]'),
('r.anurag', 'Study of Implicit Rating using Latent Space', 'RamanAnurag09010139BTPThesis.pdf', 'There have been significant advances in the field of Implicit Rating as it is computationally\r\nless expensive and less biased than Explicit Rating. Many techniques have\r\ncome up which try to predict user ratings based on history but there is still scope of improvement.\r\nBy observing and analysing the behavior of a user when he visits a web-page can be a possible way of predicting whether he likes it or not. Moreover, it is possible to predict what rating he might give to the page on a scale of one to five.\r\nIn the Implicit Rating system, in which only the past user activity is available but there are\r\nno actual ratings, there is an uncertainty of interpretation. There are only few common implicit\r\nrating based techniques and algorithms. This thesis focuses on learning the dataset to build different classifiers and analyse their performance values. We also explore latent space to observe if the performance increases by selecting best features and compare them with other results.\r\n                                            ', '2013-04-19 17:03:21', 'RAMAN ANURAG[r.anurag]'),
('r.barua', 'Knowledge Discovery in Cricket using Relational Learning Methods', 'thesis.pdf', '      In this work, we focus on analyzing the cricket text commentary related to &quot;test cricket\r\nmatches&quot;. In particular we are interested in those test matches in which India has featured.\r\nOur objective of this study is to identify the weakness of players (both batsmen and bowlers)\r\nfrom the text commentary and suggest team strategies for winning.\r\nWe have identied batting specic and bowling specic features by examining over one\r\nlakh of deliveries of text commentary. The key contribution of this work is in identifying\r\nthat the data points do not follow the usual assumption of &quot;independent and identically\r\ndistributed&quot;.\r\nHere we present two cricket data mining strategies using relational model namely Rela-\r\ntional Bayesian Classier(RBC), Probabilistic Relational Neighbor Classier(PRNC). We\r\nconsider Naive Bayes estimation as a measure for our comparison, and show how the strate-\r\ngies compete against each other.\r\nWe also compare two batting partnership combinations namely Left-Right and Right-\r\nRight batting combinations and show their correlation with team winning strategies.\r\n  \r\nKeywords:Knowledge Discovery in Cricket, Sports Data Mining, Relational Bayesian\r\nClassier, Relational Neighbor Classier                ', '2013-04-19 15:27:09', 'RISHI BARUA[r.barua]'),
('r.borah', 'ROI Based Reversible watermarking Scheme', '09010142.pdf', '               Watermarking in the recent years has become an important area of research in the eld of\r\ndata security, condentiality and image integrity. The important facet of watermarking in\r\nmedical images requires extreme care when embedding additional data in them as the extra\r\ninformation must not aect image quality. We are using a scheme where we are using LSB\r\nwatermarking which is a fragile watermarking technique and embedding it into the Region of\r\nInterest(ROI) and embed in Region of Non Interest(RONI) using a robust algorithm. This\r\nscheme ensures both the authenticity and can check image tempering. A comprehensive set\r\nof experiments have been conducted to evaluate the performance of the proposed scheme.                             ', '2013-04-19 17:30:50', 'RISHI RAJ BORAH[r.borah]'),
('r.sethia', 'Virtual AdSpace', 'thesis.pdf', '                                            Augmented Reality (AR) is an emerging field and the past decade has seen many consumer\r\napplications based on AR. With the advent of smartphones which bring enormous computing\r\npower with mobility and data from numerous sensors, augmented reality(AR) applications\r\npromise to become ubiquitous, and with the wide range of applications in which they can\r\nbe used, quite possibly irreplaceable. In this report we discuss about our project which uses\r\nAR to enhance the human experience while providing advertisers a potential space to target\r\nand reach out to consumers of AR applications.\r\nVirtual AdSpace as the name suggests\r\nprovides a virtual advertising space for advertisers to connect to the customers through\r\nadvertisements which are placed on the buildings like virtual hoardings. Thus the app creates\r\na Virtual AdSpace in the environment and hence demonstrates a commercial aspect of\r\naugmented reality navigation system. These ads are visible through an AR application which\r\ncan run on a smartphone or on headgears, in future may be on Google Glass1 . Keywords:\r\nAugmented Reality, Mobile Apps, HCI, Location-based service\r\n', '2013-04-19 17:35:04', 'RAVI SETHIA[r.sethia]'),
('rahul.br', 'Distributed Lock Managers: Implementing and analyzing scalable Services that provide locking primitives distributed applications', 'Rahul_Bhatnagar_09010136.pdf', 'The creation of tightly-connected clusters requires a great deal of supporting infrastructure. One\r\nof the necessary pieces is a lock manager - a system which can arbitrate access to resources\r\nwhich are shared across the cluster. The lock manager provides functions similar to those found\r\nin the locking calls on a single-user system - it can give a process read-only or write access to\r\nparts of files. The lock management task is complicated by the cluster environment, though; a\r\nlock manager must operate correctly regardless of network latencies, cope with the addition and\r\nremoval of nodes, recover from the failure of nodes which hold locks, etc. It is a non-trivial\r\nproblem. There are various approaches towards constructing Distributed Locking Managers.\r\nHere we implement 2 of them, using various frameworks that allow us to work with distributed\r\napplications. The first one, is a DLM that uses Apache ZooKeeper, a distributed coordination\r\nservice and passes information about lock ownership change to Clients using messages. The\r\nSecond one is a modification of the famous Lamportâ€™s Bakery Algorithm, which runs on\r\nCassandra, a distributed database, where clients repeatedly query the database to get\r\ninformation about lock data.                                          ', '2013-04-21 16:49:31', 'RAHUL BHATNAGAR[rahul.br]'),
('rohit.raj', 'Incorporating Fault Tolerance in LEACH   Protocol of Wireless Sensor Networks and Implementation in NS2    ', '09010143.pdf', '                                            ', '2013-04-19 18:05:45', 'ROHIT RAJ[rohit.raj]'),
('rovin', 'Constructing Orthogonal Convex Hull in the External Memory Model ', 'Thesis.pdf', 'We consider the problem of finding the orthogonal convex hull of a â€œlargeâ€ point-set, i.e., one which cannot fully fit into the main memory. We took into consideration the external memory model as the computational model. Also, the  dimensionality of the point-set considered was 2 and 3. This report deals with studying the viability of external memory model for the problem and then developing algorithms for (2D and) 3D orthoconvex hull(s) in the external memory model. To our best knowledge, the study of 3D orthoconvex hulls has not been previously done in the external\r\nmemory model; the algorithm we describe here generates a 3D orthoconvex hull in O((f N ) log_{min(f,M/B)} (N)) I/O operations, where N is the number of points in the input set.\r\n', '2013-04-19 17:45:10', 'ROVIN BHANDARI[rovin]'),
('s.pardeshi', 'Linear layouts of weakly triangulated graphs', '04358260.pdf', '   A triangulated (chordal) graph is one in which there are no chordless cycles of length\r\n4 or more. Damaschke [Dam03] showed how to compute all linear layouts of a chordal\r\ngraph, given a valid assignment of lengths to the edges of G. Through our project we try\r\nto extend his result to weakly triangulated (chordal) graphs. Weakly triangulated graphs are\r\nidentified by the existence of a peripheral edge ordering, which will therefore be helpful to\r\nfind the number of linear layouts of such graphs. The time complexity of our algorithm to\r\ndetermine the edge peripheral ordering of a graph is O(n2 Â· m), which is an improvement of\r\na factor of n from the obvious extension of the two-pair algorithm of [AR91]. Along with\r\nthe proposed algorithm, we discuss the implementation of the entire quad-tree algorithm to\r\ndetermine the linear layouts for weakly chordal graphs within the time bound of O(n2 Â· m).\r\nFurther, we try to determine the minimum number of edge queries that will be required to\r\nuniquely place a set of points in 2-dimensions by obtaining the asymptotic density of some\r\nplanar rigid graphs in 2-dimensions.', '2013-04-19 17:34:53', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]'),
('s.rajkumar', 'I/O Efficient QR-Decomposition', 'thesis.pdf', '    We analyse Tile Based QR decomposition algorithm and implemented this tile based QR\r\ndecomposition algorithm using Standard Template library for extremely large Data(STXXL).\r\nWe Implemented the algorithm considering two cases, one when only two tiles can fit into\r\nthe main memory, and another case is when only one tile can fit into the main memory.\r\n', '2013-04-19 16:24:54', 'RAJKUMAR SINGH[s.rajkumar]'),
('s.singla', 'Academic Section Automation', 'Thesis_09010146.pdf', '                       This project aims at the study of automation of Academic Section of IIT Guwahati, to design and make changes to the present software. Software Designed is web based multi-tier architecture. It is designed to provide paperless functioning of various processes done by academic section like course registration, minor registration, grade management, course management etc. Software is comprehensive, covering most of the processes of academic section.                     ', '2013-04-19 17:09:31', 'SAURABH SINGLA[s.singla]');
INSERT INTO `projects` (`user_nm`, `thesis_title`, `report_file_name`, `abstract`, `submitted_at`, `submitted_by`) VALUES
('s.sumeet', 'Incremental Shared Nearest Neighbor Density Based Clustering', '09010153-BTP-Report.pdf', 'Traditional clustering algorithms need to start from scratch as soon as there are changes in data. This is unacceptable in the scenario where data set is huge and changes are frequent, like crawling documents on the web. We must be able to find the clusters in the updated data using minimal computations while incorporating the prior results. Shared Nearest Neighbor\r\nDensity-based clustering is a robust graph-based clustering algorithm capable of handling clusters of different sizes, shapes and densities. We propose an incremental extension to this algorithm\r\ncapable of finding clusters on a dataset to which frequent inserts are being made. We identified the area affected due to an insert and re-clustered only a limited portion of the entire dataset. The clusters found are identical to the ones found by the original non-incremental version on the resultant dataset. Our algorithm\r\nis hence truly incremental unlike most of the other incremental algorithms which are order-dependent. The fact that clusters would exactly match has been established by a proof inspired\r\nfrom for IncDBSCAN (Incremental DBSCAN).  Alongwith the backing of this proof, we have performed experiments on 5000 inserts and shown that without compromising the exactness of\r\nclusters we could achieve speed up close to 360 times.                                         ', '2013-04-18 10:53:42', 'SUMEET KUMAR SINGH[s.sumeet]'),
('shah', 'Automation of Medical Section of IIT Guwahati', 'BTP_09010147.PDF', 'The aim of this project is to study requirements for automation of Medical Section of IIT Guwahati, to design comprehensive software that covers all aspects of management and operations of hospital and to implement and integrate the software with Administrative and Finance and Accounts section of IIT Guwahati. The designed software needs to provide immediate access to clinical, administrative and billing data required by various entities for efficient functioning of the hospital.                                        ', '2013-04-19 18:14:25', 'SHAH AKHILESH KAILASHCHANDRA[shah]'),
('shashi', 'fxd', '3oct1.pdf', '         fxg                                   ', '2013-12-03 06:41:33', 'SHASHI KANT KUNAL1[shashi]'),
('snehlata', 'Incremental Association Rule Mining from Dynamic Database', 'Snehlata_BTP.pdf', '                                               Association rule mining from large dataset provides us valuable information and associa-\r\ntion rules are one of the important tools of data mining for analyzing transactional database.\r\nAs time advances, since our database is dynamic, association rules will also gets updated\r\nand hence maintaining association rules in large dataset is another problem. We can map\r\nthe problem of maintaining association rules into problem of maintaining frequent item\r\nsets. In this report a new algorithm has been proposed which scans only the incremental\r\nportion of database and updates the set of frequent item sets and outputs same result as by\r\nrerunning apriori and takes less time than apriori.\r\n', '2013-04-19 16:11:08', 'SNEHLATA[snehlata]'),
('sunil.k', 'Scheduling Multiphase Applications on Heterogenous Multiprocessors', 'thesis.pdf', 'Heterogeneous Multiprocessor provide great opportunity to improve  system throughput  and reduction in power consumption. Task scheduling in heterogeneous held great importance for utilization of asymmetry in cores. We have studied and implemented some heuristic for task scheduling for specific type of tasks. We have implemented heuristic for scheduling chain application. During this project we have considered random chain applications and adapted the Successor Concerned List Scheduling  proposed by Y. Wang for scheduling chains. We have found that SCLS provide better application efficiency than CTF and EAF for chain application when the ratio of number of application and number of cores is higher and similar result when the ratio is less.                                          ', '2013-04-19 15:14:16', 'SUNIL KUMAR[sunil.k]'),
('t.shubham', 'A novel random walk based method for associating genes with diseases', '09010148.pdf', 'A lot of effort has gone into development of methods for identification of genes associated with a disease. It has been recognized that diseases are consequences of perturbations in cellular systems. Most of the attention has been given to the molecular networks for the purpose of studying the cellular systems. Based on observations, it has been hypothesized that genes involved in similar phenotypes are located close to one another in the molecular networks. Current methods utilize this locality of disease genes in molecular networks for ranking candidate genes with respect to a disease. In the first phase of our project, we outlined a detailed framework for development of disease gene prioritization methods.  Here, we present a new ranking algorithm that draws upon the idea of a random walk but gives much better results than some of the well known existing methods, including other random walk based methods. We shall also demonstrate a new method for exploiting disease-disease similarity information and its effect on our proposed algorithm. For the sake of completeness, we will also present two other ranking algorithms that we developed before formulating the random walk based method.', '2013-04-19 14:10:43', 'SHUBHAM TRIPATHI[t.shubham]'),
('v.goyal', 'Automatic Speaker Recognition', 'VikramGoyal_BTPReport_2.pdf', 'With the advent of modern technology, the need for devising sophisticated methods that can give access to individuals to various facilities based on their unique identification has increasingly grown.\r\nFrom traditional methods such as password based identification, this area has grown by leaps and\r\nbounds, with each new method decreasing the chances of an imposter gaining access to a system by masquerading as someone else. Some of these techniques include fingerprint recognition, face\r\nrecognition, speech recognition.\r\nIn the following report, I will discuss in detail an HMM based speaker recognition system that on the basis of observation sequences corresponding to cepstral and delta coefficients tries to identify the speaker. Various components that go into the building of HMM are discussed. The recognition rates are viewed stand alone for the cepstral and delta coefficients respectively. Then, a combination of them is taken to see if it improves the recognition accuracy. Finally, the conclusions drawn from the above experiments are reported.\r\n', '2013-04-19 15:21:09', 'VIKRAM KUMAR GOYAL[v.goyal]'),
('vibhuti', 'Web Service Car Broker System', 'FINAL_BTP_09010157.pdf', '  A web service is a method of communication between two electronic devices over the World Wide Web. A web service is a software function provided at a network address over the web or the cloud, it is a service that is &quot;always on&quot; as in the concept of utility computing. Applications access Web services via ubiquitous Web protocols and data formats such as HTTP, XML, WSDL and SOAP, XML is used to tag the data, SOAP is used to transfer the data, WSDL is used for describing the services available and UDDI is used for listing what services are available. Other systems interact with the Web service in a manner prescribed by its interface using messages, which may be enclosed in a SOAP envelope, or follow a RESTful approach. These messages are typically conveyed using HTTP, and normally comprise XML in conjunction with other Web-related standards.                                            ', '2013-04-19 02:59:32', 'VIBHUTI KUMAR[vibhuti]');

--
-- Triggers `projects`
--
DROP TRIGGER IF EXISTS `insert_project_log`;
DELIMITER //
CREATE TRIGGER `insert_project_log` AFTER INSERT ON `projects`
 FOR EACH ROW insert into project_log(user_nm,title_thesis,uploaded_file_name,submitted_at,submitted_by) values(new.user_nm,new.thesis_title,new.report_file_name,now(),new.submitted_by)
//
DELIMITER ;
DROP TRIGGER IF EXISTS `update_project_log`;
DELIMITER //
CREATE TRIGGER `update_project_log` AFTER UPDATE ON `projects`
 FOR EACH ROW insert into project_log(user_nm,title_thesis,uploaded_file_name,submitted_at,submitted_by) values(new.user_nm,new.thesis_title,new.report_file_name,now(),new.submitted_by)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `project_log`
--

CREATE TABLE IF NOT EXISTS `project_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nm` varchar(200) NOT NULL,
  `title_thesis` varchar(400) NOT NULL,
  `uploaded_file_name` varchar(200) NOT NULL,
  `submitted_at` datetime NOT NULL,
  `submitted_by` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=378 ;

--
-- Dumping data for table `project_log`
--

INSERT INTO `project_log` (`id`, `user_nm`, `title_thesis`, `uploaded_file_name`, `submitted_at`, `submitted_by`) VALUES
(153, 's.sumeet', 'Test file Uploaded by Admin (shirshednu)', 'combinatorial.pdf', '2013-04-17 10:44:28', 'SUMEET KUMAR SINGH[s.sumeet]'),
(154, 's.sumeet', 'Incremental Shared Nearest Neighbor Density Based Clustering', '09010153-BTP-Report.pdf', '2013-04-17 12:31:09', 'SUMEET KUMAR SINGH[s.sumeet]'),
(155, 's.sumeet', 'Test upload', '09010153-BTP-Report.pdf', '2013-04-17 18:35:24', 'SUMEET KUMAR SINGH[s.sumeet]'),
(156, 's.sumeet', 'Incremental Shared Nearest Neighbor Density Based Clustering', '09010153-BTP-Report.pdf', '2013-04-18 10:54:27', 'SUMEET KUMAR SINGH[s.sumeet]'),
(157, 'm.narendra', 'Multicast Routing In 3D Networks On Chip', 'BtpReportFinal.pdf', '2013-04-18 15:25:47', 'NARENDRA KUMAR MEENA[m.narendra]'),
(158, 'vibhuti', 'Web Service Car Broker System', 'FINAL_BTP_09010157.pdf', '2013-04-19 03:00:18', 'VIBHUTI KUMAR[vibhuti]'),
(159, 'c.prakash', 'Deadlock Free Routing for 2D mesh topology', '08010113-btp-phase2-report.pdf', '2013-04-19 13:09:14', 'CHETAN PRAKASH[c.prakash]'),
(160, 't.shubham', 'A novel random walk based method for associating genes with diseases', '09010148.pdf', '2013-04-19 14:11:29', 'SHUBHAM TRIPATHI[t.shubham]'),
(161, 'r.barua', 'Knowledge Discovery in Cricket using Relational Data', 'thesis.pdf', '2013-04-19 14:21:12', 'RISHI BARUA[r.barua]'),
(162, 'a.parag', 'Learning from Cricket Text Commentary', '9010130-BTP2.pdf', '2013-04-19 14:40:44', 'PARAG AGRAWAL[a.parag]'),
(163, 'karri', 'Steganographic Algorithm Based on Randomization of DCT Kernel', 'final_thesis.pdf', '2013-04-19 14:48:11', 'KARRI SWATHI[karri]'),
(164, 'b.juhi', 'Issues with TCP in Data Center Networks', 'btpthesis.pdf', '2013-04-19 15:11:53', 'JUHI BAGRODIA[b.juhi]'),
(165, 'ayushi', 'Data Mining In Multi Database System', '9010114.pdf', '2013-04-19 15:14:27', 'AYUSHI MATHUR[ayushi]'),
(166, 'sunil.k', 'Scheduling Multiphase Applications on Heterogenous Multiprocessors', 'thesis.pdf', '2013-04-19 15:15:02', 'SUNIL KUMAR[sunil.k]'),
(167, 'v.goyal', 'Automatic Speaker Recognition', 'VikramGoyal_BTPReport_2.pdf', '2013-04-19 15:21:54', 'VIKRAM KUMAR GOYAL[v.goyal]'),
(168, 'r.barua', 'Knowledge Discovery in Cricket using Relational Learning Methods', 'thesis.pdf', '2013-04-19 15:27:55', 'RISHI BARUA[r.barua]'),
(169, 'n.abhinandan', 'I/O Efficient Algorithms for Computing Minimum Spanning Trees(MST)', 'BTP_09010101.pdf', '2013-04-19 15:44:10', 'ABHINANDAN NATH[n.abhinandan]'),
(170, 'n.prashanth', 'REDUCTION OF NON-SYMMETRIC MATRIX TO BANDED HESSENBERG FORM(TILE APPROACH)', '09010124.pdf', '2013-04-19 15:52:55', 'N ESWARA PRASHANTH[n.prashanth]'),
(171, 'n.teja', 'Incremental Clustering for the ROCK-Robust Clustering Algorithm for Categorical Attributes', '09010125.pdf', '2013-04-19 15:54:19', 'N. VISHNU TEJA[n.teja]'),
(172, 'a.sonker', 'Experimental Performance analysis of ARQs', 'BTP FINAL.pdf', '2013-04-19 15:54:37', 'ABHINAV SONKER[a.sonker]'),
(173, 'snehlata', 'Incremental Association Rule Mining from Dynamic Database', 'Snehlata_BTP.pdf', '2013-04-19 16:11:53', 'SNEHLATA[snehlata]'),
(174, 'k.kuldeep', 'QoS based Task Scheduling on Large Scale Chip Multiprocessor', '09010122.pdf', '2013-04-19 16:13:04', 'KULDEEP[k.kuldeep]'),
(175, 'k.rajat', 'Improving Bioevent extraction with the help of Coreference Resolution', 'thesis.pdf', '2013-04-19 16:14:04', 'RAJAT KHANDUJA[k.rajat]'),
(176, 's.rajkumar', 'I/O Efficient QR-Decomposition', 'thesis.pdf', '2013-04-19 16:25:39', 'RAJKUMAR SINGH[s.rajkumar]'),
(177, 'pooja', 'Virtual Memory Algorithms For Systems with Flash as Their Secondary Storage', 'btpreport _09010132.pdf', '2013-04-19 16:29:26', 'POOJA DUBEY[pooja]'),
(178, 'a.anshu', 'Crossings and Intersections in Hypergraphs', '09010110.pdf', '2013-04-19 17:00:02', 'ANURAG ANSHU[a.anshu]'),
(179, 'r.anurag', 'Study of Implicit Rating using Latent Space', 'RamanAnurag09010139BTPThesis.pdf', '2013-04-19 17:04:07', 'RAMAN ANURAG[r.anurag]'),
(180, 's.singla', 'Academic Section Automation', 'Thesis_09010146.pdf', '2013-04-19 17:10:17', 'SAURABH SINGLA[s.singla]'),
(181, 'a.madrosiya', 'Aesthetics of Web Pages', 'Report.pdf', '2013-04-19 17:21:53', 'AKSHAY MADROSIYA[a.madrosiya]'),
(182, 'r.akash', 'A critical study of Frama-C Program Slicing Tool''s PDG and Slicing Plugin', 'AkashBtp.pdf', '2013-04-19 17:24:18', 'AKASH DEEP RAWAT[r.akash]'),
(183, 'pragya', 'A Comparison of Search Methods for unstructured Peer-to-Peer Systems', 'report.pdf', '2013-04-19 17:24:24', 'PRAGYA PARUL[pragya]'),
(184, 'purwar', 'Application of Discrete Event Systems for Detection Of Network Attacks', '09010135.pdf', '2013-04-19 17:26:22', 'PURWAR SANKETH KISHAN[purwar]'),
(185, 'ankit.j', 'Creating 3-D Map of Buildings'' Interior', '09010108.pdf', '2013-04-19 17:26:58', 'ANKIT JAISWAL[ankit.j]'),
(186, 'g.pranav', 'Multi Label Classification', 'btp_report-sem8.pdf', '2013-04-19 17:29:26', 'PRANAV GUPTA[g.pranav]'),
(187, 'n.mehra', 'Learning to Rank: Comparative study of Pairwise and Listwise algorithms', 'my_final_thesis.pdf', '2013-04-19 17:29:55', 'NARESH MEHRA[n.mehra]'),
(188, 'nagendra', 'Support Vector Machine Algorithm', '09010127.pdf', '2013-04-19 17:31:11', 'NAGENDRA RAM[nagendra]'),
(189, 'r.borah', 'ROI Based Reversible watermarking Scheme', '09010142.pdf', '2013-04-19 17:31:35', 'RISHI RAJ BORAH[r.borah]'),
(190, 'pasunuri', 'Performance Analysis of Alternate Boosting Algorithms for Viola-Jones Object Detection', 'thesis.pdf', '2013-04-19 17:31:36', 'PASUNURI RAHUL[pasunuri]'),
(191, 'akash.g', 'Emotional Control Over Situated Robots', 'BTP Report Akash Gupta(09010105).pdf', '2013-04-19 17:32:40', 'AKASH GUPTA[akash.g]'),
(192, 's.pardeshi', 'Linear layouts of weakly triangulated graphs', '04358260.pdf', '2013-04-19 17:35:39', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]'),
(193, 'r.sethia', 'Virtual AdSpace', 'thesis.pdf', '2013-04-19 17:35:50', 'RAVI SETHIA[r.sethia]'),
(194, 'k.sudhir', 'Virtual AdSpace', 'thesis.pdf', '2013-04-19 17:36:37', 'KULKARNI ANAND SUDHIR[k.sudhir]'),
(195, 'gundlapalli', 'Linear layouts of weakly triangulated graphs', 'to-do.pdf', '2013-04-19 17:40:06', 'GUNDLAPALLI SRINIVAS[gundlapalli]'),
(196, 'k.apoorv', 'Wireless Network on Chips', 'thesis.pdf', '2013-04-19 17:45:52', 'APOORV KUMAR[k.apoorv]'),
(197, 'rovin', 'Constructing Orthogonal Convex Hull in the External Memory Model ', 'Thesis.pdf', '2013-04-19 17:45:56', 'ROVIN BHANDARI[rovin]'),
(198, 'anik', 'Automated Interface Generation', 'thesis.pdf', '2013-04-19 17:52:52', 'ANIK CHATTOPADHYAY[anik]'),
(199, 'rohit.raj', 'Incorporating Fault Tolerance in LEACH   Protocol of Wireless Sensor Networks and Implementation in NS2    ', '09010143.pdf', '2013-04-19 18:06:31', 'ROHIT RAJ[rohit.raj]'),
(200, 'c.pravin', 'Incorporating Fault Tolerance in LEACH  Protocol of Wireless Sensor Networks and Implementation  in NS2', '09010134.pdf', '2013-04-19 18:06:40', 'PRAVIN KUMAR CHATURVEDI[c.pravin]'),
(201, 'shah', 'Automation of Medical Section of IIT Guwahati', 'BTP_09010147.PDF', '2013-04-19 18:15:11', 'SHAH AKHILESH KAILASHCHANDRA[shah]'),
(202, 'k.ankit', 'A weighted sum Ensemble approach for Ranking algorithms', 'thesis.pdf', '2013-04-19 18:19:50', 'ANKIT KUMAR[k.ankit]'),
(203, 'k.gunjan', 'Energy Efficient algorithm', 'thesis.pdf', '2013-04-19 18:24:37', 'GUNJAN KUMAR[k.gunjan]'),
(204, 'anchal', 'Load Balancing based Horizontal Handover in IEEE 802.11 Networks', 'thesis.pdf', '2013-04-19 18:34:00', 'ANCHAL CHOUBEY[anchal]'),
(205, 'aditya.k', 'Subgraph Mining and its application in Network Traffic Identification', 'thesis.pdf', '2013-04-19 19:15:11', 'ADITYA KUMAR[aditya.k]'),
(206, 'a.syal', 'Scalable Watermarking for Spatial Adaptations', '09010113.pdf', '2013-04-19 19:36:37', 'AYUSH SYAL[a.syal]'),
(207, 'a.parolia', 'MARS - A Mobile Agent platform for Robotic Systems', 'parolia.pdf', '2013-04-20 20:41:45', 'AYUSH PAROLIA[a.parolia]'),
(208, 'apul', 'QoS in Multi-Channel Multi-Interface Wireless Mesh Networks', 'apul.pdf', '2013-04-20 20:43:10', 'APUL JAIN[apul]'),
(209, 'behara', 'Implementation of FIPA Specications in Typhon', '09010168-Shyam Patro.pdf', '2013-04-20 20:44:32', 'BEHARA MANI SHYAM PATRO[behara]'),
(210, 'rahul.br', 'Distributed Lock Managers: Implementing and analyzing scalable Services that provide locking primitives distributed applications', 'Rahul_Bhatnagar_09010136.pdf', '2013-04-21 16:50:17', 'RAHUL BHATNAGAR[rahul.br]'),
(211, 'b.khatri', 'Unsupervised Entailment Detection between Dependency Graph Fragments', 'BTP_khatri.pdf', '2013-04-21 17:09:45', 'BHARAT KHATRI[b.khatri]'),
(212, 'shashi', 'scd', '3oct1.pdf', '2013-12-02 13:27:55', 'SHASHI KANT KUNAL1[shashi]'),
(213, 'shashi', 'xvxc', '9oct1.pdf', '2013-12-02 13:28:40', 'SHASHI KANT KUNAL1[shashi]'),
(214, 'shashi', 'z', '6nov1.pdf', '2013-12-02 13:30:29', 'SHASHI KANT KUNAL1[shashi]'),
(215, 'shashi', 'df', '3oct1.pdf', '2013-12-02 13:42:27', 'SHASHI KANT KUNAL1[shashi]'),
(216, 'mayank.agl', 'csx', '17oct1.pdf', '2013-12-02 13:53:00', 'Mayank Agarwal[mayank.agl]'),
(217, 'c.pravin', 'vcxvx', '23oct1.pdf', '2013-12-02 13:54:14', 'PRAVIN KUMAR CHATURVEDI[c.pravin]'),
(218, 'shashi', 'fdssdf', '29oct2.pdf', '2013-12-02 14:01:06', 'SHASHI KANT KUNAL1[shashi]'),
(219, 'shashi', 'cszz', '8oct1.pdf', '2013-12-02 14:01:26', 'SHASHI KANT KUNAL1[shashi]'),
(220, 'shashi', 'dsg', '7nov2.pdf', '2013-12-02 14:02:16', 'SHASHI KANT KUNAL1[shashi]'),
(221, 'shashi', 'vcv', '6nov2.pdf', '2013-12-02 14:03:38', 'SHASHI KANT KUNAL1[shashi]'),
(222, 'shashi', 'vxcvxc', '6nov1.pdf', '2013-12-02 14:03:51', 'SHASHI KANT KUNAL1[shashi]'),
(223, 'shashi', 'szxc', '8oct1.pdf', '2013-12-02 14:26:32', 'SHASHI KANT KUNAL1[shashi]'),
(224, 'shashi', 'xcx', '6nov1.pdf', '2013-12-02 14:28:12', 'SHASHI KANT KUNAL1[shashi]'),
(225, 'shashi', 'czzc', '3oct1.pdf', '2013-12-02 14:35:26', 'SHASHI KANT KUNAL1[shashi]'),
(226, 'shashi', 'sfdsaf', '6nov1.pdf', '2013-12-02 14:35:56', 'SHASHI KANT KUNAL1[shashi]'),
(227, 'shashi', 'cz', '6nov2.pdf', '2013-12-02 14:41:16', 'SHASHI KANT KUNAL1[shashi]'),
(228, 'shashi', 'xf', '3oct1.pdf', '2013-12-02 14:46:57', 'SHASHI KANT KUNAL1[shashi]'),
(229, 'shashi', 'vxc', '6nov2.pdf', '2013-12-02 14:48:43', 'SHASHI KANT KUNAL1[shashi]'),
(230, 'shashi', 'fdsf', '1oct1.pdf', '2013-12-02 14:53:56', 'SHASHI KANT KUNAL1[shashi]'),
(231, 'shashi', 'dzfds', '3oct1.pdf', '2013-12-02 15:01:55', 'SHASHI KANT KUNAL1[shashi]'),
(232, 'shashi', 'czx', '6nov2.pdf', '2013-12-02 15:10:48', 'SHASHI KANT KUNAL1[shashi]'),
(233, 'shashi', 'sadsa', '8oct1.pdf', '2013-12-02 15:26:25', 'SHASHI KANT KUNAL1[shashi]'),
(234, 'shashi', 'xcz', '8oct1.pdf', '2013-12-02 15:30:41', 'SHASHI KANT KUNAL1[shashi]'),
(235, 'shashi', 'czc', '3oct1.pdf', '2013-12-02 15:31:02', 'SHASHI KANT KUNAL1[shashi]'),
(236, 'shashi', 'dsadfsafaf', '9oct1.pdf', '2013-12-02 15:39:53', 'SHASHI KANT KUNAL1[shashi]'),
(237, 'shashi', 'ASSSssd', '5nov1.pdf', '2013-12-02 15:46:53', 'SHASHI KANT KUNAL1[shashi]'),
(238, 'shashi', 'aaaaaaaaaaaaa', '8oct1.pdf', '2013-12-02 15:58:09', 'SHASHI KANT KUNAL1[shashi]'),
(239, 'shashi', 'aaaaaaaaaaaaa', '7nov2.pdf', '2013-12-02 16:05:27', 'SHASHI KANT KUNAL1[shashi]'),
(240, 'shashi', 'aaaaaaaaaaaaa', '6nov2.pdf', '2013-12-02 16:12:54', 'SHASHI KANT KUNAL1[shashi]'),
(241, 'shashi', 'asdsadasd', '6nov1.pdf', '2013-12-02 16:17:45', 'SHASHI KANT KUNAL1[shashi]'),
(242, 'shashi', 'aa', '9oct1.pdf', '2013-12-02 16:22:21', 'SHASHI KANT KUNAL1[shashi]'),
(243, 'shashi', 'aa', '9oct2.pdf', '2013-12-02 16:23:48', 'SHASHI KANT KUNAL1[shashi]'),
(244, 'shashi', 'aaaaa', '9oct1.pdf', '2013-12-02 16:29:22', 'SHASHI KANT KUNAL1[shashi]'),
(245, 'shashi', 'fb ', '3oct1.pdf', '2013-12-03 01:20:42', 'SHASHI KANT KUNAL1[shashi]'),
(246, 'shashi', 'sd', '7nov2.pdf', '2013-12-03 01:38:24', 'SHASHI KANT KUNAL1[shashi]'),
(247, 'shashi', 'dsvf', '5nov1.pdf', '2013-12-03 01:43:35', 'SHASHI KANT KUNAL1[shashi]'),
(248, 'shashi', 'df', '3oct1.pdf', '2013-12-03 01:45:49', 'SHASHI KANT KUNAL1[shashi]'),
(249, 'shashi', 'aaaaaaaaaaaaa', '9oct1.pdf', '2013-12-03 04:46:41', 'SHASHI KANT KUNAL1[shashi]'),
(250, 'shashi', 'dsf', '9oct1.pdf', '2013-12-03 04:49:45', 'SHASHI KANT KUNAL1[shashi]'),
(251, 'shashi', 'dx', '9oct1.pdf', '2013-12-03 04:57:38', 'SHASHI KANT KUNAL1[shashi]'),
(252, 'shashi', 'szx', '9oct1.pdf', '2013-12-03 04:58:52', 'SHASHI KANT KUNAL1[shashi]'),
(253, 'shashi', 'szc', '9oct1.pdf', '2013-12-03 05:01:29', 'SHASHI KANT KUNAL1[shashi]'),
(254, 'shashi', 'dfv', '9oct1.pdf', '2013-12-03 05:07:14', 'SHASHI KANT KUNAL1[shashi]'),
(255, 'shashi', 'c', '3oct1.pdf', '2013-12-03 05:09:14', 'SHASHI KANT KUNAL1[shashi]'),
(256, 'shashi', 'x', '9oct2.pdf', '2013-12-03 05:10:41', 'SHASHI KANT KUNAL1[shashi]'),
(257, 'shashi', 'zzz', '9oct2.pdf', '2013-12-03 05:13:19', 'SHASHI KANT KUNAL1[shashi]'),
(258, 'shashi', 'zx', '9oct2.pdf', '2013-12-03 05:19:39', 'SHASHI KANT KUNAL1[shashi]'),
(259, 'shashi', 'z', '8oct1.pdf', '2013-12-03 05:22:54', 'SHASHI KANT KUNAL1[shashi]'),
(260, 'shashi', 'ds', '9oct1.pdf', '2013-12-03 05:26:44', 'SHASHI KANT KUNAL1[shashi]'),
(261, 'shashi', 'xs', '9oct2.pdf', '2013-12-03 05:29:07', 'SHASHI KANT KUNAL1[shashi]'),
(262, 'shashi', 'z', '9oct1.pdf', '2013-12-03 05:31:08', 'SHASHI KANT KUNAL1[shashi]'),
(263, 'shashi', 'x', '7nov2.pdf', '2013-12-03 05:33:13', 'SHASHI KANT KUNAL1[shashi]'),
(264, 'shashi', 'zz', '9oct1.pdf', '2013-12-03 05:35:25', 'SHASHI KANT KUNAL1[shashi]'),
(265, 'shashi', 'sx', '9oct2.pdf', '2013-12-03 05:37:48', 'SHASHI KANT KUNAL1[shashi]'),
(266, 'shashi', 'sz', '9oct2.pdf', '2013-12-03 05:39:52', 'SHASHI KANT KUNAL1[shashi]'),
(267, 'shashi', 'fxd', '3oct1.pdf', '2013-12-03 05:41:33', 'SHASHI KANT KUNAL1[shashi]'),
(268, 'a.anshu', 'Crossings and Intersections in Hypergraphs', '09010110.pdf', '2013-12-03 21:08:04', 'ANURAG ANSHU[a.anshu]'),
(269, 'a.madrosiya', 'Aesthetics of Web Pages', 'Report.pdf', '2013-12-03 21:08:04', 'AKSHAY MADROSIYA[a.madrosiya]'),
(270, 'a.parag', 'Learning from Cricket Text Commentary', '9010130-BTP2.pdf', '2013-12-03 21:08:05', 'PARAG AGRAWAL[a.parag]'),
(271, 'a.parolia', 'MARS - A Mobile Agent platform for Robotic Systems', 'parolia.pdf', '2013-12-03 21:08:05', 'AYUSH PAROLIA[a.parolia]'),
(272, 'a.sonker', 'Experimental Performance analysis of ARQs', 'BTP FINAL.pdf', '2013-12-03 21:08:05', 'ABHINAV SONKER[a.sonker]'),
(273, 'a.syal', 'Scalable Watermarking for Spatial Adaptations', '09010113.pdf', '2013-12-03 21:08:05', 'AYUSH SYAL[a.syal]'),
(274, 'aditya.k', 'Subgraph Mining and its application in Network Traffic Identification', 'thesis.pdf', '2013-12-03 21:08:05', 'ADITYA KUMAR[aditya.k]'),
(275, 'akash.g', 'Emotional Control Over Situated Robots', 'BTP Report Akash Gupta(09010105).pdf', '2013-12-03 21:08:05', 'AKASH GUPTA[akash.g]'),
(276, 'anchal', 'Load Balancing based Horizontal Handover in IEEE 802.11 Networks', 'thesis.pdf', '2013-12-03 21:08:05', 'ANCHAL CHOUBEY[anchal]'),
(277, 'anik', 'Automated Interface Generation', 'thesis.pdf', '2013-12-03 21:08:05', 'ANIK CHATTOPADHYAY[anik]'),
(278, 'ankit.j', 'Creating 3-D Map of Buildings'' Interior', '09010108.pdf', '2013-12-03 21:08:05', 'ANKIT JAISWAL[ankit.j]'),
(279, 'apul', 'QoS in Multi-Channel Multi-Interface Wireless Mesh Networks', 'apul.pdf', '2013-12-03 21:08:05', 'APUL JAIN[apul]'),
(280, 'ayushi', 'Data Mining In Multi Database System', '9010114.pdf', '2013-12-03 21:08:05', 'AYUSHI MATHUR[ayushi]'),
(281, 'b.juhi', 'Issues with TCP in Data Center Networks', 'btpthesis.pdf', '2013-12-03 21:08:05', 'JUHI BAGRODIA[b.juhi]'),
(282, 'b.khatri', 'Unsupervised Entailment Detection between Dependency Graph Fragments', 'BTP_khatri.pdf', '2013-12-03 21:08:05', 'BHARAT KHATRI[b.khatri]'),
(283, 'behara', 'Implementation of FIPA Specications in Typhon', '09010168-Shyam Patro.pdf', '2013-12-03 21:08:05', 'BEHARA MANI SHYAM PATRO[behara]'),
(284, 'c.prakash', 'Deadlock Free Routing for 2D mesh topology', '08010113-btp-phase2-report.pdf', '2013-12-03 21:08:05', 'CHETAN PRAKASH[c.prakash]'),
(285, 'c.pravin', 'Incorporating Fault Tolerance in LEACH  Protocol of Wireless Sensor Networks and Implementation  in NS2', '09010134.pdf', '2013-12-03 21:08:05', 'PRAVIN KUMAR CHATURVEDI[c.pravin]'),
(286, 'g.pranav', 'Multi Label Classification', 'btp_report-sem8.pdf', '2013-12-03 21:08:05', 'PRANAV GUPTA[g.pranav]'),
(287, 'gundlapalli', 'Linear layouts of weakly triangulated graphs', 'to-do.pdf', '2013-12-03 21:08:05', 'GUNDLAPALLI SRINIVAS[gundlapalli]'),
(288, 'k.ankit', 'A weighted sum Ensemble approach for Ranking algorithms', 'thesis.pdf', '2013-12-03 21:08:05', 'ANKIT KUMAR[k.ankit]'),
(289, 'k.apoorv', 'Wireless Network on Chips', 'thesis.pdf', '2013-12-03 21:08:05', 'APOORV KUMAR[k.apoorv]'),
(290, 'k.gunjan', 'Energy Efficient algorithm', 'thesis.pdf', '2013-12-03 21:08:06', 'GUNJAN KUMAR[k.gunjan]'),
(291, 'k.kuldeep', 'QoS based Task Scheduling on Large Scale Chip Multiprocessor', '09010122.pdf', '2013-12-03 21:08:06', 'KULDEEP[k.kuldeep]'),
(292, 'k.rajat', 'Improving Bioevent extraction with the help of Coreference Resolution', 'thesis.pdf', '2013-12-03 21:08:06', 'RAJAT KHANDUJA[k.rajat]'),
(293, 'k.sudhir', 'Virtual AdSpace', 'thesis.pdf', '2013-12-03 21:08:06', 'KULKARNI ANAND SUDHIR[k.sudhir]'),
(294, 'karri', 'Steganographic Algorithm Based on Randomization of DCT Kernel', 'final_thesis.pdf', '2013-12-03 21:08:06', 'KARRI SWATHI[karri]'),
(295, 'm.narendra', 'Multicast Routing In 3D Networks On Chip', 'BtpReportFinal.pdf', '2013-12-03 21:08:06', 'NARENDRA KUMAR MEENA[m.narendra]'),
(296, 'n.abhinandan', 'I/O Efficient Algorithms for Computing Minimum Spanning Trees(MST)', 'BTP_09010101.pdf', '2013-12-03 21:08:06', 'ABHINANDAN NATH[n.abhinandan]'),
(297, 'n.mehra', 'Learning to Rank: Comparative study of Pairwise and Listwise algorithms', 'my_final_thesis.pdf', '2013-12-03 21:08:06', 'NARESH MEHRA[n.mehra]'),
(298, 'n.prashanth', 'REDUCTION OF NON-SYMMETRIC MATRIX TO BANDED HESSENBERG FORM(TILE APPROACH)', '09010124.pdf', '2013-12-03 21:08:06', 'N ESWARA PRASHANTH[n.prashanth]'),
(299, 'n.teja', 'Incremental Clustering for the ROCK-Robust Clustering Algorithm for Categorical Attributes', '09010125.pdf', '2013-12-03 21:08:06', 'N. VISHNU TEJA[n.teja]'),
(300, 'nagendra', 'Support Vector Machine Algorithm', '09010127.pdf', '2013-12-03 21:08:06', 'NAGENDRA RAM[nagendra]'),
(301, 'pasunuri', 'Performance Analysis of Alternate Boosting Algorithms for Viola-Jones Object Detection', 'thesis.pdf', '2013-12-03 21:08:06', 'PASUNURI RAHUL[pasunuri]'),
(302, 'pooja', 'Virtual Memory Algorithms For Systems with Flash as Their Secondary Storage', 'btpreport _09010132.pdf', '2013-12-03 21:08:06', 'POOJA DUBEY[pooja]'),
(303, 'pragya', 'A Comparison of Search Methods for unstructured Peer-to-Peer Systems', 'report.pdf', '2013-12-03 21:08:06', 'PRAGYA PARUL[pragya]'),
(304, 'purwar', 'Application of Discrete Event Systems for Detection Of Network Attacks', '09010135.pdf', '2013-12-03 21:08:06', 'PURWAR SANKETH KISHAN[purwar]'),
(305, 'r.akash', 'A critical study of Frama-C Program Slicing Tool''s PDG and Slicing Plugin', 'AkashBtp.pdf', '2013-12-03 21:08:06', 'AKASH DEEP RAWAT[r.akash]'),
(306, 'r.anurag', 'Study of Implicit Rating using Latent Space', 'RamanAnurag09010139BTPThesis.pdf', '2013-12-03 21:08:06', 'RAMAN ANURAG[r.anurag]'),
(307, 'r.barua', 'Knowledge Discovery in Cricket using Relational Learning Methods', 'thesis.pdf', '2013-12-03 21:08:06', 'RISHI BARUA[r.barua]'),
(308, 'r.borah', 'ROI Based Reversible watermarking Scheme', '09010142.pdf', '2013-12-03 21:08:06', 'RISHI RAJ BORAH[r.borah]'),
(309, 'r.sethia', 'Virtual AdSpace', 'thesis.pdf', '2013-12-03 21:08:06', 'RAVI SETHIA[r.sethia]'),
(310, 'rahul.br', 'Distributed Lock Managers: Implementing and analyzing scalable Services that provide locking primitives distributed applications', 'Rahul_Bhatnagar_09010136.pdf', '2013-12-03 21:08:06', 'RAHUL BHATNAGAR[rahul.br]'),
(311, 'rohit.raj', 'Incorporating Fault Tolerance in LEACH   Protocol of Wireless Sensor Networks and Implementation in NS2    ', '09010143.pdf', '2013-12-03 21:08:06', 'ROHIT RAJ[rohit.raj]'),
(312, 'rovin', 'Constructing Orthogonal Convex Hull in the External Memory Model ', 'Thesis.pdf', '2013-12-03 21:08:06', 'ROVIN BHANDARI[rovin]'),
(313, 's.pardeshi', 'Linear layouts of weakly triangulated graphs', '04358260.pdf', '2013-12-03 21:08:07', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]'),
(314, 's.rajkumar', 'I/O Efficient QR-Decomposition', 'thesis.pdf', '2013-12-03 21:08:07', 'RAJKUMAR SINGH[s.rajkumar]'),
(315, 's.singla', 'Academic Section Automation', 'Thesis_09010146.pdf', '2013-12-03 21:08:07', 'SAURABH SINGLA[s.singla]'),
(316, 's.sumeet', 'Incremental Shared Nearest Neighbor Density Based Clustering', '09010153-BTP-Report.pdf', '2013-12-03 21:08:07', 'SUMEET KUMAR SINGH[s.sumeet]'),
(317, 'shah', 'Automation of Medical Section of IIT Guwahati', 'BTP_09010147.PDF', '2013-12-03 21:08:07', 'SHAH AKHILESH KAILASHCHANDRA[shah]'),
(318, 'snehlata', 'Incremental Association Rule Mining from Dynamic Database', 'Snehlata_BTP.pdf', '2013-12-03 21:08:07', 'SNEHLATA[snehlata]'),
(319, 'sunil.k', 'Scheduling Multiphase Applications on Heterogenous Multiprocessors', 'thesis.pdf', '2013-12-03 21:08:07', 'SUNIL KUMAR[sunil.k]'),
(320, 't.shubham', 'A novel random walk based method for associating genes with diseases', '09010148.pdf', '2013-12-03 21:08:07', 'SHUBHAM TRIPATHI[t.shubham]'),
(321, 'v.goyal', 'Automatic Speaker Recognition', 'VikramGoyal_BTPReport_2.pdf', '2013-12-03 21:08:07', 'VIKRAM KUMAR GOYAL[v.goyal]'),
(322, 'vibhuti', 'Web Service Car Broker System', 'FINAL_BTP_09010157.pdf', '2013-12-03 21:08:07', 'VIBHUTI KUMAR[vibhuti]'),
(323, 'a.anshu', 'Crossings and Intersections in Hypergraphs', '09010110.pdf', '2013-12-03 21:17:54', 'ANURAG ANSHU[a.anshu]'),
(324, 'a.madrosiya', 'Aesthetics of Web Pages', 'Report.pdf', '2013-12-03 21:17:55', 'AKSHAY MADROSIYA[a.madrosiya]'),
(325, 'a.parag', 'Learning from Cricket Text Commentary', '9010130-BTP2.pdf', '2013-12-03 21:17:55', 'PARAG AGRAWAL[a.parag]'),
(326, 'a.parolia', 'MARS - A Mobile Agent platform for Robotic Systems', 'parolia.pdf', '2013-12-03 21:17:55', 'AYUSH PAROLIA[a.parolia]'),
(327, 'a.sonker', 'Experimental Performance analysis of ARQs', 'BTP FINAL.pdf', '2013-12-03 21:17:55', 'ABHINAV SONKER[a.sonker]'),
(328, 'a.syal', 'Scalable Watermarking for Spatial Adaptations', '09010113.pdf', '2013-12-03 21:17:55', 'AYUSH SYAL[a.syal]'),
(329, 'aditya.k', 'Subgraph Mining and its application in Network Traffic Identification', 'thesis.pdf', '2013-12-03 21:17:55', 'ADITYA KUMAR[aditya.k]'),
(330, 'akash.g', 'Emotional Control Over Situated Robots', 'BTP Report Akash Gupta(09010105).pdf', '2013-12-03 21:17:55', 'AKASH GUPTA[akash.g]'),
(331, 'anchal', 'Load Balancing based Horizontal Handover in IEEE 802.11 Networks', 'thesis.pdf', '2013-12-03 21:17:55', 'ANCHAL CHOUBEY[anchal]'),
(332, 'anik', 'Automated Interface Generation', 'thesis.pdf', '2013-12-03 21:17:55', 'ANIK CHATTOPADHYAY[anik]'),
(333, 'ankit.j', 'Creating 3-D Map of Buildings'' Interior', '09010108.pdf', '2013-12-03 21:17:55', 'ANKIT JAISWAL[ankit.j]'),
(334, 'apul', 'QoS in Multi-Channel Multi-Interface Wireless Mesh Networks', 'apul.pdf', '2013-12-03 21:17:55', 'APUL JAIN[apul]'),
(335, 'ayushi', 'Data Mining In Multi Database System', '9010114.pdf', '2013-12-03 21:17:55', 'AYUSHI MATHUR[ayushi]'),
(336, 'b.juhi', 'Issues with TCP in Data Center Networks', 'btpthesis.pdf', '2013-12-03 21:17:55', 'JUHI BAGRODIA[b.juhi]'),
(337, 'b.khatri', 'Unsupervised Entailment Detection between Dependency Graph Fragments', 'BTP_khatri.pdf', '2013-12-03 21:17:55', 'BHARAT KHATRI[b.khatri]'),
(338, 'behara', 'Implementation of FIPA Specications in Typhon', '09010168-Shyam Patro.pdf', '2013-12-03 21:17:55', 'BEHARA MANI SHYAM PATRO[behara]'),
(339, 'c.prakash', 'Deadlock Free Routing for 2D mesh topology', '08010113-btp-phase2-report.pdf', '2013-12-03 21:17:55', 'CHETAN PRAKASH[c.prakash]'),
(340, 'c.pravin', 'Incorporating Fault Tolerance in LEACH  Protocol of Wireless Sensor Networks and Implementation  in NS2', '09010134.pdf', '2013-12-03 21:17:55', 'PRAVIN KUMAR CHATURVEDI[c.pravin]'),
(341, 'g.pranav', 'Multi Label Classification', 'btp_report-sem8.pdf', '2013-12-03 21:17:55', 'PRANAV GUPTA[g.pranav]'),
(342, 'gundlapalli', 'Linear layouts of weakly triangulated graphs', 'to-do.pdf', '2013-12-03 21:17:55', 'GUNDLAPALLI SRINIVAS[gundlapalli]'),
(343, 'k.ankit', 'A weighted sum Ensemble approach for Ranking algorithms', 'thesis.pdf', '2013-12-03 21:17:56', 'ANKIT KUMAR[k.ankit]'),
(344, 'k.apoorv', 'Wireless Network on Chips', 'thesis.pdf', '2013-12-03 21:17:56', 'APOORV KUMAR[k.apoorv]'),
(345, 'k.gunjan', 'Energy Efficient algorithm', 'thesis.pdf', '2013-12-03 21:17:56', 'GUNJAN KUMAR[k.gunjan]'),
(346, 'k.kuldeep', 'QoS based Task Scheduling on Large Scale Chip Multiprocessor', '09010122.pdf', '2013-12-03 21:17:56', 'KULDEEP[k.kuldeep]'),
(347, 'k.rajat', 'Improving Bioevent extraction with the help of Coreference Resolution', 'thesis.pdf', '2013-12-03 21:17:56', 'RAJAT KHANDUJA[k.rajat]'),
(348, 'k.sudhir', 'Virtual AdSpace', 'thesis.pdf', '2013-12-03 21:17:56', 'KULKARNI ANAND SUDHIR[k.sudhir]'),
(349, 'karri', 'Steganographic Algorithm Based on Randomization of DCT Kernel', 'final_thesis.pdf', '2013-12-03 21:17:56', 'KARRI SWATHI[karri]'),
(350, 'm.narendra', 'Multicast Routing In 3D Networks On Chip', 'BtpReportFinal.pdf', '2013-12-03 21:17:56', 'NARENDRA KUMAR MEENA[m.narendra]'),
(351, 'n.abhinandan', 'I/O Efficient Algorithms for Computing Minimum Spanning Trees(MST)', 'BTP_09010101.pdf', '2013-12-03 21:17:56', 'ABHINANDAN NATH[n.abhinandan]'),
(352, 'n.mehra', 'Learning to Rank: Comparative study of Pairwise and Listwise algorithms', 'my_final_thesis.pdf', '2013-12-03 21:17:56', 'NARESH MEHRA[n.mehra]'),
(353, 'n.prashanth', 'REDUCTION OF NON-SYMMETRIC MATRIX TO BANDED HESSENBERG FORM(TILE APPROACH)', '09010124.pdf', '2013-12-03 21:17:56', 'N ESWARA PRASHANTH[n.prashanth]'),
(354, 'n.teja', 'Incremental Clustering for the ROCK-Robust Clustering Algorithm for Categorical Attributes', '09010125.pdf', '2013-12-03 21:17:56', 'N. VISHNU TEJA[n.teja]'),
(355, 'nagendra', 'Support Vector Machine Algorithm', '09010127.pdf', '2013-12-03 21:17:56', 'NAGENDRA RAM[nagendra]'),
(356, 'pasunuri', 'Performance Analysis of Alternate Boosting Algorithms for Viola-Jones Object Detection', 'thesis.pdf', '2013-12-03 21:17:56', 'PASUNURI RAHUL[pasunuri]'),
(357, 'pooja', 'Virtual Memory Algorithms For Systems with Flash as Their Secondary Storage', 'btpreport _09010132.pdf', '2013-12-03 21:17:56', 'POOJA DUBEY[pooja]'),
(358, 'pragya', 'A Comparison of Search Methods for unstructured Peer-to-Peer Systems', 'report.pdf', '2013-12-03 21:17:56', 'PRAGYA PARUL[pragya]'),
(359, 'purwar', 'Application of Discrete Event Systems for Detection Of Network Attacks', '09010135.pdf', '2013-12-03 21:17:56', 'PURWAR SANKETH KISHAN[purwar]'),
(360, 'r.akash', 'A critical study of Frama-C Program Slicing Tool''s PDG and Slicing Plugin', 'AkashBtp.pdf', '2013-12-03 21:17:57', 'AKASH DEEP RAWAT[r.akash]'),
(361, 'r.anurag', 'Study of Implicit Rating using Latent Space', 'RamanAnurag09010139BTPThesis.pdf', '2013-12-03 21:17:57', 'RAMAN ANURAG[r.anurag]'),
(362, 'r.barua', 'Knowledge Discovery in Cricket using Relational Learning Methods', 'thesis.pdf', '2013-12-03 21:17:57', 'RISHI BARUA[r.barua]'),
(363, 'r.borah', 'ROI Based Reversible watermarking Scheme', '09010142.pdf', '2013-12-03 21:17:57', 'RISHI RAJ BORAH[r.borah]'),
(364, 'r.sethia', 'Virtual AdSpace', 'thesis.pdf', '2013-12-03 21:17:57', 'RAVI SETHIA[r.sethia]'),
(365, 'rahul.br', 'Distributed Lock Managers: Implementing and analyzing scalable Services that provide locking primitives distributed applications', 'Rahul_Bhatnagar_09010136.pdf', '2013-12-03 21:17:57', 'RAHUL BHATNAGAR[rahul.br]'),
(366, 'rohit.raj', 'Incorporating Fault Tolerance in LEACH   Protocol of Wireless Sensor Networks and Implementation in NS2    ', '09010143.pdf', '2013-12-03 21:17:57', 'ROHIT RAJ[rohit.raj]'),
(367, 'rovin', 'Constructing Orthogonal Convex Hull in the External Memory Model ', 'Thesis.pdf', '2013-12-03 21:17:57', 'ROVIN BHANDARI[rovin]'),
(368, 's.pardeshi', 'Linear layouts of weakly triangulated graphs', '04358260.pdf', '2013-12-03 21:17:57', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]'),
(369, 's.rajkumar', 'I/O Efficient QR-Decomposition', 'thesis.pdf', '2013-12-03 21:17:57', 'RAJKUMAR SINGH[s.rajkumar]'),
(370, 's.singla', 'Academic Section Automation', 'Thesis_09010146.pdf', '2013-12-03 21:17:57', 'SAURABH SINGLA[s.singla]'),
(371, 's.sumeet', 'Incremental Shared Nearest Neighbor Density Based Clustering', '09010153-BTP-Report.pdf', '2013-12-03 21:17:57', 'SUMEET KUMAR SINGH[s.sumeet]'),
(372, 'shah', 'Automation of Medical Section of IIT Guwahati', 'BTP_09010147.PDF', '2013-12-03 21:17:57', 'SHAH AKHILESH KAILASHCHANDRA[shah]'),
(373, 'snehlata', 'Incremental Association Rule Mining from Dynamic Database', 'Snehlata_BTP.pdf', '2013-12-03 21:17:57', 'SNEHLATA[snehlata]'),
(374, 'sunil.k', 'Scheduling Multiphase Applications on Heterogenous Multiprocessors', 'thesis.pdf', '2013-12-03 21:17:57', 'SUNIL KUMAR[sunil.k]'),
(375, 't.shubham', 'A novel random walk based method for associating genes with diseases', '09010148.pdf', '2013-12-03 21:17:57', 'SHUBHAM TRIPATHI[t.shubham]'),
(376, 'v.goyal', 'Automatic Speaker Recognition', 'VikramGoyal_BTPReport_2.pdf', '2013-12-03 21:17:57', 'VIKRAM KUMAR GOYAL[v.goyal]'),
(377, 'vibhuti', 'Web Service Car Broker System', 'FINAL_BTP_09010157.pdf', '2013-12-03 21:17:58', 'VIBHUTI KUMAR[vibhuti]');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `class` varchar(10) NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`class`, `last_date`) VALUES
('BT', '2014-10-19'),
('MT', '2014-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll_number` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(200) NOT NULL,
  `user_nm` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(3) DEFAULT NULL,
  `pass_changed` varchar(4) NOT NULL,
  `pass_changed_at` datetime DEFAULT NULL,
  `pass_created_at` datetime DEFAULT NULL,
  `last_modified_by` varchar(250) DEFAULT NULL,
  `advisor_id` varchar(100) NOT NULL,
  `permission` varchar(4) NOT NULL,
  `thesis` varchar(100) NOT NULL,
  `student_amount` int(10) NOT NULL,
  PRIMARY KEY (`roll_number`),
  UNIQUE KEY `user_id` (`user_nm`),
  KEY `advisor_id` (`advisor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_number`, `name`, `user_nm`, `password`, `class`, `pass_changed`, `pass_changed_at`, `pass_created_at`, `last_modified_by`, `advisor_id`, `permission`, `thesis`, `student_amount`) VALUES
('05010137', 'SHASHI KANT KUNAL1', 'shashi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-10-10 00:00:00', '2013-04-11 12:16:56', 'SHASHI KANT KUNAL1[shashi]', 'santosh_biswas', 'YES', 'NETWORKING', 1),
('06010133', 'NAPOLEAN DANG', 'n.dang', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'pkdas', 'YES', ' SIGNAL PROCESSING', 1),
('08010129', 'KURAKULA VENKATA NARENDRA', 'n.kurakula', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'jatin', 'YES', ' VLSI DESIGN', 2),
('08010154', 'YAMBEM PUSKIN SINGH', 'y.singh', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'thesisadmin', 'pinaki', 'YES', 'COMPUTATIONAL GEOMETRY', 1),
('10610112', 'Mayank Agarwal', 'mayank.agl', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-10-01 00:00:00', '2013-10-01 00:00:00', 'thesisadmin', 'santosh_biswas', 'YES', ' NETWORKING', 3),
('1111111', 'qwe', 'ewq', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'MT', 'NO', NULL, '2013-11-12 00:00:00', 'thesisadmin[Main Admin User]', 'ben', 'NO', '', 0),
('112223232', 'f', 'df', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'MT', 'NO', NULL, '2013-11-12 00:00:00', 'thesisadmin[Main Admin User]', 'sbnair', 'NO', '', 0),
('120101073', 'swap', 'swap', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'MT', 'NO', NULL, '2013-11-12 00:00:00', 'thesisadmin[Main Admin User]', 'rinkulu', 'NO', '', 0),
('8010106', 'ANUBHAV JEPH', 'a.jeph', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-12 00:00:00', 'thesisadmin', 'ranbir', 'YES', 'MACHINE LEARNING', 1),
('8010113', 'CHETAN PRAKASH', 'c.prakash', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-12 00:00:00', 'thesisadmin', 'asahu', 'YES', ' COMPUTER ARCHITECTURE', 1),
('9010101', 'ABHINANDAN NATH', 'n.abhinandan', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'sajith', 'YES', 'ALGORITHMS', 1),
('9010102', 'ABHINAV SONKER', 'a.sonker', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'pinaki', 'YES', 'COMPUTATIONAL GEOMETRY', 2),
('9010103', 'ADITYA KUMAR', 'aditya.k', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ADITYA KUMAR[aditya.k]', 'saradhi', 'NO', 'MACHINE LEARNING', 2),
('9010104', 'AKASH DEEP RAWAT', 'r.akash', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'dgoswami', 'dgoswami', 'NO', 'SOFTWARE ENGINEERING', 1),
('9010105', 'AKASH GUPTA', 'akash.g', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AKASH GUPTA[akash.g]', 'sbnair', 'NO', ' INTELLIGENT SYSTEMS', 5),
('9010106', 'AKSHAY MADROSIYA', 'a.madrosiya', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AKSHAY MADROSIYA[a.madrosiya]', 'samit', 'NO', 'MACHINE LEARNING', 3),
('9010107', 'ANCHAL CHOUBEY', 'anchal', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'NO', 'NETWORKING', 2),
('9010108', 'ANKIT JAISWAL', 'ankit.j', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'ANKIT JAISWAL[ankit.j]', 'samit', 'NO', ' HUMAN COMPUTER INTERACTIONS', 1),
('9010109', 'ANKIT KUMAR', 'k.ankit', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 'MACHINE LEARNING', 4),
('9010110', 'ANURAG ANSHU', 'a.anshu', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ANURAG ANSHU[a.anshu]', 'saswata.sh', 'NO', 'ALGORITHMS', 2),
('9010111', 'APOORV KUMAR', 'k.apoorv', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'APOORV KUMAR[k.apoorv]', 'hemangee', 'NO', 'COMPUTER ARCHITECTURE', 1),
('9010112', 'APUL JAIN', 'apul', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'NO', 'NETWORKING', 3),
('9010113', 'AYUSH SYAL', 'a.syal', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'arijit', 'arijit', 'YES', 'STEGANOGRAPHY', 1),
('9010114', 'AYUSHI MATHUR', 'ayushi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'AYUSHI MATHUR[ayushi]', 'pinaki', 'NO', 'COMPUTATIONAL GEOMETRY', 3),
('9010115', 'DEEPAK SINGH NEGI', 'd.negi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'ben', 'NO', 'COMBINATORICS', 1),
('9010116', 'GAURAV RATHI', 'g.rathi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'GAURAV RATHI[g.rathi]', 'ranbir', 'NO', 'MACHINE LEARNING', 5),
('9010117', 'GUNJAN KUMAR', 'k.gunjan', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'GUNJAN KUMAR[k.gunjan]', 'saswata.sh', 'NO', 'ALGORITHMS', 3),
('9010118', 'JASVINDAR SINGH SINGARIYA', 'jasvindar', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'deepkesh', 'NO', 'DATA STREAMING', 2),
('9010119', 'JUHI BAGRODIA', 'b.juhi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 't.venkat', 't.venkat', 'NO', 'NETWORKING', 4),
('9010120', 'K TEJA', 'k.teja', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'K TEJA[k.teja]', 'asahu', 'NO', ' COMPUTER ARCHITECTURE', 2),
('9010121', 'KARTIKEY GUPTA', 'kartikey', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-30 00:00:00', '2013-04-11 12:16:56', 'KARTIKEY GUPTA[kartikey]', 'ben', 'NO', 'COMBINATORICS', 2),
('9010122', 'KULDEEP', 'k.kuldeep', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'asahu', 'YES', ' COMPUTER ARCHITECTURE', 3),
('9010123', 'KULKARNI ANAND SUDHIR', 'k.sudhir', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'samit', 'YES', ' HUMAN COMPUTER INTERACTIONS', 3),
('9010124', 'N ESWARA PRASHANTH', 'n.prashanth', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'sajith', 'sajith', 'NO', 'ALGORITHMS', 4),
('9010125', 'N. VISHNU TEJA', 'n.teja', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'N. VISHNU TEJA[n.teja]', 'awekar', 'NO', 'DATA MINING', 4),
('9010126', 'NAGA ROHIT S', 's.naga', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sukumar', 'sukumar', 'YES', 'NETWORKING', 5),
('9010127', 'NAGENDRA RAM', 'nagendra', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'NAGENDRA RAM[nagendra]', 'pkdas', 'NO', ' SIGNAL PROCESSING', 5),
('9010128', 'NARENDRA KUMAR MEENA', 'm.narendra', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'NARENDRA KUMAR MEENA[m.narendra]', 'hemangee', 'NO', 'COMPUTER ARCHITECTURE', 2),
('9010129', 'NARESH MEHRA', 'n.mehra', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 'MACHINE LEARNING', 1),
('9010130', 'PARAG AGRAWAL', 'a.parag', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'PARAG AGRAWAL[a.parag]', 'saradhi', 'NO', 'MACHINE LEARNING', 2),
('9010131', 'PASUNURI RAHUL', 'pasunuri', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PASUNURI RAHUL[pasunuri]', 'pkdas', 'NO', ' SIGNAL PROCESSING', 3),
('9010132', 'POOJA DUBEY', 'pooja', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'gb', 'gb', 'YES', 'OPERATING SYSTEMS', 4),
('9010133', 'PRAGYA PARUL', 'pragya', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PRAGYA PARUL[pragya]', 'dgoswami', 'NO', 'SOFTWARE ENGINEERING', 2),
('9010134', 'PRAVIN KUMAR CHATURVEDI', 'c.pravin', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'santosh_biswas', 'santosh_biswas', 'YES', ' NETWORKING', 5),
('9010135', 'PURWAR SANKETH KISHAN', 'purwar', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PURWAR SANKETH KISHAN[purwar]', 'santosh_biswas', 'NO', ' NETWORKING', 1),
('9010136', 'RAHUL BHATNAGAR', 'rahul.br', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-21 00:00:00', '2013-04-11 12:16:56', 'RAHUL BHATNAGAR[rahul.br]', 'dgoswami', 'NO', 'SOFTWARE ENGINEERING', 3),
('9010137', 'RAJAT KHANDUJA', 'k.rajat', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RAJAT KHANDUJA[k.rajat]', 'anand.ashish', 'NO', 'COMPUTATIONAL BIOLOGY', 2),
('9010138', 'RAJKUMAR SINGH', 's.rajkumar', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'sajith', 'sajith', 'NO', 'ALGORITHMS', 5),
('9010139', 'RAMAN ANURAG', 'r.anurag', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'ranbir', 'ranbir', 'NO', 'MACHINE LEARNING', 3),
('9010140', 'RAVI SETHIA', 'r.sethia', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RAVI SETHIA[r.sethia]', 'samit', 'NO', ' HUMAN COMPUTER INTERACTIONS', 4),
('9010141', 'RISHI BARUA', 'r.barua', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-17 00:00:00', '2013-04-11 12:16:56', 'saradhi', 'saradhi', 'NO', 'MACHINE LEARNING', 5),
('9010142', 'RISHI RAJ BORAH', 'r.borah', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'RISHI RAJ BORAH[r.borah]', 'arijit', 'NO', 'STEGANOGRAPHY', 2),
('9010143', 'ROHIT RAJ', 'rohit.raj', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ROHIT RAJ[rohit.raj]', 'santosh_biswas', 'NO', ' NETWORKING', 1),
('9010144', 'ROVIN BHANDARI', 'rovin', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ROVIN BHANDARI[rovin]', 'svrao', 'NO', 'COMPUTATIONAL GEOMETRY', 4),
('9010145', 'SAURABH SAXENA', 'saurabh.s', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-11 12:16:56', 'pbhaduri', 'pbhaduri', 'YES', 'EMBEDDED SYSTEMS', 2),
('9010146', 'SAURABH SINGLA', 's.singla', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SAURABH SINGLA[s.singla]', 'gb', 'NO', 'OPERATING SYSTEMS', 3),
('9010147', 'SHAH AKHILESH KAILASHCHANDRA', 'shah', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SHAH AKHILESH KAILASHCHANDRA[shah]', 'gb', 'NO', 'OPERATING SYSTEMS', 4),
('9010148', 'SHUBHAM TRIPATHI', 't.shubham', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SHUBHAM TRIPATHI[t.shubham]', 'anand.ashish', 'NO', 'COMPUTATIONAL BIOLOGY', 5),
('9010149', 'SHYAM SUNDER SINGH', 'shyam.ss', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-14 00:00:00', '2013-04-11 12:16:56', 'SHYAM SUNDER SINGH[shyam.ss]', 'ranbir', 'NO', 'MACHINE LEARNING', 1),
('9010150', 'SNEHLATA', 'snehlata', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SNEHLATA[snehlata]', 'awekar', 'NO', 'DATA MINING', 2),
('9010151', 'SRIKAKULAPU SATYA VARA PRASAD', 'srikakulapu', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'jatin', 'NO', ' VLSI DESIGN', 3),
('9010152', 'SUHAIL SHERIF', 'suhail', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'ben', 'NO', 'COMBINATORICS', 3),
('9010153', 'SUMEET KUMAR SINGH', 's.sumeet', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-16 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'awekar', 'NO', 'DATA MINING', 4),
('9010154', 'SUNIL KUMAR', 'sunil.k', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SUNIL KUMAR[sunil.k]', 'asahu', 'NO', ' COMPUTER ARCHITECTURE', 4),
('9010155', 'SUNIL RATNU', 's.ratnu', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-18 00:00:00', '2013-04-11 12:16:56', 'SUNIL RATNU[s.ratnu]', 'pinaki', 'YES', 'COMPUTATIONAL GEOMETRY', 5),
('9010156', 'TEJINDER SINGH', 'tejinder', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'pkdas', 'pkdas', 'YES', ' SIGNAL PROCESSING', 5),
('9010157', 'VIBHUTI KUMAR', 'vibhuti', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-15 00:00:00', '2013-04-12 00:00:00', 'VIBHUTI KUMAR[vibhuti]', 'hemangee', 'NO', 'COMPUTER ARCHITECTURE', 3),
('9010158', 'VIRENDRA KUMAR', 'k.virendra', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'VIRENDRA KUMAR[k.virendra]', 'saradhi', 'YES', 'MACHINE LEARNING', 1),
('9010159', 'VULLI KRISHNA CHAITANYA', 'vulli', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'NO', NULL, '2013-04-11 12:16:56', 'Main Admin User[thesisadmin]', 'svrao', 'NO', 'COMPUTATIONAL GEOMETRY', 2),
('9010160', 'ANIK CHATTOPADHYAY', 'anik', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'ANIK CHATTOPADHYAY[anik]', 'pbhaduri', 'NO', 'EMBEDDED SYSTEMS', 3),
('9010161', 'PRANAV GUPTA', 'g.pranav', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'PRANAV GUPTA[g.pranav]', 'anand.ashish', 'NO', 'COMPUTATIONAL BIOLOGY', 4),
('9010162', 'SIDHARTH CHANDRASHEKHAR PARDESHI', 's.pardeshi', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'SIDHARTH CHANDRASHEKHAR PARDESHI[s.pardeshi]', 'svrao', 'NO', 'COMPUTATIONAL GEOMETRY', 5),
('9010163', 'KARRI SWATHI', 'karri', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'KARRI SWATHI[karri]', 'arijit', 'NO', 'STEGANOGRAPHY', 3),
('9010164', 'BHARAT KHATRI', 'b.khatri', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-21 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'anand.ashish', 'NO', 'COMPUTATIONAL BIOLOGY', 4),
('9010165', 'AYUSH PAROLIA', 'a.parolia', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'sbnair', 'NO', ' INTELLIGENT SYSTEMS', 5),
('9010166', 'GUNDLAPALLI SRINIVAS', 'gundlapalli', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'GUNDLAPALLI SRINIVAS[gundlapalli]', 'svrao', 'NO', 'COMPUTATIONAL GEOMETRY', 4),
('9010167', 'VIKRAM KUMAR GOYAL', 'v.goyal', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'thesisadmin', 'pkdas', 'YES', ' SIGNAL PROCESSING', 5),
('9010168', 'BEHARA MANI SHYAM PATRO', 'behara', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'BT', 'YES', '2013-04-19 00:00:00', '2013-04-11 12:16:56', 'BEHARA MANI SHYAM PATRO[behara]', 'sbnair', 'NO', ' INTELLIGENT SYSTEMS', 4);

--
-- Triggers `student`
--
DROP TRIGGER IF EXISTS `insert_permission_log`;
DELIMITER //
CREATE TRIGGER `insert_permission_log` AFTER UPDATE ON `student`
 FOR EACH ROW BEGIN
   IF(NEW.permission='YES' AND OLD.permission='NO') THEN
       insert into permission_log(advisor_id,permitted_to,permitted_at)values(NEW.last_modified_by,NEW.user_nm,now());
     
   END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_nm` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(12) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`user_nm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_nm`, `name`, `password`, `role`, `created_at`) VALUES
('shirshendu', 'Shirshendu Das', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'admin', '2011-11-02'),
('thesisadmin', 'Main Admin User', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'admin', '2011-10-31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_log`
--
ALTER TABLE `permission_log`
  ADD CONSTRAINT `permission_log_ibfk_1` FOREIGN KEY (`advisor_id`) REFERENCES `advisor` (`advisor_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_log_ibfk_2` FOREIGN KEY (`permitted_to`) REFERENCES `student` (`user_nm`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_3` FOREIGN KEY (`user_nm`) REFERENCES `student` (`user_nm`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`advisor_id`) REFERENCES `advisor` (`advisor_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
