/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS produto;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nome` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imagem` blob DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `fornecedor` varchar(300) DEFAULT NULL,
  `codFiscal` varchar(50) DEFAULT NULL,
  `CodBarra` varchar(10) DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO produto(id,nome,descricao,imagem,categoria,estoque,peso,valor,validade,fornecedor,codFiscal,CodBarra,alteracao) VALUES('3','\'Coca Cola\'','\'Coca cola 350ML\'','X\'\'','\'1\'','1','300','\'4.99\'','\'2024-01-10\'','\'coca\'','\'147852369\'','\'1236547891\'','\'2024-02-05 11:41:05\''),('4','\'Danta\'','\'Lata de refrigentante sabor laranja\'','X\'\'','\'Selecione a categoria do seu produto\'','1','300','\'5.99\'','\'2024-02-02\'','\'Coca\'','\'123654789\'','\'159874632\'','\'2024-02-06 08:06:10\'');