-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 03:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lims`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `IID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`IID`) VALUES
(4),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AID` int(11) NOT NULL,
  `authorName` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AID`, `authorName`) VALUES
(1, 'SLIIT'),
(2, 'Geoffrey P. Hammond'),
(3, 'Uchicago'),
(4, 'Ulla Kirch-Prinz'),
(5, 'J. K. Rowling'),
(6, 'Arthur Conan Doyle');

-- --------------------------------------------------------

--
-- Table structure for table `barrowreturns`
--

CREATE TABLE `barrowreturns` (
  `transactionID` int(11) NOT NULL,
  `submitedDate` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `fine` double(10,2) DEFAULT NULL,
  `issuedDate` date DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `userID` varchar(50) DEFAULT '',
  `IID` int(11) DEFAULT NULL,
  `adminUserID` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barrowreturns`
--

INSERT INTO `barrowreturns` (`transactionID`, `submitedDate`, `status`, `fine`, `issuedDate`, `dueDate`, `userID`, `IID`, `adminUserID`) VALUES
(2, '2021-09-25', 1, 500.00, '2021-09-21', '2021-09-24', '3', 2, '2'),
(6, '2021-10-07', 1, 0.00, '2021-10-05', '2021-10-10', '1', 2, '2'),
(8, NULL, 0, 0.00, '2021-10-09', '2021-10-19', '1', 5, '2');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `IID` int(11) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`IID`, `ISBN`) VALUES
(73, '6545454545'),
(74, '5454545454'),
(75, '454545452'),
(76, '45454542'),
(77, '424554545'),
(78, '57485754'),
(79, '5757424575875'),
(80, '564564556456'),
(81, '45646423424'),
(82, '646464646'),
(83, '64645454545'),
(84, '6464545456'),
(85, '64674545456'),
(86, '54544545'),
(87, '878578975457567');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CID` int(11) NOT NULL,
  `catName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CID`, `catName`) VALUES
(1, 'Science Fiction (Sci-Fi)'),
(2, 'Computer Science'),
(3, 'Mathematics'),
(4, 'Programming/Scripting Books'),
(5, 'Mid Exam'),
(6, 'Civil Engineering'),
(7, 'Pleasure'),
(11, 'Business'),
(12, 'Neture'),
(13, 'Final Exam'),
(14, 'health'),
(15, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `IID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `itemImgLoc` varchar(500) DEFAULT NULL,
  `pdfPath` varchar(500) DEFAULT NULL,
  `free` int(2) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Published_Date` date DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `totalView` int(11) DEFAULT NULL,
  `totalDownload` int(11) DEFAULT NULL,
  `pubID` int(11) DEFAULT NULL,
  `A_ID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`IID`, `Name`, `itemImgLoc`, `pdfPath`, `free`, `Date`, `Published_Date`, `Description`, `totalView`, `totalDownload`, `pubID`, `A_ID`, `CID`) VALUES
(1, 'English for Academic Purposes - Y1S2', './img/past_paper/p2016.jpg', './pdf/pastpapers/1.pdf', 1, '2021-08-23', '2021-08-20', 'Pastpapers IT1080', 5, 1, 1, 1, 5),
(2, 'Proceedings of the Institution of Civil Engineers - Energy', './img/pastpapers/123d.png', './pdf/journal/1.pdf', 0, '2021-09-25', '2021-08-03', 'Proceedings of the Institution of Civil Engineers', 10, 2, 2, 2, 6),
(3, 'Advances in Cement Research', './img/article/a2.jpg', './pdf/journal/2.pdf', 1, '2021-09-25', '2021-09-09', 'Optimising the setting behaviour of accelerated cement paste containing poly(AANa-co-DMAA) Xiaolei Zhang, Luping Zeng, Min Qiao, Wei Wang, Jian Chen, Jinxiang Hong, Qianping Ran 33(9), pp. 378–385 Published online:September 20, 2021', 50, 20, 2, 2, 6),
(4, 'A measure of pleasure', './img/article/a2.jpg', './pdf/articals/1.pdf', 1, '2021-09-25', '2021-07-05', 'For nearly two decades, psychologist Andrea King has followed a group of social drinkers to find out why only some develop alcohol use disorder.', 150, 10, 3, 3, 7),
(5, 'A complete guide to programming in C++', './img/article/a2.jpg', './pdf/book/1.pdf', 0, '2021-09-26', '2021-07-20', 'A Complete Guide to Programming in C++ was written for both students interested in learning the C++ programming language from scratch, and for advanced C++ programmers wishing to enhance their knowledge of C++.', 50, 2, 4, 4, 4),
(6, 'The Effects Of Stress On Business Employees And Programs Offered By Employers To Manage Employee Stress', './img/report/r1.jpg', './pdf/report/pdf0001.pdf', 1, '2021-10-08', '2021-09-06', 'Today, many organizations and employees are experiencing the effects of stress on work performance. The effects of stress can be either positive or negative.', 54, 20, 1, 1, 11),
(7, 'COVID-19', './img/report/r2.jpg', './pdf/report/pdf0001.pdf', 1, '2021-10-06', '2021-08-03', 'Contributions to the Collection are welcome on a rolling basis.', 78, 35, 2, 1, 2),
(8, 'Expanding our scope to engineering', './img/report/r3.jpg', './pdf/report/pdf0001.pdf', 0, '2021-10-01', '2021-05-11', 'The world is changing faster than ever. Breakthroughs in areas from artificial intelligence to biotechnologies are now permeating our daily lives at a relentless pace', 45, 5, 3, 1, 6),
(9, 'A modeling study', './img/report/r4.jpg', './pdf/report/pdf0001.pdf', 0, '2021-10-05', '2021-06-07', 'This study represents the investigation of In2S3 thin films as an electron transport layer in the CuBaSn(S, Se)-CBT(S, Se) solar cells, which have been deposited using the Chemical Spray Pyrolysis method', 88, 56, 1, 2, 1),
(10, 'Population-scale identification of differential adverse events before and during a pandemic', './img/report/r5.jpg', './pdf/report/pdf0001.pdf', 1, '2021-10-04', '2021-02-09', 'dverse patient safety events, unintended injuries resulting from medical therapy, were associated with 110,000 deaths in the United States in 2019', 585, 555, 1, 3, 7),
(11, 'National parochialism is ubiquitous across 42 nations around the world', './img/report/r6.jpg', './pdf/report/pdf0001.pdf', 1, '2021-10-05', '2021-04-06', 'Cooperation within and across borders is of paramount importance for the provision of public goods. Parochialism – the tendency to cooperate more with ingroup than outgroup members – limits contributions to global public goods.', 74, 10, 1, 4, 7),
(12, 'Natural variation in a type-A response regulator confers maize chilling tolerance', './img/report/r7.jpg', './pdf/report/pdf0001.pdf', 0, '2021-10-06', '2021-07-05', 'Maize (Zea mays L.) is a cold-sensitive species that often faces chilling stress, which adversely affects growth and reproduction. However, the genetic basis of low-temperature adaptation in maize remains unclear.', 75, 44, 1, 2, 2),
(13, 'High-efficiency broadband achromatic metalens for near-IR biological imaging window', './img/report/r8.jpg', './pdf/report/pdf0001.pdf', 0, '2021-10-06', '2021-09-06', 'Over the past years, broadband achromatic metalenses have been intensively studied due to their great potential for applications in consumer and industry products.', 22, 20, 1, 4, 1),
(14, 'Self-regulated co-assembly of soft and hard nanoparticles', './img/report/r9.jpg', './pdf/report/pdf0001.pdf', 0, '2021-10-04', '2021-10-02', 'Controlled self-assembly of colloidal particles into predetermined organization facilitates the bottom-up manufacture of artificial materials with designated hierarchies and synergistically integrated functionalities. ', 85, 56, 1, 1, 11),
(15, 'IT1080_EAP_Y1_S2', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-10-02', '2019-10-02', '2019-EAP mid-exam past paper in Year 1, semester 2\r\n', 100, 50, 1, 1, 5),
(16, 'IT1060_SPM_Y1_S2', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-10-02', '2020-10-02', '2020-SPM final-exam past paper in Year 1, semester2', 51, 50, 1, 1, 13),
(17, 'IT1010_MC_Y1_S1', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-10-02', '2018-10-02', '2018-MC mid-exam past paper in Year 1, semester 1', 55, 22, 1, 1, 5),
(32, 'Advances in Cement Research', './img/journal/j3.jpg', './pdf/journal/pdf0001.pdf', 1, '1987-10-06', '1987-10-06', 'CONTENT AVAILABLE:1987\r\nISSN: 0951-7197\r\nEISSN: 1751-7605', 555, 55, 4, 4, 12),
(33, 'Bioinspired, Biomimetic and Nano biomaterials', './img/journal/j4.jpg', './pdf/journal/pdf0001.pdf', 1, '2012-10-17', '2012-10-17', 'CONTENT AVAILABLE:2012\r\nISSN: 2045-9858\r\nEISSN: 2045-9866', 65, 4, 1, 1, 11),
(34, 'Bridge Engineering', './img/journal/j5.jpg', './pdf/journal/pdf0001.pdf', 1, '2003-10-15', '2003-10-15', 'CONTENT AVAILABLE:2003\r\nISSN: 1478-4637\r\nEISSN: 1751-7664', 54, 5, 2, 2, 6),
(35, 'Civil Engineering', './img/journal/j6.jpg', './pdf/journal/pdf0001.pdf', 0, '1992-10-20', '1992-10-20', 'CONTENT AVAILABLE:1992\r\nISSN: 0965-089X\r\nEISSN: 1751-7672', 54, 44, 3, 3, 6),
(36, 'Civil Engineering Innovation', './img/journal/j7.jpg', './pdf/journal/pdf0001.pdf', 1, '2007-10-10', '2007-10-10', 'CONTENT AVAILABLE:2007-2009\r\nISSN: 1755-0890\r\nEISSN: 1755-0904', 444, 222, 3, 3, 6),
(37, 'The Institution of Civil Engineers Construction Law Quarterly', './img/journal/j8.jpg', './pdf/journal/pdf0001.pdf', 1, '2011-10-20', '2011-10-20', 'CONTENT AVAILABLE:2011-2015\r\nISSN: 2047-1424\r\nEISSN: 2047-1432', 424, 24, 2, 2, 6),
(38, '\r\nConstruction Materials', './img/journal/j9.jpg', './pdf/journal/pdf0001.pdf', 1, '2006-10-24', '2006-10-24', 'CONTENT AVAILABLE:2006\r\nISSN: 1747-650X\r\nEISSN: 1747-6518', 242, 42, 1, 1, 6),
(39, 'IT14050_OOC_Y4_S2', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-08-16', '2016-08-16', '2016-OOC final-exam past paper in Year 4, semester 2', 87, 78, 1, 1, 13),
(40, 'IT3090_ISDM_Y3_S2', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-08-12', '2020-08-12', '2020-ISDM mid-exam past paper in Year 3, semester 2', 567, 75, 1, 1, 5),
(41, 'IT4010_IP_Y4_S2', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-10-02', '2019-10-02', '2019-IP final-exam past paper in Year 4, semester 2', 454, 88, 1, 1, 13),
(42, 'IT3300_IWT_Y3_S2', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-10-02', '2018-10-02', '2018-IWT final-exam past paper in Year 3, semester 2', 455, 444, 1, 1, 13),
(43, 'IT1050_OOC_Y1_S2', './img/past_paper/p2017.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2017-10-17', '2017-10-17', '2017-OOC mid-exam past paper in Year 1, semester 2', 56, 55, 1, 1, 5),
(44, 'IT4030_MC_Y4_S2', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-10-02', '2016-10-02', '2016-MC final-exam past paper in Year 4, semester 2', 55, 55, 1, 1, 13),
(45, 'Russian Laureate Celebrates Nobel Peace Prize Award', './img/article/a2.jpg', './pdf/article/pdf0001.pdf', 1, '2021-10-11', '2021-09-20', 'The Norwegian Nobel Committee awarded the Peace Prize to Dmitri A. Muratov', 881, 259, 1, 1, 11),
(46, 'Aftermath of Deadly Mosque Bombing in Afghanistan', './img/article/a3.jpg', './pdf/article/pdf0001.pdf', 0, '2021-07-26', '2020-10-20', 'The attack, carried out by an Islamic State suicide bomber at a Shiite mosque in Kunduz, killed dozens of worshipers.', 878, 78, 2, 2, 12),
(47, 'Biden Stresses Low Unemployment Rate After Weak Jobs ', './img/article/a4.jpg', './pdf/article/pdf0001.pdf', 1, '2016-10-02', '2015-10-13', 'The Labor Department reported that the economy had added 194,000 jobs in September, well below the half-million forecasted.', 787, 57, 1, 1, 11),
(48, '‘Personal Sacrifices Are Worth It,’ Says Nobel Peace Prize Winner', './img/article/a5.jpg', './pdf/article/pdf0001.pdf', 1, '2021-10-11', '2021-05-03', 'Maria Ressa, one of two journalists awarded the Nobel Peace Prize', 287, 45, 2, 2, 11),
(49, '‘No Time to Die’ | Anatomy of a Scene', './img/article/a6.jpg', './pdf/article/pdf0001.pdf', 0, '2019-07-16', '2018-06-05', 'The director Cary Joji Fukunaga narrates an action sequence from his film featuring Daniel Craig.', 452, 45, 1, 2, 2),
(50, 'Senate Votes to Raise the Debt Ceiling', './img/article/a7.jpg', './pdf/article/pdf0001.pdf', 0, '2012-10-08', '2012-09-04', 'In a 50-to-48 vote, the Senate passed legislation to raise the debt ceiling through early December.', 225, 222, 1, 4, 2),
(51, 'Heavy Rain Floods Parts of Alabama', './img/article/a8.jpg', './pdf/article/pdf0001.pdf', 1, '2019-10-15', '2019-08-06', 'Slow-moving thunderstorms drenched parts of northern and central Alabama, flooding houses and stranding drivers in their cars.', 25, 2, 3, 3, 6),
(52, 'Biden Urges Private Employers to Require Covid Vaccines', './img/article/a9.jpg', './pdf/article/pdf0001.pdf', 0, '2018-10-08', '2018-10-02', 'President Biden encouraged large private companies to mandate coronavirus vaccinations for their workers', 252, 25, 3, 3, 14),
(53, 'IT3030_MC_Y3_S1', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-10-12', '2020-10-12', '2020-MC final-exam past paper in Year 3, semester 1', 55, 55, 1, 1, 13),
(54, 'IT2080_EAP_Y2_S1', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-10-12', '2019-10-12', '2019-EAP mid-exam past paper in Year 2, semester 1', 457, 44, 1, 1, 5),
(55, 'IT14050_OOC_Y4_S1', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-10-12', '2018-10-12', '2018-OOC mid-exam past paper in Year 4, semester 1', 545, 54, 1, 1, 5),
(56, 'IT1060_SPM_Y1_S1', './img/past_paper/p2017.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2017-10-12', '2017-10-12', '2017-SPM final-exam past paper in Year 1, semester 1', 577, 77, 1, 1, 13),
(57, 'IT13040_CS_Y3_S1', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-10-12', '2016-10-12', '2016-CS mid-exam past paper in Year 3, semester 1', 77, 77, 1, 1, 5),
(58, 'IT4080_EAP_Y4_S2', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-10-06', '2020-10-06', '2020-EAP final-exam past paper in Year 4, semester 2', 457, 57, 1, 1, 5),
(59, 'IT4400_IWT_Y4_S1', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-10-06', '2020-10-06', '2020-IWT mid-exam past paper in Year 4, semester 1', 87, 7787, 1, 1, 5),
(60, 'IT4050_OOC_Y4_S2', './img/past_paper/p2020.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2020-10-06', '2020-10-06', '2020-OOC final-exam past paper in Year 4, semester 2', 878, 78, 1, 1, 13),
(61, 'IT1090_ISDM_Y1_S2', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-09-11', '2019-09-11', '2019-ISDM final-exam past paper in Year 1, semester 2', 45, 44, 1, 1, 13),
(62, 'IT3040_CS_Y3_S2', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-09-11', '2019-09-11', '2019-CS mid-exam past paper in Year 3, semester 2', 44, 4, 1, 1, 5),
(63, 'IT4030_MC_Y4_S1', './img/past_paper/p2019.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2019-09-11', '2019-09-11', '2019-MC final-exam past paper in Year 4, semester 1', 888, 557, 1, 1, 13),
(64, 'IT3060_SPM_Y3_S2', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-08-06', '2018-08-06', '2018-SPM mid-exam past paper in Year 3, semester 2', 666, 55, 1, 1, 5),
(65, 'IT4090_ISDM_Y4_S2', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-08-06', '2018-08-06', '2018-ISDM final-exam past paper in Year 4, semester 2', 75, 55, 1, 1, 13),
(66, 'IT2010_IP_Y2_S2', './img/past_paper/p2018.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2018-08-06', '2018-08-06', '2018-IP mid-exam past paper in Year 2, semester 2', 75, 55, 1, 1, 5),
(67, 'IT2040_CS_Y2_S1', './img/past_paper/p2017.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2017-08-07', '2017-08-07', '2017-CS final-exam past paper in Year 2, semester 1', 757, 55, 1, 1, 13),
(68, 'IT3300_IWT_Y3_S1', './img/past_paper/p2017.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2017-08-07', '2017-08-07', '2017-IWT mid-exam past paper in Year 3, semester 1', 444, 55, 1, 1, 5),
(69, 'IT1010_IP_Y1_S1', './img/past_paper/p2017.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2017-08-07', '2017-08-07', '2017-IP final-exam past paper in Year 1, semester 1', 545, 545, 1, 1, 13),
(70, 'IT4090_ISDM_Y4_S2', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-06-13', '2016-06-13', '2016-ISDM mid-exam past paper in Year 4, semester 2', 658, 555, 1, 1, 13),
(71, 'IT3060_SPM_Y3_S2', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-06-13', '2016-06-13', '2016-SPM final-exam past paper in Year 3, semester 2', 455, 55, 1, 1, 13),
(72, 'IT1080_EAP_Y1_S1', './img/past_paper/p2016.jpg', './pdf/past_paper/pdf0001.pdf', 0, '2016-06-13', '2016-06-13', '2016-EAP mid-exam past paper in Year 1, semester 1', 878, 877, 1, 1, 5),
(73, ' Harry Potter and the Philosopher\'s Stone ', './img/book/hp1.jpg', './pdf/book/pdf0001.pdf', 1, '2020-10-19', '1997-10-13', 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling.', 855, 554, 5, 5, 15),
(74, 'Harry Potter and the Chamber of Secrets ', './img/book/hp2.jpg', './pdf/book/pdf0001.pdf', 1, '2020-10-19', '1998-10-13', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series.', 545, 55, 5, 5, 15),
(75, 'Harry Potter and the Prisoner of Azkaban ', './img/book/hp3.jpg', './pdf/book/pdf0001.pdf', 1, '2020-10-19', '1999-10-13', 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry.', 554, 55, 5, 5, 15),
(76, 'Harry Potter and the Goblet of Fire ', './img/book/hp4.jpg', './pdf/book/pdf0001.pdf', 0, '2020-10-19', '2000-10-13', 'Harry Potter and the Goblet of Fire is a fantasy novel written by British author J. K. Rowling and the fourth novel in the Harry Potter series.', 787, 222, 5, 5, 15),
(77, 'Harry Potter and the Order of the Phoenix ', './img/book/hp5.jpg', './pdf/book/pdf0001.pdf', 0, '2020-10-19', '2003-10-13', 'Harry Potter and the Order of the Phoenix is a fantasy novel written by British author J. K. Rowling and the fifth novel in the Harry Potter series.', 787, 87, 5, 5, 15),
(78, 'Harry Potter and the Half-Blood Prince ', './img/book/hp6.jpg', './pdf/book/pdf0001.pdf', 0, '2020-10-19', '2005-10-13', 'Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J.K. Rowling and the sixth and penultimate novel in the Harry Potter series', 757, 722, 5, 5, 15),
(79, 'Harry Potter and the Deathly Hallows  ', './img/book/hp7.jpg', './pdf/book/pdf0001.pdf', 0, '2020-10-19', '2017-10-13', 'Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series. It was released on 21 July 2007 in the United Kingdom by Bloomsbury Publishing, in the United States by Scholastic, and in Canada by Raincoast Books.', 229, 224, 5, 5, 15),
(80, 'A Study in Scarlet', './img/book/sh1.jpg', './pdf/book/pdf0001.pdf', 1, '2012-10-09', '1887-10-09', 'A Study in Scarlet is an 1887 detective novel written by Arthur Conan Doyle. The story marks the first appearance of Sherlock Holmes and Dr. Watson, who would become the most famous detective duo in human history.', 545, 57, 6, 6, 15),
(81, 'A Study in Scarlet-Uno Studio in Rosso', './img/book/sh2.jpg', './pdf/book/pdf0001.pdf', 1, '2012-10-09', '1887-10-09', 'Uno studio in rosso (titolo originale \"A Study in Scarlet\") è il primo romanzo di Sir Arthur Conan Doyle della serie delle avventure del celebre detective Sherlock Holmes. Fu pubblicato nel 1887, e vi fu presentata la coppia più celebre della letteratura investigativa: Holmes e Watson.', 755, 55, 6, 6, 15),
(82, 'The Sign of the Four', './img/book/sh3.jpg', './pdf/book/pdf0001.pdf', 1, '2012-10-09', '1890-10-09', 'The Sign of the Four, also called The Sign of Four, is the second novel featuring Sherlock Holmes written by Sir Arthur Conan Doyle. Doyle wrote four novels and 56 short stories featuring the fictional detective.', 575, 57, 6, 6, 15),
(83, 'The Sign of the Four(Sherlock Holmes #2) Illustrated', './img/book/sh4.jpg', './pdf/book/pdf0001.pdf', 1, '2021-10-09', '2020-10-09', '\"The Sign of the Four\" is Sir Arthur Conan Doyle\'s follow-up novel to his immensely successful \"A Study in Scarlet\", where we first meet two of the most famous literary detectives of all time, Sherlock Holmes and Dr. Watson. \"The Sign of the Four\", first published in 1890', 757, 575, 6, 6, 15),
(84, 'The Valley of Fear', './img/book/sh5.jpg', './pdf/book/pdf0001.pdf', 0, '2012-10-09', '1915-10-09', 'The Valley of Fear is the fourth and final Sherlock Holmes novel by Sir Arthur Conan Doyle. It is loosely based on the Molly Maguires and Pinkerton agent James McParland. The story was first published in the Strand Magazine between September 1914 and May 1915', 575, 75, 6, 6, 15),
(85, 'The Adventures of Sherlock Holmes', './img/book/sh6.jpg', './pdf/book/pdf0001.pdf', 0, '2012-10-09', '1892-10-09', 'The Adventures of Sherlock Holmes is a collection of twelve short stories by Arthur Conan Doyle, first published on 14 October 1892.', 555, 55, 6, 6, 15),
(86, 'The Return of Sherlock Holmes', './img/book/sh7.jpg', './pdf/book/pdf0001.pdf', 0, '2012-10-09', '1905-10-09', 'The Return of Sherlock Holmes is a 1905 collection of 13 Sherlock Holmes stories, originally published in 1903–1904, by Arthur Conan Doyle. The stories were published in the Strand Magazine in Britain and Collier\'s in the United States', 566, 55, 6, 6, 15),
(87, 'The Case-Book of Sherlock Holmes', './img/book/sh8.jpg', './pdf/book/pdf0001.pdf', 0, '2012-10-09', '1927-10-09', 'The Case-Book of Sherlock Holmes is the final set of twelve Sherlock Holmes short stories by Arthur Conan Doyle first published in the Strand Magazine between October 1921 and April 1927', 552, 52, 6, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `IID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`IID`) VALUES
(2),
(3),
(32),
(33),
(34),
(35),
(36),
(37),
(38);

-- --------------------------------------------------------

--
-- Table structure for table `pastpaper`
--

CREATE TABLE `pastpaper` (
  `IID` int(11) NOT NULL,
  `module` varchar(200) DEFAULT NULL,
  `Semester` int(2) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastpaper`
--

INSERT INTO `pastpaper` (`IID`, `module`, `Semester`, `Year`) VALUES
(1, 'English for Academic Purposes - IT1080 ', 2, 'Y1'),
(15, 'English for Academic Purposes - IT1080', 2, 'Y1'),
(16, 'Software Process Modeling - IT1060', 2, 'Y1'),
(17, 'Mathematics for Computing - IT1030', 1, 'Y1'),
(39, 'Object Oriented Concepts - IT4050 ', 2, 'Y4'),
(40, 'Information Systems & Data Modeling - IT3090 ', 2, 'Y3'),
(41, 'Introduction to Programming - IT4010 ', 2, 'Y4'),
(42, 'Internet & Web Technologies - IT3300', 2, 'Y3'),
(43, 'Object Oriented Concepts - IT1050 ', 2, 'Y1'),
(44, 'Mathematics for Computing - IT4030 ', 2, 'Y4'),
(53, 'Mathematics for Computing - IT3030 ', 1, 'Y3'),
(54, 'English for Academic Purposes - IT2080 ', 1, 'Y2'),
(55, 'Object Oriented Concepts - IT4050 ', 1, 'Y4'),
(56, 'Software Process Modeling - IT1060 ', 1, 'Y1'),
(57, 'Communication Skills - IT3040 ', 1, 'Y3'),
(58, 'English for Academic Purposes - IT4080 ', 2, 'Y4'),
(59, 'Internet & Web Technologies - IT4400 ', 1, 'Y4'),
(60, 'Object Oriented Concepts - IT4050 ', 2, 'Y4'),
(61, 'Information Systems & Data Modeling - IT1090 ', 2, 'Y1'),
(62, 'Communication Skills - IT3040 ', 2, 'Y3'),
(63, 'Mathematics for Computing - IT4030', 1, 'Y4'),
(64, 'Software Process Modeling - IT1060', 2, 'Y3'),
(65, 'Information Systems & Data Modeling - IT1090', 2, 'Y4'),
(66, 'Introduction to Programming - IT1010', 2, 'Y2'),
(67, 'Communication Skills - IT1040', 1, 'Y2'),
(68, 'Internet & Web Technologies - IT1100', 1, 'Y3'),
(69, 'Introduction to Programming - IT1010', 1, 'Y1'),
(70, 'Information Systems & Data Modeling - IT1090', 2, 'Y4'),
(71, 'Software Process Modeling - IT1060', 2, 'Y3'),
(72, 'English for Academic Purposes - IT1080', 1, 'Y1');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pubID` int(11) NOT NULL,
  `publisherName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pubID`, `publisherName`) VALUES
(1, 'SLIIT'),
(2, 'Geoffrey P. Hammond'),
(3, 'Uchicago'),
(4, 'Ulla Kirch-Prinz'),
(5, 'J. K. Rowling'),
(6, 'John Murray');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `IID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`IID`) VALUES
(4),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14);

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `revID` int(11) NOT NULL,
  `reserveDate` date DEFAULT NULL,
  `userID` varchar(50) DEFAULT '',
  `IID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`revID`, `reserveDate`, `userID`, `IID`) VALUES
(1, '2021-09-30', '1', 4),
(2, '2021-10-03', '4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `NameWithInitial` varchar(200) DEFAULT NULL,
  `profileImg` varchar(500) DEFAULT NULL,
  `memberValid` int(2) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `userType` int(2) DEFAULT 0,
  `NIC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `phoneNumber`, `email`, `FName`, `LName`, `NameWithInitial`, `profileImg`, `memberValid`, `Password`, `DateOfBirth`, `Address`, `userType`, `NIC`) VALUES
('1', '0713501969', 'it21117664@my.sliit.lk', 'Ranush', 'Bandara', 'M. M. P. R. M. Bandara', './img/avatar/2.jpg', 1, '12345678', '2000-11-12', 'No 22, Isipathana Mawatha, Polonnaruwa.', 1, NULL),
('2', '0115555555', 'it21114526@my.sliit.lk', 'Sharaf', 'Mawjood', 'S. M. Mawjood', './img/avatar/1234.jpg', 1, '987654321', '1999-07-07', '623/ 8A, Rajagiriya Gardens, Nawala Road, Rajagiriya', 1, NULL),
('3', '0763995297', 'it21106156@my.sliit.lk', 'pasindP', 'Divyanjana', 'U. D. P. S. Divyanjana', './img/avatar/1234.jpg', 1, '145752', '2000-09-27', 'No.19/A,Niwandama, Ja-ela', 0, NULL),
('4', '0112255447', 'it27774874@my.sliit.lk', 'Pasindu', 'Shehan', 'R. O. P. Shehan', './img/avatar/1234.jpg', 1, '876876547', '2000-09-08', '32/E, Niwandama, Ja-ela', 0, NULL),
('5', '0776852447', 'it21176764@my.sliit.lk', 'Ranush', 'Malitha', 'K. T. R. Malitha', './img/avatar/1234.jpg', 1, '5576465496', '2000-11-01', '353/1/3, Nawanagaraya, Polonnaruwa', 0, NULL),
('6', '0745855888', 'it2114567834@my.sliit.lk', 'Yashika ', 'Sewwandi', 'W. P. Y. Sewwandi', './img/avatar/1234.jpg', 1, '8484juj8u4jj8', '1992-12-24', '176/B, Jayamawata, Yakkala', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_inventry`
--

CREATE TABLE `user_inventry` (
  `userID` varchar(50) NOT NULL,
  `IID` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_inventry`
--

INSERT INTO `user_inventry` (`userID`, `IID`, `date`) VALUES
('2', 1, '2021-09-23'),
('6', 5, '2021-09-01'),
('4', 3, '2021-08-19'),
('2', 1, '2021-09-23'),
('6', 5, '2021-09-01'),
('4', 3, '2021-08-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `FK_IID_BR` (`IID`),
  ADD KEY `FK_USER_BR` (`userID`),
  ADD KEY `FK_ADMIN_USER` (`adminUserID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD KEY `FK_IID_BOOK` (`IID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `FK_PUBID_INVEN` (`pubID`),
  ADD KEY `FK_AID_INVEN` (`A_ID`),
  ADD KEY `FK_CID_INVEN` (`CID`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `pastpaper`
--
ALTER TABLE `pastpaper`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pubID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`revID`),
  ADD KEY `FK_IID_RES` (`IID`),
  ADD KEY `FK_USER_RESERVE` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `user_inventry`
--
ALTER TABLE `user_inventry`
  ADD KEY `FK_IID_INVEN` (`IID`),
  ADD KEY `FK_USER_INVENTRY` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pubID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `revID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  ADD CONSTRAINT `FK_ADMIN_USER` FOREIGN KEY (`adminUserID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `FK_IID_BR` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_BR` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_IID_BOOK` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `FK_AID_INVEN` FOREIGN KEY (`A_ID`) REFERENCES `author` (`AID`),
  ADD CONSTRAINT `FK_CID_INVEN` FOREIGN KEY (`CID`) REFERENCES `category` (`CID`),
  ADD CONSTRAINT `FK_PUBID_INVEN` FOREIGN KEY (`pubID`) REFERENCES `publisher` (`pubID`);

--
-- Constraints for table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `FK_IID_JOURNAL` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `pastpaper`
--
ALTER TABLE `pastpaper`
  ADD CONSTRAINT `FK_IID_PP` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `FK_IID_REPORT` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `FK_IID_RES` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_RESERVE` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `user_inventry`
--
ALTER TABLE `user_inventry`
  ADD CONSTRAINT `FK_IID_INVEN` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_INVENTRY` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
