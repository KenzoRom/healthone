-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 10:13 AM
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
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`) VALUES
(1, 'img/categories/crosstrainer.jpg', 'Crosstrainer'),
(2, 'img/categories/hometrainer.jpg', 'Hometrainer'),
(3, 'img/categories/loopband.jpg', 'Loopband'),
(4, 'img/categories/roeitrainer.jpg', 'Roeitrainer');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categoryid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `categoryid`) VALUES
(1, '/img/categories/crosstrainer/Crosstrainer1.jpg', 'Virtufit iConsole CTR 2.1 Crosstrainer', 'Als je een doel voor ogen hebt met het sporten, kun je ook gebruikmaken van de 24 programma’s van de VirtuFit iConsole CTR 2.1 ergometer crosstrainer. Het merendeel van deze programma’s past de weerstand tijdens het trainen aan, voor het beste resultaat t', 1),
(2, '/img/categories/crosstrainer/Crosstrainer2.jpg', 'tectake - 2-in-1 Crosstraine', 'Plezier bij het sporten - Met deze 2-in-1 Hometrainer en Crosstrainer houdt u uw lichaam met veel plezier in vorm. Daarnaast wordt het cardiovasculaire systeem bevordert en komen alle belangrijke fitnessonderdelen zoals kracht, uithoudingsvermogen, coördi', 1),
(3, '/img/categories/crosstrainer/Crosstrainer3.jpg', 'VirtuFit iConsole Total Fit', 'De VirtuFit iConsole Total Fit Crosstrainer geeft je een natuurlijk gevoel met een ergonomische elliptische stapbeweging. De grote anti-slip pedalen zijn instelbaar en maken het gemakkelijk om een goede sporthouding te vinden. Nadat je deze stevige, 52,6 ', 1),
(4, '/img/categories/crosstrainer/Crosstrainer4.jpg', 'CAPITAL SPORTS Stormstrike 2k Crosstrainer', 'Hit the fan! De CAPITAL SPORTS Stormstrike 2k Fan Bike is jouw innovative Cross-Training-Ergobike voor thuisgebruik. Stap op de pedalen en breng je lichaam tot aan de limiet, want hier train je gelijktijdig het hele lichaam, vergroot je de spierkracht, ve', 1),
(5, '/img/categories/crosstrainer/Crosstrainer5.jpg', 'Focus Fitness Senator iPlus', 'De strakke Focus Fitness Senator iPlus Crosstrainer biedt je een breed scala aan mogelijkheden en voorziet je van de meest moderne technieken. Zo is de Senator voorzien van een stabiel in totaliteit 67 kg wegend frame en een 12 kg zwaar frontwheel wat zor', 1),
(6, '/img/categories/hometrainer/Hometrainer1.jpg', 'VirtuFit HTR 1.0 hometrainectie', 'De VirtuFit HTR 1.0 Hometrainer voelt net aan alsof je op je eigen fiets zit. De 8 kg roterende massa is een realistische benadering van een echte fiets. De vorm van het zadel, de omwenteling van de trappers en de zithouding zijn dan ook goed afgekeken. H', 2),
(7, '/img/categories/hometrainer/Hometrainer2.jpg', 'Tunturi Cardio Fit B30 Hometrainer', 'Blijf in beweging met deze hometrainer. De Tunturi Cardio Fit B30 is een instapmodel fitness fiets op maat van de beginnende of casual gebruiker. Thuis, in de sportschool of het revalidatiecentrum: met deze fiets train je met een lichte tot matige intensi', 2),
(8, '/img/categories/hometrainer/Hometrainer3.jpg', 'SOUTHWALL Revalidatietrainer', 'Onze SOUTHWALL Revalidatietrainer - Hometrainer - revalidatiefiets - zwart is een klein, zeer eenvoudig te gebruiken apparaat dat ontworpen is voor oefeningen voor het boven- en onderlichaam. Het maakt het mogelijk om met beide benen en armen te trappen, ', 2),
(9, '/img/categories/hometrainer/Hometrainer4.jpg', 'VirtuFit Opvouwbare Home trainer', 'De VirtuFit Opvouwbare Hometrainer met Rugleuning en Tablethouder geeft je een goede training en is vervaardigd uit duurzame materialen wat resulteert in een lange levensduur. Deze veelzijdige home trainer verplaats je gemakkelijk van de ene ruimte naar d', 2),
(10, '/img/categories/hometrainer/Hometrainer5.jpg', 'CAPITAL SPORTS Azura - hometrainer', 'De Capital Sports Azura M1 is een opvouwbare fietstrainer die U bij uw dagelijkse fitness-training ondersteunt en samengevouwen ook in de kleinste ruimte nog een plaats vindt. Met een paar handgrepen is hij opengevouwen en klaar voor de training.De grondv', 2),
(11, '/img/categories/loopband/Loopband1.jpg', 'Loopband - Focus Fitness Jet 7 iPlus', 'De Focus Fitness Jet 7 iPlus is voorzien van de nieuwste technieken en voldoet aan alle wensen van de klant. Zo is de Jet 7 iPlus met zijn geïntegreerde Bluetooth systeem een geavanceerde loopband die geschikt is voor thuisgebruik. Dit zorgt ervoor dat je', 3),
(12, '/img/categories/loopband/Loopband2.jpg', 'RS Sports Loopband Run 5', 'Een zeer complete en compacte loopband van RS Sports de RUN 5. Vanuit huis je conditie op niveau houden of verbeteren, dat kan nu zeer gemakkelijk met de RS Sports RUN 5 loopband. Deze loopband is geschikte voor de beginnende loper, door armsteun te gebru', 3),
(13, '/img/categories/loopband/Loopband3.jpg', 'HomAthlon HA-105', 'Wil je graag conditie opbouwen of dit graag op peil houden? Dan is deze magnetische loopband voor thuis perfect voor jou! Met deze loopband kan je wandelen, joggen en hardlopen in het comfort van je eigen huis. Dus of je nu een beginnend sporter bent, reg', 3),
(14, '/img/categories/loopband/Loopband4.jpg', 'Homathlon Elektrische Loopband', 'Blijf je graag fit of wil je graag fit worden en wat kilootjes kwijt? Dan is een loopband een ideaal middel. Wandelen is namelijk weinig belastend voor spieren en gewrichten en de duur kan in je eigen tempo opgebouwd worden. Loop je liever lekker door? Ge', 3),
(15, '/img/categories/loopband/Loopband5.jpg', 'Tunturi Cardio Fit T40', 'Heb je niet altijd zin om buiten de deur te trainen? Met de Tunturi Cardio Fit T40 werk je thuis aan je conditie! Met maar liefst 41 trainingsprogramma’s heb je altijd een training op maat.\r\n', 3),
(16, '/img/categories/roeitrainer/Roeitrainer1.jpg', 'Tunturi Cardio Fit R20 Roeier', 'Fitness is fun! Eén van de meest efficiënte manieren om je lichaam te trainen is met een roeitrainer. Met de Tunturi Cardio Fit R20 ga je thuis aan de slag. Deze roeibeweging zet bijna alle belangrijke spieren aan het werk.\r\n', 4),
(17, '/img/categories/roeitrainer/Roeitrainer2.jpg', 'VirtuFit Row 450', 'De VirtuFit Row 450 heeft een “silent magnetic” weerstandssysteem waardoor je flexibel de weerstand kunt aanpassen. Daarnaast maakt het schakelen tussen de 10 verschillende weerstanden nauwelijks geluid. Dit maakt het apparaat ideaal om thuis mee te sport', 4),
(18, '/img/categories/roeitrainer/Roeitrainer3.jpg', 'Senz Sports R5000', 'De Senz Sports R5000 is een high-end roeitrainer van professionele kwaliteit, uitermate geschikt voor commerciële doeleinden of thuis gebruik. Het luchtweerstand systeem met het FAN Wheel System zorgt voor een optimale roeibeleving waarbij de weerstand op', 4),
(19, '/img/categories/roeitrainer/Roeitrainer4.jpg', 'VirtuFit Row Ultimate Pro 2i', 'Combineer een van de meest populaire Virtufit roeitraners met je favoriete trainingsapps. Dan krijg je de VirtuFit Ultimate Pro 2i Roeitrainer Bluetooth/ANT+. Met deze roeitrainer maak je gebruik van populaire apps als Kinomap en GymTrakrs en Selfloops. P', 4),
(20, '/img/categories/roeitrainer/Roeitrainer5.jpg', 'Tunturi Cardio Fit R20', 'Fitness is fun! Eén van de meest efficiënte manieren om je lichaam te trainen is met een roeitrainer. Met de Tunturi Cardio Fit R20 ga je thuis aan de slag. Deze roeibeweging zet bijna alle belangrijke spieren aan het werk.\r\n', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
