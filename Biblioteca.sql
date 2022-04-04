-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-02-2022 a las 01:13:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Biblioteca_Virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Biblioteca`
--

CREATE TABLE `Biblioteca` (
  `ID` int(11) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Biblioteca`
--

INSERT INTO `Biblioteca` (`ID`, `Title`, `Genre`, `Author`, `Description`) VALUES
(1, 'Biblia', 'Religion', '', 'Conjunto de libros canónicos que en el cristianismo y en otras religiones, se consideran producto de inspiración divina y un reflejo o registro de la relación entre Dios y la humanidad.\r\nEstá organizada por dos partes principales; Antiguo Testamento y el Nuevo Testamento que se enfoca en Jesucristo y el cristianismo primitivo.'),
(2, 'Cien años de soledad', 'Novela', 'Gabriel García Márquez', '«Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevo a conocer el hielo».\r\nCon estas palabras empieza una novela legendaria, una de las aventuras literarias más fascinantes del siglo XX. La familia Buendía-lguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representa al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.'),
(3, 'Diálogos de Platón', 'Filosofia', 'Platón', 'Aunque fundamentalmente la obra de Platón es la expresión filosófica de su saber, ha llamado siempre la atención que su medio haya sido una prosa de características literarias, que en buen grado ha contribuido a que su pensamiento, después de veinticinco siglos, se mantenga vivo, polémico y continúe enriqueciendo las cualidades reflexivas de sus lectores. Puesto que Platón fue un educador en varios sentidos (su interés, además de penetrar la esencia de las cosas, era el de conseguir que sus discípulos también lo lograran), su obra es eminentemente pedagógica.'),
(4, 'Enciclopedia de los animales National Geographic', 'Educativo', 'National Geographic', 'Enciclopedia de los animales National Geographic\r\n\r\nMamiferos III\r\n\r\n-Osos\r\n-Mustélidos\r\n-Focas y leones marinos\r\n-La familia de los mapaches\r\n-Hienas y lobos de tierra\r\n-Civetas y mangostas\r\n-Felinos'),
(5, 'EL DEMONIO DE ARBENNIOS', 'Aventura y Acción', 'Bernard Torelló López', 'Kai es un antiguo soldado de élite que reside en Arbennios, capital del reino de Lénoda, cuya monótona vida se sustenta en tres pilares: un trabajo en la guardia del noble señor Nárenwal, la compañía de su leal grupo de amigos y las furtivas visitas de su amante secreta. Por desgracia, durante un caluroso día de verano tendrá lugar un ataque inesperado que dará un giro a su vida. Condenado por la misma sociedad a la que había defendido durante años, Kai se verá arrastrado por un torbellino de emociones y violencia que lo llevarán por el oscuro camino de la venganza.'),
(6, 'HOW TO MAKE SPACE', 'Ingles', 'DR. Arlene K. Unger', 'An inspired guide to a clearer mind and home\r\n\r\nOften life seems to be about having or achieving more, but what happens when we choose less? Discover the joys of simplicity and moderation with practical exercises to clear your home, calendar and mind. How to Make Space reveals how people throughout history and around the world have embraced a simpler life, from Buddhist monks to Swedish Lagom and modern minimalism. Be inspired to follow their example and reap the benefits of more time, more clarity, more joy and more space.'),
(7, 'LAS MIL Y UNA NOCHES', 'Fantasía', '', 'Esta es la historia del rey Schariar y Sherezada, de las mil y una noches en que la imaginación les gana la batalla al rencor y a la venganza. Genios, reyes y princesas, objetos mágicos, ciudades misteriosas, grandes aventureros, pescadores y mercaderes, palacios increíbles, ladrones y vasallos, todos se dan cita en estos cuentos de origen árabe y de autor anónimo que dieron lugar a innumerables versiones. Entre ellas, la de Juan Vernet, una de las más reconocidas y en la que se basa esta maravillosa adaptación de Graciela Gliemmo para los más chicos.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Biblioteca`
--
ALTER TABLE `Biblioteca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Biblioteca`
--
ALTER TABLE `Biblioteca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
