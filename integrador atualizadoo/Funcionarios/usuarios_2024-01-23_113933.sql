/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS usuario;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO usuario(id,nome,cpf,email,nascimento,telefone,cidade,bairro,rua,numero,cep) VALUES('1','\'Rodrigo\'','\'11111111111\'','\'ewrwobriwq@gmail.com\'','NULL','\'19971388368\'','\'Americana\'','\'Jardim da Paz\'','\'Aliança \'','\'156\'','\'13470492\''),('2','\'Rodrigo\'','\'11111111111\'','\'ewrwobriwq@gmail.com\'','NULL','\'19971388368\'','\'Americana\'','\'Jardim da Paz\'','\'Aliança \'','\'156\'','\'13470492\''),('3','\'Rodrigo\'','\'11111111111\'','\'ewrwobriwq@gmail.com\'','NULL','\'19971388368\'','\'Americana\'','\'Jardim da Paz\'','\'Aliança \'','\'156\'','\'13470492\''),('4','\'Rodrigo\'','\'11111111111\'','\'ewrwobriwq@gmail.com\'','NULL','\'19971388368\'','\'Americana\'','\'Jardim da Paz\'','\'Aliança \'','\'156\'','\'13470492\''),('5','\'Rodrigo\'','\'11111111111\'','\'ewrwobriwq@gmail.com\'','NULL','\'19971388368\'','\'Americana\'','\'Jardim da Paz\'','\'Aliança \'','\'156\'','\'13470492\'');