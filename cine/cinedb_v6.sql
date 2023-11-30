-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 15:47:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficio`
--

CREATE TABLE `beneficio` (
  `id_beneficio` int(11) NOT NULL,
  `nombre_beneficio` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `porcentaje_descuento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `beneficio`
--

INSERT INTO `beneficio` (`id_beneficio`, `nombre_beneficio`, `descripcion`, `porcentaje_descuento`) VALUES
(1, 'Beneficio mayores de 60 años', 'Descuento del 20% en la entrada', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Drama'),
(2, 'Comedia'),
(3, 'Aventura'),
(4, 'Suspenso'),
(5, 'Terror'),
(6, 'Acción'),
(7, 'Animación'),
(8, 'Superheroés'),
(9, 'Biografía'),
(10, 'Historico'),
(11, 'Basada en hechos reales'),
(12, 'Próximamente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

CREATE TABLE `complejo` (
  `id_complejo` int(11) NOT NULL,
  `nombre_complejo` varchar(100) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `direccion_maps` varchar(5000) NOT NULL,
  `nombre_imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`id_complejo`, `nombre_complejo`, `direccion`, `descripcion`, `direccion_maps`, `nombre_imagen`) VALUES
(1, 'Canning', 'Formosa 653 Canning, Ezeiza (Shopping Las Toscas)', '<p>Este complejo está ubicado en Canning, Ezeiza, en la zona urbanística\r\n                        de mayor crecimiento del\r\n                        Gran Buenos Aires de los últimos años.</p>\r\n\r\n                    <p>Este complejo de 6 salas se complementa excelentemente bien con los locales comerciales y\r\n                        especialmente gastronómicos del Shopping Las Toscas, dentro del cual se encuentra funcionando,\r\n                        brindando al espectador la posibilidad de disfrutar de una salida completa dentro del mismo\r\n                        ámbito.</p>\r\n\r\n                    <p>Es de destacar que todas las salas poseen la mejor tecnología de proyección, sonido digital y\r\n                        salas con proyección digital 2D y 3D.</p>\r\n\r\n                    <p>En septiembre de 2019 Cine en cartelera Canning instaló en su sala\r\n                        N°1 el primer proyector de\r\n                        cine en\r\n                        Argentina con tecnología Láser 4K RGB. Un sistema que ofrece mejor definición a la experiencia\r\n                        visual, una innovación en la industria del cine argentino. Recomendación especial para los\r\n                        espectadores que buscan nuevas experiencias y sensaciones, esta sala le ofrece al cliente\r\n                        calidad de proyección única que a la fecha no existe en el país. Hoy no todos los films poseen\r\n                        calidad necesaria para exhibirse en Láser 4K, se espera únicamente para los estrenos\r\n                        importantes. La primera película exhibida en este formato fue “Guasón” con fecha de estreno 3 de\r\n                        octubre de 2019.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3273.986876791956!2d-58.50665102551991!3d-34.8565570708929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd13e3bc7b6c7%3A0xd9970de89e32ab48!2sLas%20Toscas%20Canning%20Shopping!5e0!3m2!1ses-419!2sar!4v1697828719853!5m2!1ses-419!2sar', 'imagenes/establecimiento_cine_complejos.jpeg'),
(2, 'Puerto Madero', 'Formosa 653 Puerto Madero, (Shopping Puerto)', '    <p>Este complejo está ubicado en Puerto Madero, Buenos Aires</p>\r\n\r\n                    <p>Este complejo de 6 salas se complementa excelentemente bien con los locales comerciales y\r\n                        especialmente gastronómicos del Shopping Puerto, dentro del cual se encuentra funcionando,\r\n                        brindando al espectador la posibilidad de disfrutar de una salida completa dentro del mismo\r\n                        ámbito.</p>\r\n\r\n                    <p>Es de destacar que todas las salas poseen la mejor tecnología de proyección, sonido digital y\r\n                        salas con proyección digital 2D y 3D.</p>\r\n\r\n                    <p>En septiembre de 2019 Cine en cartelera Puerto Madero instaló en su\r\n                        sala N°1 el primer proyector de\r\n                        cine en\r\n                        Argentina con tecnología Láser 4K RGB. Un sistema que ofrece mejor definición a la experiencia\r\n                        visual, una innovación en la industria del cine argentino. Recomendación especial para los\r\n                        espectadores que buscan nuevas experiencias y sensaciones, esta sala le ofrece al cliente\r\n                        calidad de proyección única que a la fecha no existe en el país. Hoy no todos los films poseen\r\n                        calidad necesaria para exhibirse en Láser 4K, se espera únicamente para los estrenos\r\n                        importantes. La primera película exhibida en este formato fue “Guasón” con fecha de estreno 3 de\r\n                        octubre de 2019.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52538.06130269082!2d-58.39346883021903!3d-34.6135460840105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334d9c2d70389%3A0xe7b5e9ee316678f!2sPuerto%20Madero%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1697830127469!5m2!1ses-419!2sar', 'imagenes/establecimiento_cine_complejos2.jpeg'),
(3, 'Lomas de Zamora', 'Formosa 653 Lomas de zamora, (Shopping Lomas)', '<p>Este complejo está ubicado en Lomas de zamora</p>\r\n\r\n                    <p>Este complejo de 6 salas se complementa excelentemente bien con los locales comerciales y\r\n                        especialmente gastronómicos del Shopping Lomas, dentro del cual se encuentra funcionando,\r\n                        brindando al espectador la posibilidad de disfrutar de una salida completa dentro del mismo\r\n                        ámbito.</p>\r\n\r\n                    <p>Es de destacar que todas las salas poseen la mejor tecnología de proyección, sonido digital y\r\n                        salas con proyección digital 2D y 3D.</p>\r\n\r\n                    <p\">En septiembre de 2019 Cine en cartelera Lomas de zamora instaló en\r\n                        su sala N°1 el primer proyector de\r\n                        cine en\r\n                        Argentina con tecnología Láser 4K RGB. Un sistema que ofrece mejor definición a la experiencia\r\n                        visual, una innovación en la industria del cine argentino. Recomendación especial para los\r\n                        espectadores que buscan nuevas experiencias y sensaciones, esta sala le ofrece al cliente\r\n                        calidad de proyección única que a la fecha no existe en el país. Hoy no todos los films poseen\r\n                        calidad necesaria para exhibirse en Láser 4K, se espera únicamente para los estrenos\r\n                        importantes. La primera película exhibida en este formato fue “Guasón” con fecha de estreno 3 de\r\n                        octubre de 2019.</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104884.38524498683!2d-58.56749999688322!3d-34.764734926213805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd261abf8fb75%3A0xd3b4119f62723032!2sLomas%20de%20Zamora%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1697830055879!5m2!1ses-419!2sar', 'imagenes/establecimiento_cine_complejos3.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_entrada`
--

CREATE TABLE `compra_entrada` (
  `id_compra` int(11) NOT NULL,
  `cant_entradas` int(11) NOT NULL,
  `precio_total` float NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_funcion` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_funcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_redes`
--

CREATE TABLE `contacto_redes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto_redes`
--

INSERT INTO `contacto_redes` (`id`, `nombre`, `link`) VALUES
(1, 'Whatsapp: +54 11 3957-3564', ''),
(2, 'Instagram: cine_en_cartelera_ok', ''),
(3, 'X: cine_en_cartelera_x', ''),
(4, 'Tik-tok: cine_en_cartelera_tt', ''),
(5, 'Mail: cineencartelera@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_beneficio`
--

CREATE TABLE `entrada_beneficio` (
  `id` int(11) NOT NULL,
  `id_beneficio` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id_formato` int(11) NOT NULL,
  `nombre_formato` varchar(100) NOT NULL,
  `precio_base` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`id_formato`, `nombre_formato`, `precio_base`) VALUES
(1, '2D', 1500),
(2, '3D', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_funcion` int(11) NOT NULL,
  `horario_entrada` varchar(100) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `dia` varchar(500) NOT NULL,
  `formato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_funcion`, `horario_entrada`, `id_sala`, `id_pelicula`, `dia`, `formato`) VALUES
(1, '16:00hs', 1, 1, '2024-10-28', '3D'),
(2, '16:00hs', 2, 6, '2024-10-02', '3D'),
(4, '16:00hs', 5, 18, '2024-10-03', '2D'),
(5, '18:00hs', 9, 24, '2024-10-04', '3D'),
(6, '20:00hs', 8, 17, '2024-10-05', '2D'),
(7, '15:00hs', 4, 5, '2024-10-06', '3D'),
(8, '20:00hs', 8, 17, '2024-10-07', '3D'),
(9, '20:00hs', 8, 17, '2024-10-08', '3D'),
(72, '18:00hs', 7, 1, '2023-11-27', '3D'),
(73, '19:00hs', 6, 17, '2023-12-28', '3D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora`) VALUES
(1, '12:00hs'),
(2, '13:00hs'),
(3, '14:00hs'),
(4, '15:00hs'),
(5, '16:00hs'),
(6, '17:00hs'),
(7, '18:00hs'),
(8, '19:00hs'),
(9, '20:00hs'),
(10, '21:00hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_notificacion` int(11) NOT NULL,
  `nombre_notificacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `nombre_notificacion`, `descripcion`) VALUES
(1, '¡Nuevos estrenos!', 'Hemos agregado nuevas películas a la cartelera, no te lo pierdas.'),
(2, 'notificacion test', 'jhhkjkhk'),
(3, 'Nueva promoción', 'Paga 2 entradas por  el precio de una'),
(4, 'notificacion test', 'se cambio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas_barra_navegacion`
--

CREATE TABLE `paginas_barra_navegacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `archivo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paginas_barra_navegacion`
--

INSERT INTO `paginas_barra_navegacion` (`id`, `nombre`, `archivo`) VALUES
(1, 'CARTELERA', 'inicio.php'),
(2, 'COMPLEJOS', 'complejos.php'),
(3, 'PRECIOS', 'precios.php'),
(4, 'CONTACTO', 'contacto.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `nombre_pelicula` varchar(200) NOT NULL,
  `duracion` varchar(100) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `nombre_imagen` varchar(100) DEFAULT NULL,
  `sinopsis` varchar(5000) NOT NULL,
  `genero` varchar(500) NOT NULL,
  `formatos` varchar(500) NOT NULL DEFAULT '2D y 3D',
  `idiomas` varchar(500) NOT NULL DEFAULT 'Español',
  `esEstreno` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `nombre_pelicula`, `duracion`, `fecha_estreno`, `fecha_baja`, `nombre_imagen`, `sinopsis`, `genero`, `formatos`, `idiomas`, `esEstreno`) VALUES
(1, 'Argentina 1985', '1 hora y 30 minutos', '2022-10-21', '2023-12-23', 'imagenes/argentina1985_cartelera.jpg', 'Argentina, 1985 es una película dirigida por Santiago Mitre que narra el juicio a las Juntas Militares que cometieron crímenes de lesa humanidad durante la última dictadura militar argentina. Los protagonistas son los fiscales Julio Strassera y Luis Moreno Ocampo, que se enfrentaron al desafío de investigar y acusar a los responsables del terrorismo de Estado. La película combina el drama con el humor para retratar un hecho histórico de gran relevancia.', 'Drama', '2D y 3D', 'Español', 'no'),
(2, 'Barbie', '1 hora y 55 minutos', '2023-08-08', '2023-12-15', 'imagenes/barbie_cartelera.jpg', 'Esta comedia familiar de aventuras es una adaptación al cine sobre una de las muñecas de juguete más famosas del mundo. Barbie (Margot Robbie) lleva una vida ideal en Barbieland, allí todo es perfecto, con chupi fiestas llenas de música y color, y todos los días son el mejor día. Claro que Barbie se hace algunas preguntas, cuestiones bastante incómodas que no encajan con el mundo idílico en el que ella y las demás Barbies viven. Cuando Barbie se dé cuenta de que es capaz de apoyar los talones en el suelo, y tener los pies planos, decidirá calzarse unos zapatos sin tacones y viajar hasta el mundo real. Su compañero Ken (Ryan Gosling) irá con ella, juntos descubrirán cómo es el mundo de verdad. Claro que cuando el CEO de Mattel (Will Ferrell) sepa que Barbie ha escapado de Barbieland, evitará a toda costa la catástrofe y querrá devolver de nuevo a esta muñeca de juguete a una caja', 'Comedia,Aventura', '2D y 3D', 'Español', 'no'),
(3, 'Cacería en Venecia', '1 hora y 20 minutos', '2023-09-14', '2023-12-01', 'imagenes/caceria_en_venecia_cartelera.jpg', 'CACERÍA EN VENECIA está ambientada en la espeluznante Venecia posterior a la II Guerra Mundial, en la víspera de Todos los Santos, y es un misterio terrorífico que supone el regreso del célebre detective Hércules Poirot. Ya retirado y viviendo en un exilio autoimpuesto en la ciudad más glamorosa del mundo, Poirot asiste a regañadientes a una sesión de espiritismo en un palacio decadente y encantado. Cuando uno de los invitados es asesinado, el detective se ve inmerso en un siniestro mundo de sombras y secretos.', 'Suspenso', '2D y 3D', 'Español', 'no'),
(4, 'El Conformista', '2 horas y 20 minutos', '2023-09-28', '2023-12-04', 'imagenes/el_conformista_cartelera.jpg', 'El conformista es una película que narra la vida de un hombre que busca la normalidad y la integración social en la Italia fascista de Mussolini. Marcello es un hombre débil y reprimido, que oculta su verdadera felicidad y su pasado traumático. Para ser aceptado, se convierte en un espía y un asesino, traicionando a sus amigos y a sus ideales. La película muestra la complejidad y la falsedad de su personalidad a través de una estética exuberante y visual.', 'Drama', '2D y 3D', 'Español', 'no'),
(5, 'Elementos', '1 hora', '2023-06-15', '2023-12-23', 'imagenes/elemental_cartelera.jpg', 'En \"Elementos\", Disney y Pixar forjan una vez más una alianza mágica y desbordante de diversión en una nueva producción animada. Ciudad Elemento se convierte en el escenario vibrante donde cohabitan seres imbuidos del fuego, agua, tierra y aire, desatando un fascinante espectáculo de elementos en equilibrio. Acompañamos a Ember Lumen, una chispeante entidad de fuego encarnada por Leah Lewis, y a Wade Ripple, encarnación líquida de Mamoudou Athie, quien fluye como el agua a su lado. Tras un encuentro de hilarante complicidad, estos dos protagonistas emprenden una intrépida misión conjunta en pos de descifrar un misterio que amenaza a la vecindad de llamas ardientes. Sin embargo, más allá de las incandescentes aventuras que los aguardan, lo que verdaderamente importa es el lazo único que se forja entre ellos, pues est a historia rebosa de emociones sinceras que abordan el amor, el crecimiento y la aceptación con una profundidad conmovedora. Prepárate para sumergirte en una tr avesía animada donde el fuego y el agua entrelazan sus destinos de forma inolvidable.', 'Acción,Aventura,Animación', '2D y 3D', 'Español', 'no'),
(6, 'El exorcista 2023', '2 horas', '2023-10-06', '2023-12-20', 'imagenes/el_exorcista_cartelera.jpg', 'En relación con la trama, esta sigue la historia de Victor Fielding (Leslie Odom Jr, “Hamilton” 2020), quien, en consecuencia de un terremoto en Haití, perdería a su esposa, por lo cual, criaría solo a su hija Angela (Lidya Jewett, “Cuentos al caer la noche” 2020). Sin embargo, todo se vuelve caótico cuando extraños sucesos comienzan a presentarse, después de que Ángela y su amiga Katherine (Olivia Marcum) desaparecen en el bosque durante tres días sin recordar nada de lo que habría sucedido. De tal modo que, Víctor está en la obligación de confrontar al mal y los eventos demoníacos que envuelven a su hija y, además, buscar la ayuda de la única persona que habría vivido algo así antes; es decir, Chris McNeil (Ellen Burstyn “El Exorcista” 1973).', 'Terror', '2D y 3D', 'Español', 'no'),
(7, 'Five nigths at Freddy s', '1 hora y 20 minutos', '2023-10-27', '2023-12-31', 'imagenes/five_nigths_cartelera.jpg', 'La película de Five Nights at Freddy\'s sigue a un guardia de seguridad que comienza a trabajar en Freddy Fazbear\'s Pizza. Mientras pasa su primera noche en el trabajo, se da cuenta de que el turno de noche en Freddy\'s no será tan fácil de superar. Basada en el popular videojuego de terror, la película muestra cómo los animatrónicos se mueven por la noche y matan a cualquiera que vean.', 'Terror', '2D y 3D', 'Español', 'no'),
(8, 'Flash', '1 hora y 50 minutos', '2023-06-15', '2023-11-30', 'imagenes/flash_cartelera.jpg', 'Los mundos chocan en The Flash cuando Barry utiliza sus superpoderes para viajar en el tiempo y cambiar los acontecimientos del pasado. Barry intenta salvar a su familia, pero sin saberlo altera el futuro y queda atrapado en una realidad en la que el general Zod ha regresado y amenaza con la aniquilación, pero en la que no hay Superhéroes a los que recurrir. A menos que Barry pueda persuadir a un Batman muy diferente para que salga de su retiro y rescate a un kryptoniano encarcelado… aunque no sea el que está buscando. En última instancia, para salvar el mundo en el que se encuentra y regresar al futuro que conoce, la única esperanza de Barry es luchar por seguir vivo. Pero ¿este último sacrificio será suficiente para reiniciar el universo?', 'Superheroés,Acción,Aventura', '2D y 3D', 'Español', 'no'),
(9, 'La monja 2', '2 horas y 20 minutos', '2023-09-08', '2023-11-29', 'imagenes/la_monja2_cartelera.jpg', 'La monja 2 es una película de terror que forma parte del universo de El Conjuro. La historia se sitúa en 1956 en Francia, donde la hermana Irene (Taissa Farmiga) tiene que enfrentarse de nuevo a Valak, una entidad demoníaca que se manifiesta como una monja. Valak ha asesinado a un sacerdote y amenaza con extender el mal por el mundo. Irene tendrá que usar su fe y su valor para detenerla.', 'Terror', '2D y 3D', 'Español', 'no'),
(10, 'Oppenheimer', '3 horas y 20 minutos', '2023-11-21', '2023-12-31', 'imagenes/openhaimer_cartelera.jpg', 'Openheimer es un drama biográfico que se centra en la vida del científico estadounidense J. Robert Oppenheimer y su papel en el Proyecto Manhattan, como desarrollador de la bomba atómica. En tiempos de guerra, Oppenheimer lidera los ensayos nucleares para construir la bomba atómica para su país. Impactado por su poder destructivo, Oppenheimer se cuestiona las consecuencias morales de su creación.', 'Drama,Biografía,Historico', '2D y 3D', 'Español', 'no'),
(11, 'PAW Patrol', '1 hora', '2023-09-28', '2023-11-29', 'imagenes/pow_patrol_cartelera.jpg', 'Cuando una científica loca, atrae con un imán de meteoritos una roca espacial llena de cristales mágicos, la patrulla de cachorros adquirirá poderes y deberán enfrentar a la científica loca Vee Vance, a su archirrival, el corrupto alcalde Humdinger y descubrir en el camino que, para ser valiosos y amados, no necesitamos ningún tipo de súper poder, si no, aceptarnos y armarnos a nosotros mismos, tal y como somos, además de por supuesto, salvar Adventure City de ser destruida.', 'Animación,Aventura', '2D y 3D', 'Español', 'no'),
(12, 'Saw X', '1 hora y 58 minutos', '2023-09-28', '2023-12-26', 'imagenes/saw_cartelera.jpg', 'Situada entre los sucesos de Saw y Saw II, vemos como el enfermo y desesperado John se dirige hacia México para someterse a un tratamiento experimental con la esperanza de curarse de su cáncer diagnosticado como mortal. El proceso se vende como algo muy arriesgado y costoso, pero siente que ya nada tiene que perder. Sin embargo, se dará cuenta de su error viendo cómo toda la operación es un fraude para explotar a aquellos en posición más vulnerable. Ahora sí que no tiene nada que perder, y John, lleno de rabia, se lanza hacia un nuevo y tenebroso propósito, retomando su tarea como asesino en serie para darle su merecido a los timadores. Bajo la incisiva mirada de Jigsaw, estos embaucadores se verán atrapados en un visceral y despiadado juego lleno de trampas ingeniosas, tortuosas y mortales.', 'Terror', '2D y 3D', 'Español', 'no'),
(13, 'Scream 6', '1 hora y 20 minutos', '2023-03-09', '2023-11-29', 'imagenes/scream_cartelera.jpg', 'Tras los últimos asesinatos de Ghostface, sus cuatro supervivientes dejan atrás Woodsboro y comienzan un nuevo capítulo en Nueva York. Sin embargo, el pasado no está enterrado y todos ellos deberán enfrentarse a sus traumas y demonios de nuevo. Un nuevo Ghostface las ha seguido hasta la Gran Manzana, y aunque nuestras protagonistas desconocen si es el mis mo que las atacó en Woodsboro, queda claro que sabe quiénes son y que tiene un plan para matarlos a todos', 'Terror', '2D y 3D', 'Español', 'no'),
(14, 'Sonido de la libertad', '1 hora y 20 minutos', '2023-08-31', '2023-11-30', 'imagenes/sonido_de_libertad_cartelera.jpg', '«Sonido de Libertad» nos sumerge en un mundo oscuro y peligroso donde la trata de personas y la explotación infantil están a la orden del día. Tim Ballard, interpretado por Jim Caviezel, es un hombre valiente y decidido que se adentra en este submundo para rescatar a los niños que están atrapados en él. La película sigue su viaje lleno de desafíos y peligros, mostrando la determinación inquebrantable de Ballard por liberar a los más vulnerables.', 'Drama, Basada en hechos reales', '2D y 3D', 'Español', 'no'),
(15, 'Spider-man across the Spider verse', '1 hora y 20 minutos', '2023-06-01', '2023-11-22', 'imagenes/spiderman_cartelera.jpg', 'Miles Morales regresa para el siguiente capítulo de la saga ganadora de un Óscar, Spider-Verso, una aventura épica que transportará al amigable vecino Spider-Man de Brooklyn a través del multiverso para que una fuerzas con Gwen Stacy y un nuevo equipo de Spider-gente en aras de combatir a un villano más poderoso que cualquier cosa a la que se hayan enfrentado jamás', 'Superheroés,Animación,Aventura', '2D y 3D', 'Español', 'no'),
(16, 'Tortugas Ninjas Caos Mutante', '1 hora y 20 minutos', '2023-08-17', '2023-11-18', 'imagenes/tortugas_ninja_caos_mutante_cartelera.jpg', 'Después de años de estar protegidos del mundo humano, estos hermanos se propusieron ganarse los corazones de los neoyorquinos y ser aceptados como adolescentes normales realizando actos heroicos. Su nueva amiga April O\'Neil les ayudará a enfrentarse a un misterioso sindicato del crimen, pero pronto intentarán desequilibrarlos desatando un ejército de mutantes sobre ellos.', 'Aventura, Superheroés, Acción, Animación', '2D y 3D', 'Español', 'no'),
(17, 'EL JUSTICIERO 3', '2 horas', '2023-09-21', '2023-11-30', 'imagenes/eljusticiero.webp', '', '', '2D y 3D', 'Español', 'si'),
(18, 'LOS JUEGOS DEL HAMBRE', '2 horas y 30 minutos', '2023-11-16', '2024-01-01', 'imagenes/los_juegos_del_hambre_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(19, 'AQUAMAN 2', '1 hora y 40 minutos', '2023-12-22', '2024-01-12', 'imagenes/aquaman2_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(20, 'TRANSFORMERS', '3 horas', '2023-06-09', '2023-12-29', 'imagenes/transformers_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(21, 'EL DUELO', '2 horas y 30 minutos', '2023-10-12', '2023-12-28', 'imagenes/elduelo.png', '', '', '2D y 3D', 'Español', 'si'),
(22, 'MILAGRO', '2 horas', '2023-09-05', '2023-11-30', 'imagenes/milagro.jpg', '', '', '2D y 3D', 'Español', 'si'),
(23, 'THE MARVELS', '1 hora y 20 minutos', '2023-11-09', '2023-12-29', 'imagenes/the_marvels_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(24, 'AFTER PARA SIEMPRE', '2 horas', '2023-11-03', '2023-12-29', 'imagenes/after_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(25, 'BLUE BETTLE', '1 hora y 50 minutos', '2023-08-18', '2023-11-23', 'imagenes/bluebettle_proximamente.jpg', '', '', '2D y 3D', 'Español', 'si'),
(31, 'Viernes 13', '1 hora', '2023-01-01', '2023-01-01', 'imagenes/viernes13.jpeg', 'vielne 13', 'Drama fulbo', '3d y 2d', 'Español', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_categoria`
--

CREATE TABLE `pelicula_categoria` (
  `id` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pelicula_categoria`
--

INSERT INTO `pelicula_categoria` (`id`, `id_pelicula`, `id_categoria`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 4, 1),
(6, 6, 5),
(7, 5, 6),
(8, 5, 7),
(9, 5, 3),
(10, 7, 5),
(11, 8, 6),
(12, 8, 3),
(13, 8, 8),
(14, 9, 5),
(15, 10, 1),
(16, 10, 9),
(17, 10, 10),
(18, 11, 7),
(19, 11, 3),
(20, 12, 5),
(21, 14, 1),
(22, 14, 11),
(23, 15, 6),
(24, 15, 8),
(25, 15, 3),
(26, 16, 7),
(27, 16, 3),
(28, 16, 8),
(29, 13, 5),
(30, 24, 12),
(31, 19, 12),
(32, 25, 12),
(33, 21, 12),
(34, 17, 12),
(35, 18, 12),
(36, 22, 12),
(37, 23, 12),
(38, 20, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `descripcion_permiso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `descripcion_permiso`) VALUES
(1, 'Agregar nueva película'),
(2, 'Editar película'),
(3, 'Eliminar película'),
(4, 'Crear nueva función'),
(5, 'Editar función'),
(6, 'Eliminar función'),
(7, 'Crear nueva sala'),
(8, 'Editar sala'),
(9, 'Eliminar sala'),
(10, 'Agregar asiento'),
(11, 'Quitar asiento'),
(12, 'Crear beneficio'),
(13, 'Editar beneficio'),
(14, 'Eliminar beneficio'),
(15, 'Crear notificación'),
(16, 'Editar notificación'),
(17, 'Eliminar notificación'),
(18, 'Registrar usuario gerente'),
(19, 'Registrar usuario administrador'),
(20, 'Dar de baja usuario'),
(21, 'Editar perfil de usuario gerente'),
(22, 'Ver notificaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

CREATE TABLE `rol_permisos` (
  `id` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_permisos`
--

INSERT INTO `rol_permisos` (`id`, `id_tipo_usuario`, `id_permiso`) VALUES
(1, 2, 20),
(2, 2, 21),
(3, 2, 19),
(4, 2, 18),
(5, 3, 10),
(6, 3, 1),
(7, 3, 12),
(8, 3, 15),
(9, 3, 4),
(10, 3, 7),
(11, 3, 13),
(12, 3, 5),
(13, 3, 16),
(14, 3, 2),
(15, 3, 8),
(16, 3, 11),
(17, 1, 22),
(18, 3, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(11) NOT NULL,
  `cant_asientos` int(11) NOT NULL,
  `estado_disponible` tinyint(1) NOT NULL,
  `id_complejo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id_sala`, `cant_asientos`, `estado_disponible`, `id_complejo`) VALUES
(1, 70, 1, 1),
(2, 80, 1, 1),
(3, 90, 1, 1),
(4, 70, 1, 2),
(5, 80, 1, 2),
(6, 90, 1, 2),
(7, 70, 1, 3),
(8, 80, 1, 3),
(9, 90, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala_precio`
--

CREATE TABLE `sala_precio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala_precio`
--

INSERT INTO `sala_precio` (`id`, `nombre`, `precio`) VALUES
(1, '2D', 1500),
(2, '3D', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobre_nosotros`
--

CREATE TABLE `sobre_nosotros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `archivo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sobre_nosotros`
--

INSERT INTO `sobre_nosotros` (`id`, `nombre`, `archivo`) VALUES
(2, 'Terminos y condiciones', 'terminos.php'),
(4, 'Preguntas frecuentes', 'preguntasfrecuentes.php'),
(5, 'Cartelera', 'inicio.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `complejo` varchar(500) NOT NULL,
  `formato` varchar(200) NOT NULL,
  `dia` date NOT NULL,
  `horario` varchar(200) NOT NULL,
  `pelicula` varchar(500) NOT NULL,
  `cantidad_boletos` int(11) NOT NULL,
  `precio_unitario` float NOT NULL,
  `precio_compra` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id`, `id_usuario`, `complejo`, `formato`, `dia`, `horario`, `pelicula`, `cantidad_boletos`, `precio_unitario`, `precio_compra`) VALUES
(17, 1, 'Canning', '1', '2024-10-04', '18:00hs', 'AFTER', 4, 2000, 8000),
(18, 2, 'Canning', '3D', '2024-10-06', '15:00hs', 'Elementos', 3, 2000, 6000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre_tipo_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre_tipo_usuario`) VALUES
(1, 'Cliente'),
(2, 'Administrador'),
(3, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nro_telefono` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `nombre`, `apellido`, `nro_telefono`, `fecha_nacimiento`, `genero`, `id_tipo_usuario`) VALUES
(1, 'clienteTest@gmail.com', 'clienteTest1', 'cliente', 'test', '123456789', '2015-10-14', 'Masculino', 1),
(2, 'gerenteTest@gmail.com', 'gerenteTest', 'gerente', 'test', '123456789', '2003-11-04', 'Masculino', 3),
(3, 'adminTest@gmail.com', 'adminTest', 'admin', 'test', '123456789', '2004-11-10', 'Maculino', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `id_usuario_rol` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`id_usuario_rol`, `id_usuario`, `id_tipo_usuario`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficio`
--
ALTER TABLE `beneficio`
  ADD PRIMARY KEY (`id_beneficio`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `complejo`
--
ALTER TABLE `complejo`
  ADD PRIMARY KEY (`id_complejo`);

--
-- Indices de la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_funcion` (`id_funcion`);

--
-- Indices de la tabla `contacto_redes`
--
ALTER TABLE `contacto_redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_beneficio` (`id_beneficio`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_funcion`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_pelicula` (`id_pelicula`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_notificacion`);

--
-- Indices de la tabla `paginas_barra_navegacion`
--
ALTER TABLE `paginas_barra_navegacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelicula` (`id_pelicula`),
  ADD KEY `id_genero` (`id_categoria`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD KEY `id_complejo` (`id_complejo`);

--
-- Indices de la tabla `sala_precio`
--
ALTER TABLE `sala_precio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sobre_nosotros`
--
ALTER TABLE `sobre_nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`id_usuario_rol`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `beneficio`
--
ALTER TABLE `beneficio`
  MODIFY `id_beneficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `complejo`
--
ALTER TABLE `complejo`
  MODIFY `id_complejo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_redes`
--
ALTER TABLE `contacto_redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `id_funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paginas_barra_navegacion`
--
ALTER TABLE `paginas_barra_navegacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sala_precio`
--
ALTER TABLE `sala_precio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sobre_nosotros`
--
ALTER TABLE `sobre_nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  MODIFY `id_usuario_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_entrada`
--
ALTER TABLE `compra_entrada`
  ADD CONSTRAINT `compra_entrada_ibfk_2` FOREIGN KEY (`id_funcion`) REFERENCES `funcion` (`id_funcion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_entrada_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada_beneficio`
--
ALTER TABLE `entrada_beneficio`
  ADD CONSTRAINT `entrada_beneficio_ibfk_1` FOREIGN KEY (`id_beneficio`) REFERENCES `beneficio` (`id_beneficio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrada_beneficio_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `compra_entrada` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `funcion_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `funcion_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pelicula_categoria`
--
ALTER TABLE `pelicula_categoria`
  ADD CONSTRAINT `pelicula_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelicula_categoria_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `rol_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permiso` (`id_permiso`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_permisos_ibfk_2` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`id_complejo`) REFERENCES `complejo` (`id_complejo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `usuario_rol_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_rol_ibfk_2` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
