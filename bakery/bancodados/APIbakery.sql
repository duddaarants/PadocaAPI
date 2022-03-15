create database padocao;

use padocao;

CREATE TABLE `paes` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `preco` decimal(4,2) NOT NULL,
  `qtde` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `paes` (`id`, `name`, `preco`, `qtde`)
VALUES (1, 'pao preto', '20.00', 3),
(2, 'ciabatta', '10.00', 5),
(3, 'brioche', '2.00', 10),
(4, 'focaccia', '5.00', 1);


ALTER TABLE `paes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `paes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;