/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS infocaixa;
CREATE TABLE `infocaixa` (
  `codVenda` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `produto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codVenda`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO infocaixa(codVenda,produto) VALUES('1','\'a\'');