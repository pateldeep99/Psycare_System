-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 06:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psycare`
--
CREATE DATABASE IF NOT EXISTS `psycare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `psycare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `anxiety_question`
--

CREATE TABLE `anxiety_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anxiety_question`
--

INSERT INTO `anxiety_question` (`question_number`, `question_text`) VALUES
(1, 'Did you ever worry about lots of different things?'),
(2, 'Do you have any trouble in controlling your worries?'),
(3, 'Do you ever get irritable and/or easily annoyed when anxious?'),
(4, 'How often do you worry about how well do you think?'),
(5, 'Do you worry about things that will work in future?'),
(6, 'Did you ever worry about things that happened in past?'),
(7, 'Does your muscle get tense when you are worried or anxious?'),
(8, 'Do you experience any repetitive and persistent thoughts that are upsetting and unwanted to you?'),
(9, 'Did you ever try to avoid social or family gathering in fear of something or someone?'),
(10, 'Do you experience any fear that causes panic, shortness of breath, chest pains,sweating?');

-- --------------------------------------------------------

--
-- Table structure for table `bipolar_question`
--

CREATE TABLE `bipolar_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bipolar_question`
--

INSERT INTO `bipolar_question` (`question_number`, `question_text`) VALUES
(1, 'Do you speak much faster or gets more talkative than usual?'),
(2, 'Do you feel that you were more active or doing more thing in a particular time than usual?'),
(3, 'Do you ever get into the mood where you feel much speeded up or irritable?'),
(4, 'Have you ever felt that at same time you feel both high (elated) and low (depressed)?'),
(5, 'Does your confidence range from great self-doubt to equally great overconfidence?'),
(6, 'Do you believe that the quality and quantity of your work has great variation?'),
(7, 'Do you notice that you are getting angry or hostile for no reason?'),
(8, 'Have you think you are mentally dull and other time you think very creatively?'),
(9, 'Do you feel that you want to be alone with your thoughts?'),
(10, 'Do you feel that you show much crying nature and another times you laugh and joke excessively?');

-- --------------------------------------------------------

--
-- Table structure for table `commontest_question`
--

CREATE TABLE `commontest_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commontest_question`
--

INSERT INTO `commontest_question` (`question_number`, `question_text`) VALUES
(1, 'Are you getting any problem in concentration on a particular thing, such as reading newspaper or watching television?'),
(2, 'Are you getting easily annoyed on small things?'),
(3, 'Are you concerned too much on small things? '),
(4, 'Sometimes are you getting more talkative or speaks faster than you speak normally?'),
(5, 'Do you have any multiple natures that sometimes you show tearfulness and crying and other time you laugh and joke excessively?'),
(6, 'Did you find out that you have poor decision making, such as purchase time for useless thing or had taken multiple wrong decision?'),
(7, 'How much time do you suffer from phobia that you have to do on your daily basis?'),
(8, 'Did you experience any repetitive and persistent thoughts/dreams that are upsetting and unwanted?'),
(9, 'Do you ever try to avoid any places or socially in fear of something? '),
(10, 'Did you ever feel that you have paranoia?'),
(11, 'Do you have any history of attempt of suicide or self-harm, such as cutting, burning or hitting to any part of your body?'),
(12, 'Did you ever lost yourself, such as can’t sense or imaging yourself, who are you or in what you believe?'),
(13, 'How much time do you concerned that people are watching at you while eating?'),
(14, 'Do you ever have felt guilty of eaten something that will make impact on your shape or weight of your body?'),
(15, 'How often do you feel uncomfortable seeing your yourself (e.g., seeing yourself in the mirror, a window reflection, etc.)?'),
(16, 'Do you any trouble in speaking the words that you want to say, or you may able to speak but other people have told you that what you spoke was incoherent?'),
(17, 'Do you find any trouble in distinguishing your experience or perceive may be real or imagination / dreams? '),
(18, 'Did you believe that you have any special or supernatural gifts beyond your natural talents? '),
(19, 'Did you worry about things that have already happened in the past?'),
(20, 'Have you avoided any activities or situation because of some bad or stressful experience from past?');

-- --------------------------------------------------------

--
-- Table structure for table `depression_question`
--

CREATE TABLE `depression_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depression_question`
--

INSERT INTO `depression_question` (`question_number`, `question_text`) VALUES
(1, 'Do you suffer from sadness, hopeless, or emptiness like felling?'),
(2, 'Do you find it hard to find pleasure in activities you used to enjoy?'),
(3, 'How often have you been bothered that you have poor appetite, weight loss, or overeating?'),
(4, 'Do you notice that you are lacking in energy or motivation?'),
(5, 'Are you facing Trouble in relaxing?'),
(6, 'Do you find any trouble in getting sleep or waking up in morning?'),
(7, 'Have you had thoughts about harming yourself or ending your life?'),
(8, 'Do you feel guilty or tearful for no reason?'),
(9, 'How often have you been bothered by moving or speaking so slowly or so fastly?'),
(10, 'Do you find yourself avoiding your friends and family?');

-- --------------------------------------------------------

--
-- Table structure for table `eating_question`
--

CREATE TABLE `eating_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eating_question`
--

INSERT INTO `eating_question` (`question_number`, `question_text`) VALUES
(1, 'Do you feel that you should have flat stomach?'),
(2, 'Do you feel that you are thin or having skinny body?'),
(3, 'Do you think that your shape or weight of your body affects your thinking or judge or judge yourself?'),
(4, 'How many times you have gone fasting or without eating anything for a long time of period to maintain your shape or weight of your body?'),
(5, 'Do you feel uncomfortable seeing yourself in front of mirror?'),
(6, 'Do you have fear of losing control in eating?'),
(7, 'How often do you eat without knowing others?'),
(8, 'How often do you think that your weight or shape of your body is not proper?'),
(9, 'How many times you are aiming to have an empty stomach in influence of maintaining shape or weight of your body?'),
(10, 'Do you feel that you are not able to concentrate on things that you are interested in, because of your shape or size of your body?');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `score` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`name`, `type`, `score`) VALUES
('user1', 'common', '21 %'),
('user2', 'common', '41 %'),
('user3', 'common', '21 %'),
('user4', 'common', '75 %'),
('user5', 'depression', '62.5 %'),
('user1', 'common', '25 %'),
('user2', 'bipolar', '65 %'),
('user3', 'anxiety', '47.5 %'),
('user5', 'personality', '60 %'),
('user4', 'eating', '62.5 %'),
('user5', 'psychotic', '50 %'),
('user3', 'post-traumatic', '57.5 %');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `option` text NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option`, `value`) VALUES
(1, 'Never', '0.5'),
(2, 'Rarely', '1'),
(3, 'Sometimes', '1.5'),
(4, 'Always', '2');

-- --------------------------------------------------------

--
-- Table structure for table `personality_question`
--

CREATE TABLE `personality_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personality_question`
--

INSERT INTO `personality_question` (`question_number`, `question_text`) VALUES
(1, 'Do you ever get distrust or suspiciousness of other people?'),
(2, 'How often do you experience a pattern of detachment form social relationship?'),
(3, 'Do you ever feel that you are going to lose your relationship or family?'),
(4, 'Do you ever find yourself having trouble thinking or speaking?'),
(5, 'Do you observe that you frequently gets irritate and aggressive felling?'),
(6, 'How often do you experience a reckless disregard for yourself or people around you?'),
(7, 'How often do you feel chronic emptiness or loneliness?'),
(8, 'Do you ever feel that you are uncomfortable in situation where you does not get center of attention?'),
(9, 'Do you notice that your mood or behavior gets changed according to people comments on you'),
(10, 'Do you often feel indifferent to praise or criticisms from others?');

-- --------------------------------------------------------

--
-- Table structure for table `post_traumatic_question`
--

CREATE TABLE `post_traumatic_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_traumatic_question`
--

INSERT INTO `post_traumatic_question` (`question_number`, `question_text`) VALUES
(1, 'How often do you feeling of repeated, disturbing memories, thoughts, or images of a stressful experience from the past?'),
(2, 'How often do you feel very upset when something reminds you of a stressful experience from your past?'),
(3, 'How many times do you avoid activities or situations because they would remind you your stressful experience from your past?'),
(4, 'Do you feel that you are getting far or cut off from other people?'),
(5, 'Do you ever feel irritable or having angry outbursts?'),
(6, 'Do you ever feel that you have difficulties in concentrating on things?'),
(7, 'How often do you get memories of trauma in mind during unwanted moments?'),
(8, 'How often do you avoid things like places, people, or event that make you think about trauma?'),
(9, 'Have you on edge much more than normal, particularly when there have been other people around?'),
(10, 'How many times you are not able to connect to your emotions such as not being able to laugh or cry, or feel affection for those around you?');

-- --------------------------------------------------------

--
-- Table structure for table `psychotic_question`
--

CREATE TABLE `psychotic_question` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psychotic_question`
--

INSERT INTO `psychotic_question` (`question_number`, `question_text`) VALUES
(1, 'Do you think that you have any trouble in speaking words that you want to say, or you have been told that what you want to say in incoherent/irritable?'),
(2, 'Do you think that you can see or hear things that other people cannot able to see or hear?'),
(3, 'Do you have an experience of being not able to speak completely?'),
(4, 'Do you find any difficulties in distinguishing whether something you had experience or perceive may be real or may a part of your imagination or dream?'),
(5, 'Do you ever heard two or more voice conversing with one another in voices that other people would not able to listen?'),
(6, 'Do you think that other people can read your mind, or you can read other’s mind?'),
(7, 'Do you feel that something interrupts or control your thoughts, feeling or action?'),
(8, 'Do you believe that someone is planning to because you harm, or may be about to because you harm in the near future?'),
(9, 'Do you think sometime you completely get unresponsive emotionally, as if you don’t feel anything?'),
(10, 'Do you have any difficulties in getting yourself organized to complete any kind of daily activities?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'user1', 'user1@gmail.com', 'user@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
