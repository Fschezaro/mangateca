CREATE TABLE `livros` (
  `id` int not null auto_increment primary key,
  `titulo` varchar(90),
  `categoria` varchar(60),
  `autor` varchar(60),
  `editora` varchar(60),
  `tipo` varchar(60),
  `estado` tinyint(1),
  `recebido` boolean
);