-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: books
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Chinua Achebe',1),(2,'Hans Christian Andersen',1),(3,'Dante Alighieri',1),(4,'Jane Austen',1),(5,'HonorÃ© de Balzac',1),(6,'Samuel Beckett',1),(7,'Giovanni Boccaccio',1),(8,'Jorge Luis Borges',1),(9,'Emily BrontÃ«',1),(10,'Albert Camus',1),(11,'Paul Celan',1),(12,'Louis-Ferdinand CÃ©line',1),(13,'Miguel de Cervantes',1),(14,'Geoffrey Chaucer',1),(15,'Anton Chekhov',1),(16,'Joseph Conrad',1),(17,'Charles Dickens',1),(18,'Denis Diderot',1),(19,'Alfred DÃ¶blin',1),(20,'Fyodor Dostoevsky',1),(21,'George Eliot',1),(22,'Ralph Ellison',1),(23,'Euripides',1),(24,'William Faulkner',1),(25,'Gustave Flaubert',1),(26,'Federico GarcÃ­a Lorca',1),(27,'Gabriel GarcÃ­a MÃ¡rquez',1),(28,'Johann Wolfgang von Goethe',1),(29,'Nikolai Gogol',1),(30,'GÃ¼nter Grass',1),(31,'JoÃ£o GuimarÃ£es Rosa',1),(32,'Knut Hamsun',1),(33,'Ernest Hemingway',1),(34,'Homer',1),(35,'Henrik Ibsen',1),(36,'James Joyce',1),(37,'Franz Kafka',1),(38,'KÄlidÄsa',1),(39,'Yasunari Kawabata',1),(40,'Nikos Kazantzakis',1),(41,'D. H. Lawrence',1),(42,'HalldÃ³r Laxness',1),(43,'Giacomo Leopardi',1),(44,'Doris Lessing',1),(45,'Astrid Lindgren',1),(46,'Lu Xun',1),(47,'Naguib Mahfouz',1),(48,'Thomas Mann',1),(49,'Herman Melville',1),(50,'Michel de Montaigne',1),(51,'Elsa Morante',1),(52,'Toni Morrison',1),(53,'Murasaki Shikibu',1),(54,'Robert Musil',1),(55,'Vladimir Nabokov',1),(56,'George Orwell',1),(57,'Ovid',1),(58,'Fernando Pessoa',1),(59,'Edgar Allan Poe',1),(60,'Marcel Proust',1),(61,'FranÃ§ois Rabelais',1),(62,'Juan Rulfo',1),(63,'Rumi',1),(64,'Salman Rushdie',1),(65,'Saadi',1),(66,'Tayeb Salih',1),(67,'JosÃ© Saramago',1),(68,'William Shakespeare',1),(69,'Sophocles',1),(70,'Stendhal',1),(71,'Laurence Sterne',1),(72,'Italo Svevo',1),(73,'Jonathan Swift',1),(74,'Leo Tolstoy',1),(75,'Mark Twain',1),(76,'Valmiki',1),(77,'Virgil',1),(78,'Vyasa',1),(79,'Walt Whitman',1),(80,'Virginia Woolf',1),(81,'Marguerite Yourcenar',1),(82,'AAAAAshhshs',1),(83,'AAAA',1),(84,'AB',1),(85,'Loïc Henry',1);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `wikipedia_link` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Things Fall Apart',NULL,'public/images/books/things-fall-apart.jpg',1,209,'https://en.wikipedia.org/wiki/Things_Fall_Apart\n',1958,'English','Nigeria'),(3,'The Divine Comedy',NULL,'public/images/books/the-divine-comedy.jpg',3,928,'https://en.wikipedia.org/wiki/Divine_Comedy\n',1315,'Italian','Italy'),(4,'The Epic Of Gilgamesh',NULL,'public/images/books/the-epic-of-gilgamesh.jpg',NULL,160,'https://en.wikipedia.org/wiki/Epic_of_Gilgamesh\n',-1700,'Akkadian','Sumer and Akkadian Empire'),(5,'The Book Of Job',NULL,'public/images/books/the-book-of-job.jpg',NULL,176,'https://en.wikipedia.org/wiki/Book_of_Job\n',-600,'Hebrew','Achaemenid Empire'),(6,'One Thousand and One Nights',NULL,'public/images/books/one-thousand-and-one-nights.jpg',NULL,288,'https://en.wikipedia.org/wiki/One_Thousand_and_One_Nights\n',1200,'Arabic','India/Iran/Iraq/Egypt/Tajikistan'),(7,'NjÃ¡l\'s Saga',NULL,'public/images/books/njals-saga.jpg',NULL,384,'https://en.wikipedia.org/wiki/Nj%C3%A1ls_saga\n',1350,'Old Norse','Iceland'),(8,'Pride and Prejudice',NULL,'public/images/books/pride-and-prejudice.jpg',4,226,'https://en.wikipedia.org/wiki/Pride_and_Prejudice\n',1813,'English','United Kingdom'),(9,'Le PÃ¨re Goriot',NULL,'public/images/books/le-pere-goriot.jpg',5,443,'https://en.wikipedia.org/wiki/Le_P%C3%A8re_Goriot\n',1835,'French','France'),(10,'Molloy, Malone Dies, The Unnamable, the trilogy',NULL,'public/images/books/molloy-malone-dies-the-unnamable.jpg',6,256,'https://en.wikipedia.org/wiki/Molloy_(novel)\n',1952,'French, English','Republic of Ireland'),(11,'The Decameron',NULL,'public/images/books/the-decameron.jpg',7,1024,'https://en.wikipedia.org/wiki/The_Decameron\n',1351,'Italian','Italy'),(12,'Ficciones',NULL,'public/images/books/ficciones.jpg',8,224,'https://en.wikipedia.org/wiki/Ficciones\n',1965,'Spanish','Argentina'),(13,'Wuthering Heights',NULL,'public/images/books/wuthering-heights.jpg',9,342,'https://en.wikipedia.org/wiki/Wuthering_Heights\n',1847,'English','United Kingdom'),(14,'The Stranger',NULL,'public/images/books/l-etranger.jpg',10,185,'https://en.wikipedia.org/wiki/The_Stranger_(novel)\n',1942,'French','Algeria, French Empire'),(15,'Poems',NULL,'public/images/books/poems-paul-celan.jpg',11,320,'\n',1952,'German','Romania, France'),(16,'Journey to the End of the Night',NULL,'public/images/books/voyage-au-bout-de-la-nuit.jpg',12,505,'https://en.wikipedia.org/wiki/Journey_to_the_End_of_the_Night\n',1932,'French','France'),(18,'The Canterbury Tales',NULL,'public/images/books/the-canterbury-tales.jpg',14,544,'https://en.wikipedia.org/wiki/The_Canterbury_Tales\n',1450,'English','England'),(19,'Stories',NULL,'public/images/books/stories-of-anton-chekhov.jpg',15,194,'https://en.wikipedia.org/wiki/List_of_short_stories_by_Anton_Chekhov\n',1886,'Russian','Russia'),(20,'Nostromo',NULL,'public/images/books/nostromo.jpg',16,320,'https://en.wikipedia.org/wiki/Nostromo\n',1904,'English','United Kingdom'),(21,'Great Expectations',NULL,'public/images/books/great-expectations.jpg',17,194,'https://en.wikipedia.org/wiki/Great_Expectations\n',1861,'English','United Kingdom'),(22,'Jacques the Fatalist',NULL,'public/images/books/jacques-the-fatalist.jpg',18,596,'https://en.wikipedia.org/wiki/Jacques_the_Fatalist\n',1796,'French','France'),(23,'Berlin Alexanderplatz',NULL,'public/images/books/berlin-alexanderplatz.jpg',19,600,'https://en.wikipedia.org/wiki/Berlin_Alexanderplatz\n',1929,'German','Germany'),(24,'Crime and Punishment',NULL,'public/images/books/crime-and-punishment.jpg',20,551,'https://en.wikipedia.org/wiki/Crime_and_Punishment\n',1866,'Russian','Russia'),(25,'The Idiot',NULL,'public/images/books/the-idiot.jpg',20,656,'https://en.wikipedia.org/wiki/The_Idiot\n',1869,'Russian','Russia'),(26,'The Possessed',NULL,'public/images/books/the-possessed.jpg',20,768,'https://en.wikipedia.org/wiki/Demons_(Dostoyevsky_novel)\n',1872,'Russian','Russia'),(27,'The Brothers Karamazov',NULL,'public/images/books/the-brothers-karamazov.jpg',20,824,'https://en.wikipedia.org/wiki/The_Brothers_Karamazov\n',1880,'Russian','Russia'),(28,'Middlemarch',NULL,'public/images/books/middlemarch.jpg',21,800,'https://en.wikipedia.org/wiki/Middlemarch\n',1871,'English','United Kingdom'),(29,'Invisible Man',NULL,'public/images/books/invisible-man.jpg',22,581,'https://en.wikipedia.org/wiki/Invisible_Man\n',1952,'English','United States'),(30,'Medea',NULL,'public/images/books/medea.jpg',23,104,'https://en.wikipedia.org/wiki/Medea_(play)\n',-431,'Greek','Greece'),(31,'Absalom, Absalom!',NULL,'public/images/books/absalom-absalom.jpg',24,313,'https://en.wikipedia.org/wiki/Absalom,_Absalom!\n',1936,'English','United States'),(33,'Madame Bovary',NULL,'public/images/books/madame-bovary.jpg',25,528,'https://en.wikipedia.org/wiki/Madame_Bovary\n',1857,'French','France'),(34,'Sentimental Education',NULL,'public/images/books/l-education-sentimentale.jpg',25,606,'https://en.wikipedia.org/wiki/Sentimental_Education\n',1869,'French','France'),(36,'One Hundred Years of Solitude',NULL,'public/images/books/one-hundred-years-of-solitude.jpg',27,417,'https://en.wikipedia.org/wiki/One_Hundred_Years_of_Solitude\n',1967,'Spanish','Colombia'),(37,'Love in the Time of Cholera',NULL,'public/images/books/love-in-the-time-of-cholera.jpg',27,368,'https://en.wikipedia.org/wiki/Love_in_the_Time_of_Cholera\n',1985,'Spanish','Colombia'),(39,'Dead Souls',NULL,'public/images/books/dead-souls.jpg',29,432,'https://en.wikipedia.org/wiki/Dead_Souls\n',1842,'Russian','Russia'),(41,'The Devil to Pay in the Backlands',NULL,'public/images/books/the-devil-to-pay-in-the-backlands.jpg',31,494,'https://en.wikipedia.org/wiki/The_Devil_to_Pay_in_the_Backlands\n',1956,'Portuguese','Brazil'),(42,'Hunger',NULL,'public/images/books/hunger.jpg',32,176,'https://en.wikipedia.org/wiki/Hunger_(Hamsun_novel)\n',1890,'Norwegian','Norway'),(43,'The Old Man and the Sea',NULL,'public/images/books/the-old-man-and-the-sea.jpg',33,128,'https://en.wikipedia.org/wiki/The_Old_Man_and_the_Sea\n',1952,'English','United States'),(44,'Iliad',NULL,'public/images/books/the-iliad-of-homer.jpg',34,608,'https://en.wikipedia.org/wiki/Iliad\n',-735,'Greek','Greece'),(45,'Odyssey',NULL,'public/images/books/the-odyssey-of-homer.jpg',34,374,'https://en.wikipedia.org/wiki/Odyssey\n',-800,'Greek','Greece'),(46,'A Doll\'s House','','public/images/books/a-Dolls-house.jpg',35,68,'0',1879,'Norwegian','Norway'),(47,'Ulysses',NULL,'public/images/books/ulysses.jpg',36,228,'https://en.wikipedia.org/wiki/Ulysses_(novel)\n',1922,'English','Irish Free State'),(48,'Stories',NULL,'public/images/books/stories-of-franz-kafka.jpg',37,488,'https://en.wikipedia.org/wiki/Franz_Kafka_bibliography#Short_stories\n',1924,'German','Czechoslovakia'),(49,'The Trial',NULL,'public/images/books/the-trial.jpg',37,160,'https://en.wikipedia.org/wiki/The_Trial\n',1925,'German','Czechoslovakia'),(50,'The Castle',NULL,'public/images/books/the-castle.jpg',37,352,'https://en.wikipedia.org/wiki/The_Castle_(novel)\n',1926,'German','Czechoslovakia'),(51,'The recognition of Shakuntala',NULL,'public/images/books/the-recognition-of-shakuntala.jpg',38,147,'https://en.wikipedia.org/wiki/Abhij%C3%B1%C4%81na%C5%9B%C4%81kuntalam\n',150,'Sanskrit','India'),(53,'Zorba the Greek',NULL,'public/images/books/zorba-the-greek.jpg',40,368,'https://en.wikipedia.org/wiki/Zorba_the_Greek\n',1946,'Greek','Greece'),(54,'Sons and Lovers',NULL,'public/images/books/sons-and-lovers.jpg',41,432,'https://en.wikipedia.org/wiki/Sons_and_Lovers\n',1913,'English','United Kingdom'),(55,'Independent People',NULL,'public/images/books/independent-people.jpg',42,470,'https://en.wikipedia.org/wiki/Independent_People\n',1934,'Icelandic','Iceland'),(56,'Poems',NULL,'public/images/books/poems-giacomo-leopardi.jpg',43,184,'\n',1818,'Italian','Italy'),(57,'The Golden Notebook',NULL,'public/images/books/the-golden-notebook.jpg',44,688,'https://en.wikipedia.org/wiki/The_Golden_Notebook\n',1962,'English','United Kingdom'),(58,'Pippi Longstocking',NULL,'public/images/books/pippi-longstocking.jpg',45,160,'https://en.wikipedia.org/wiki/Pippi_Longstocking\n',1945,'Swedish','Sweden'),(60,'Children of Gebelawi',NULL,'public/images/books/children-of-gebelawi.jpg',47,355,'https://en.wikipedia.org/wiki/Children_of_Gebelawi\n',1959,'Arabic','Egypt'),(61,'Buddenbrooks',NULL,'public/images/books/buddenbrooks.jpg',48,736,'https://en.wikipedia.org/wiki/Buddenbrooks\n',1901,'German','Germany'),(62,'The Magic Mountain',NULL,'public/images/books/the-magic-mountain.jpg',48,720,'https://en.wikipedia.org/wiki/The_Magic_Mountain\n',1924,'German','Germany'),(63,'Moby Dick',NULL,'public/images/books/moby-dick.jpg',49,378,'https://en.wikipedia.org/wiki/Moby-Dick\n',1851,'English','United States'),(65,'History',NULL,'public/images/books/history.jpg',51,600,'https://en.wikipedia.org/wiki/History_(novel)\n',1974,'Italian','Italy'),(68,'The Man Without Qualities',NULL,'public/images/books/the-man-without-qualities.jpg',54,365,'https://en.wikipedia.org/wiki/The_Man_Without_Qualities\n',1931,'German','Austria'),(69,'Lolita',NULL,'public/images/books/lolita.jpg',55,317,'https://en.wikipedia.org/wiki/Lolita\n',1955,'English','Russia/United States'),(70,'Nineteen Eighty-Four',NULL,'public/images/books/nineteen-eighty-four.jpg',56,272,'https://en.wikipedia.org/wiki/Nineteen_Eighty-Four\n',1949,'English','United Kingdom'),(71,'Metamorphoses',NULL,'public/images/books/the-metamorphoses-of-ovid.jpg',57,576,'https://en.wikipedia.org/wiki/Metamorphoses\n',100,'Classical Latin','Roman Empire'),(72,'The Book of Disquiet',NULL,'public/images/books/the-book-of-disquiet.jpg',58,272,'https://en.wikipedia.org/wiki/The_Book_of_Disquiet\n',1928,'Portuguese','Portugal'),(73,'Tales',NULL,'public/images/books/tales-and-poems-of-edgar-allan-poe.jpg',59,842,'https://en.wikipedia.org/wiki/Edgar_Allan_Poe_bibliography#Tales\n',1950,'English','United States'),(74,'In Search of Lost Time',NULL,'public/images/books/a-la-recherche-du-temps-perdu.jpg',60,2408,'https://en.wikipedia.org/wiki/In_Search_of_Lost_Time\n',1920,'French','France'),(75,'Gargantua and Pantagruel',NULL,'public/images/books/gargantua-and-pantagruel.jpg',61,623,'https://en.wikipedia.org/wiki/Gargantua_and_Pantagruel\n',1533,'French','France'),(76,'Pedro PÃ¡ramo',NULL,'public/images/books/pedro-paramo.jpg',62,124,'https://en.wikipedia.org/wiki/Pedro_P%C3%A1ramo\n',1955,'Spanish','Mexico'),(77,'The Masnavi',NULL,'public/images/books/the-masnavi.jpg',63,438,'https://en.wikipedia.org/wiki/Masnavi\n',1236,'Persian','Sultanate of Rum'),(78,'Midnight\'s Children',NULL,'public/images/books/midnights-children.jpg',64,536,'https://en.wikipedia.org/wiki/Midnight%27s_Children\n',1981,'English','United Kingdom, India'),(79,'Bostan',NULL,'public/images/books/bostan.jpg',65,298,'https://en.wikipedia.org/wiki/Bustan_(book)\n',1257,'Persian','Persia, Persian Empire'),(80,'Season of Migration to the North',NULL,'public/images/books/season-of-migration-to-the-north.jpg',66,139,'https://en.wikipedia.org/wiki/Season_of_Migration_to_the_North\n',1966,'Arabic','Sudan'),(82,'Hamlet',NULL,'public/images/books/hamlet.jpg',68,432,'https://en.wikipedia.org/wiki/Hamlet\n',1603,'English','England'),(83,'King Lear',NULL,'public/images/books/king-lear.jpg',68,384,'https://en.wikipedia.org/wiki/King_Lear\n',1608,'English','England'),(84,'Othello',NULL,'public/images/books/othello.jpg',68,314,'https://en.wikipedia.org/wiki/Othello\n',1609,'English','England'),(85,'Oedipus the King',NULL,'public/images/books/oedipus-the-king.jpg',69,88,'https://en.wikipedia.org/wiki/Oedipus_the_King\n',-430,'Greek','Greece'),(86,'The Red and the Black',NULL,'public/images/books/le-rouge-et-le-noir.jpg',70,576,'https://en.wikipedia.org/wiki/The_Red_and_the_Black\n',1830,'French','France'),(87,'The Life And Opinions of Tristram Shandy',NULL,'public/images/books/the-life-and-opinions-of-tristram-shandy.jpg',71,640,'https://en.wikipedia.org/wiki/The_Life_and_Opinions_of_Tristram_Shandy,_Gentleman\n',1760,'English','England'),(88,'Confessions of Zeno',NULL,'public/images/books/confessions-of-zeno.jpg',72,412,'https://en.wikipedia.org/wiki/Zeno%27s_Conscience\n',1923,'Italian','Italy'),(89,'Gulliver\'s Travels',NULL,'public/images/books/gullivers-travels.jpg',73,178,'https://en.wikipedia.org/wiki/Gulliver%27s_Travels\n',1726,'English','Ireland'),(90,'War and Peace',NULL,'public/images/books/war-and-peace.jpg',74,1296,'https://en.wikipedia.org/wiki/War_and_Peace\n',1867,'Russian','Russia'),(92,'The Death of Ivan Ilyich',NULL,'public/images/books/the-death-of-ivan-ilyich.jpg',74,92,'https://en.wikipedia.org/wiki/The_Death_of_Ivan_Ilyich\n',1886,'Russian','Russia'),(93,'The Adventures of Huckleberry Finn',NULL,'public/images/books/the-adventures-of-huckleberry-finn.jpg',75,224,'https://en.wikipedia.org/wiki/Adventures_of_Huckleberry_Finn\n',1884,'English','United States'),(94,'Ramayana',NULL,'public/images/books/ramayana.jpg',76,152,'https://en.wikipedia.org/wiki/Ramayana\n',-450,'Sanskrit','India'),(95,'The Aeneid',NULL,'public/images/books/the-aeneid.jpg',77,442,'https://en.wikipedia.org/wiki/Aeneid\n',-23,'Classical Latin','Roman Empire'),(96,'Mahabharata',NULL,'public/images/books/the-mahab-harata.jpg',78,276,'https://en.wikipedia.org/wiki/Mahabharata\n',-700,'Sanskrit','India'),(97,'Leaves of Grass',NULL,'public/images/books/leaves-of-grass.jpg',79,152,'https://en.wikipedia.org/wiki/Leaves_of_Grass\n',1855,'English','United States'),(98,'Mrs Dalloway',NULL,'public/images/books/mrs-dalloway.jpg',80,216,'https://en.wikipedia.org/wiki/Mrs_Dalloway\n',1925,'English','United Kingdom'),(99,'To the Lighthouse',NULL,'public/images/books/to-the-lighthouse.jpg',80,209,'https://en.wikipedia.org/wiki/To_the_Lighthouse\n',1927,'English','United Kingdom'),(100,'Memoirs of Hadrian',NULL,'public/images/books/memoirs-of-hadrian.jpg',81,408,'https://en.wikipedia.org/wiki/Memoirs_of_Hadrian\n',1951,'French','France/Belgium'),(101,'L\'Ã‰tranger','L\'Ã‰tranger est le premier roman dâ€™Albert Camus, paru en 1942. Il prend place dans la tÃ©tralogie que Camus nommera Â« cycle de lâ€™absurde Â» qui dÃ©crit les fondements de la philosophie camusienne : lâ€™absurde. Cette tÃ©tralogie comprend Ã©galement lâ€™essai intitulÃ© Le Mythe de Sisyphe ainsi que les piÃ¨ces de thÃ©Ã¢tre Caligula et Le Malentendu.',NULL,10,159,'0',1942,'French','France'),(102,'Les Grandes EspÃ©rances','Les Grandes EspÃ©rances ou De grandes espÃ©rances (en anglais Great Expectations) est le treiziÃ¨me roman de Charles Dickens, le deuxiÃ¨me, aprÃ¨s David Copperfield, Ã  Ãªtre racontÃ© entiÃ¨rement Ã  la premiÃ¨re personne par le protagoniste lui-mÃªme, Philip Pirrip, dit PipN 1. Le sujet principal en est la vie et les aventures d\'un jeune orphelin jusqu\'Ã  sa maturitÃ©. D\'abord publiÃ© en feuilleton de dÃ©cembre 1860 Ã  aoÃ»t 1861 dans le magazine de Dickens All the Year Round, il paraÃ®t ensuite en trois volumes chez Chapman and Hall en octobre 1861.',NULL,17,0,'https://fr.wikipedia.org/wiki/Les_Grandes_Esp%C3%A9rances',1860,'English','England'),(103,'Loar',NULL,NULL,85,NULL,NULL,2011,'Frensh','France'),(108,'Un nain con pÃ©tant','',NULL,84,666,'https://fr.wikipedia.org/wiki/Le_Donjon_de_Naheulbeuk',666,'Le noir parler','Quelque part'),(137,'bipbup','111                              ',NULL,0,111,'',111,'lol','lol');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'SUPERADMIN','$2y$10$4Eu7uMdbmGC.gdoyFc72LOA7si1s0dj7HGhAIldLbc5W.iJo27aDS','blurp@spinarcade.fr','SUPERADMIN');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-14 16:56:22
