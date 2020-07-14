/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.4.11-MariaDB : Database - hanamidb2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hanamidb2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hanamidb2`;

/*Table structure for table `carrito` */

DROP TABLE IF EXISTS `carrito`;

CREATE TABLE `carrito` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_carrito_usuario` (`usuario_id`),
  KEY `FK_carrito_producto` (`producto_id`),
  CONSTRAINT `FK_carrito_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  CONSTRAINT `FK_carrito_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `carrito` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `password_resets` */

insert  into `password_resets`(`id`,`email`,`token`,`created_at`) values (5,'gabrielbermudez0@gmail.com','$2y$10$OwcimOGguiyuGowHP2p7Aeo8FlfBBGrIZUE2DQwB7ULfMJzU3HBlu','2020-07-05 07:38:37');

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(10) unsigned NOT NULL,
  `rating` decimal(2,1) unsigned NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `productos` */

insert  into `productos`(`id`,`titulo`,`descripcion`,`precio`,`rating`,`image`) values (1,'Jazmin del Cabo','También llamada jazmín del Cabo, la Gardenia jasminoides, oriunda de China, es un arbusto ornamental de porte redondeado, que ofrece flores muy perfumadas. Pertenece a la familia de las rubiáceas, que abarca unas 200 especies tropicales y subtropicales asiáticas y africanas.',1200,'8.9','jazminDelCabo.png'),(2,'Jazmin Kimura','El jazmín enano o jazmín kimura, es una bella planta perenne llamativa por sus hojas, flores y luminosidad, se puede observar con mucha facilidad en los jardines comunes si bien es muy común se puede llegar a confundir con otros jazmines, pues la mayoría tienen descripciones semejantes y los colores son muy parecidos por esta razón es muy importante tomar en cuenta algunas necesidades así como algunas características del jazmín enano o jazmín kimura.',900,'7.5','jazminKimura.png'),(3,'Jazmin Estrellado','Jazmín de estrella (Trachelospermum jasminoides). Especie botánica de plantas trepadoras perteneciente al género Trachelospermum. Es tal vez la más bella de las trepadoras perennes por sus hojas coriáceas verde brillante, su tupida vegetación y sus flores blancas, pequeñas pero numerosísimas.',850,'8.1','jazminEstrellado.png'),(4,'Lavanda','La lavanda es una planta aromática semiarbustiva, habitual en muchos jardines mediterráneos. Su fácil cultivo hace que sea una elección segura en terrenos no muy ricos, como los secos y arcillosos. Hay más de 30 especies de lavanda, todas ellas pertenecientes a la familia de las lamiáceas. Sus perfumadas flores en forma de espigas de color lila azulado coronan sus largos y ramificados tallos.',450,'7.1','lavanda.png'),(5,'Sakura Cerezo Japones','La sakura o cerezo en flor japonés es uno de los símbolos más conocidos de la cultura japonesa. También se nombra sakura a tres especies de plantas del género Prunus.\r\nEl cerezo florece durante la primavera. En Japón se realiza el festival del hanami en su honor puesto que es su flor más significativa, durante este los familiares y amigos se reúnen en los parques con cerezos bajo la sombra de los mismos y, a modo de picnic, comparten alimentos mientras celebran la aparición de las flores.',2599,'9.8','sakura.png'),(6,'Rosal','Los rosales son arbustos o trepadoras (a veces colgantes), generalmente espinosos, que alcanzan de dos a cinco metros de altura, en ocasiones, pueden llegar a los 20 m trepando sobre otras plantas.\r\nTienen tallos semileñosos, casi siempre erectos (a veces rastreros), algunos de textura rugosa y escamosa. Presentan notables formaciones epidérmicas persistentes, bien desarrolladas y de formas variadas, conocidas como espinas o aguijones.',699,'6.4','rosal.png'),(7,'Malvon','Los malvones son una de las plantas más populares Y amadas por su fortaleza. Vistosos, alegres Y de una fortaleza inigualable, es raro NO encontrarlos en alguna maceta, cantero o jardín.\r\nSe diferencian de otras plantas similares por una mancha oscura característica que resalta en forma de herradura en sus hojas.\r\nExisten malvones de flores blancas, púrpuras, rojas Y salmón. Su floración es continua desde la primavera hasta fines del otoño. ',350,'7.8','malvon.png'),(8,'Frutillas','Las hojas de las frutillas tienen tres folíolos de bordes aserrados y la parte inferior de las hojas es pubescente. Están sostenidas por un pecíolo largo que las une a la corona, que forma el tallo de la planta y de ella se originan distintos tipos de yemas que generan hojas, ores y estolones.',750,'7.2','frutillas.png'),(9,'Tomates Cherry','Los tomates cherry (Lycopersicon esculentum) son llamados de este modo por su semejanza de color, tamaño, y sabor dulce, con la cereza. Pueden consumirse todo el año.\r\nTiene un diámetro entre 1 y 3cm, y su peso oscila entre los 10 y 15g. Su sabor es menos ácido y más dulce que el tomate tradicional. Aunque se consume generalmente crudo, puede también ingerirse cocido.',250,'5.5','tomateCherry.png'),(10,'Cactus','Los cactus conforman la familia de plantas suculentas denominada Cactaceae. Estas especies, como buenas crasas que son, se caracterizan por acumular agua y nutrientes en sus tejidos, así, pueden adaptarse sin problema al hábitat en el que se encuentren. Gracias a ello, pueden sobrevivir en terrenos áridos y secos.',349,'4.4','cactus.png'),(11,'Cala Roja','La cala es una herbácea del tipo perenne, es decir que se mantiene verde durante todo el año. La planta se desarrolla a partir de un rizoma grueso y de forma ovalada, desde el cual se desarrollan sus raíces que pueden llegar a medir hasta 15 centímetros de largo.',580,'6.6','cala.png'),(12,'Lirios','Los lirios se encuentran en el grupo de las plantas perennes y pueden alcanzar fácilmente un metro de alto. Sus tallos frondosos forman bulbos subterráneos que permiten a la flor guardar nutrientes y sobrevivir el invierno sin problemas, por eso se conocen como flores altamente resistentes.',890,'5.9','lirio.png'),(13,'Dolar Verde','Esta planta perenne, es originaria del sudeste de África. Su nombre científico es Plectranthus verticillatus y también se la conoce como planta del dinero o hiedra sueca. Tiene hojas suculentas (que guardan agua) de un verde brillante, redondeadas y con el margen dentado.',300,'6.6','dolarVerde.png'),(14,'Dolar Negro','La planta de dólar es una planta herbácea perenne que en Chile cultivamos en interior, o en exterior protegida del sol y del frío. Es una especie que necesita de mucha luz, clima templado, de crecimiento rápido, tupido.',350,'7.3','dolarNegro.png'),(15,'Kalanchoe','Es una planta crasa, con hojas carnosas que actúan como reserva de agua dándole resistencia ante la sequía.\r\nLos kalanchoes florecen en primavera pero, segurmanete, habrás observado que en las floristerías y centros de jardinería siempre hay kalanchoes en flor y esto se debe a que los viveristas alteran las horas de luz del cultivo del kalanchoe emulando una primavera, lo que induce a la floración.',499,'5.5','kalanchoe.png');

/*Table structure for table `resumen` */

DROP TABLE IF EXISTS `resumen`;

CREATE TABLE `resumen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `id_producto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_resumen_usuarios` (`id_usuario`),
  KEY `FK_resumen_productos` (`id_producto`),
  CONSTRAINT `FK_resumen_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  CONSTRAINT `FK_resumen_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `resumen` */

insert  into `resumen`(`id`,`id_usuario`,`id_producto`) values (5,13,5),(19,13,2),(20,13,4),(21,14,6),(22,14,1),(23,13,4),(24,13,3),(25,13,2),(26,13,6),(27,15,6);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `remember_token` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`apellido`,`usuario`,`email`,`contraseña`,`telefono`,`celular`,`pais`,`genero`,`image`,`remember_token`) values (13,'Gabriel','Bermudez','GabrielBermudez','gabrielbermudez0@gmail.com','39237216','2614269628','2616145079','Argentina','Hombre','ng4lk4I2aQZKW20gXRErtZelfCw9CJ5rbVgiZo1m.jpeg',NULL),(14,'Monica','Gallo','MonicaGallo','moni_0504@hotmail.com','16995874','2614269628','2616145079','Argentina','Mujer','LOjfL93sJ6GzMnyFN9Krpdp72XiXAWRSoGFUMk88.jpeg',NULL),(15,'Maria Fernanda','Esposito','MariaFernanda2020','mari@gmail.com','esposito','2615673456','2612345689','Argentina','Hombre','ZqJUt4YxvS9pfKKheSfFKNvuhETbGNPXzXB7ctm9.jpeg',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
