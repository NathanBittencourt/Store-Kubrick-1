-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para store_kubrick
CREATE DATABASE IF NOT EXISTS `store_kubrick` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `store_kubrick`;

-- Copiando estrutura para tabela store_kubrick.carrinho_compras
CREATE TABLE IF NOT EXISTS `carrinho_compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  `produto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.categoria_produto
CREATE TABLE IF NOT EXISTS `categoria_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1=Ativo; 2=Inativo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL,
  `frase` varchar(50) NOT NULL,
  `assunto` varchar(50) DEFAULT NULL,
  `mensagem` mediumtext NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.home
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL,
  `img1` varchar(250) NOT NULL DEFAULT '',
  `texto1` varchar(300) NOT NULL DEFAULT '',
  `img2` varchar(250) NOT NULL DEFAULT '',
  `texto2` varchar(300) NOT NULL DEFAULT '',
  `img3` varchar(250) NOT NULL DEFAULT '',
  `texto3` varchar(300) NOT NULL DEFAULT '',
  `img4` varchar(250) NOT NULL DEFAULT '',
  `texto4` varchar(300) NOT NULL DEFAULT '',
  `img5` varchar(250) NOT NULL DEFAULT '',
  `texto5` varchar(300) NOT NULL DEFAULT '',
  `img6` varchar(250) NOT NULL DEFAULT '',
  `texto6` varchar(300) NOT NULL DEFAULT '',
  `img7` varchar(250) NOT NULL DEFAULT '',
  `img8` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.idealizador
CREATE TABLE IF NOT EXISTS `idealizador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) DEFAULT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.paginaprodutos
CREATE TABLE IF NOT EXISTS `paginaprodutos` (
  `id` int(11) NOT NULL,
  `img1` varchar(250) DEFAULT NULL,
  `img2` varchar(250) DEFAULT NULL,
  `im3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.pagina_erro
CREATE TABLE IF NOT EXISTS `pagina_erro` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(250) NOT NULL DEFAULT '',
  `img` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(14,2) DEFAULT NULL,
  `imagem` varchar(250) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_produto_categoria_id` (`categoria_id`),
  CONSTRAINT `FK1_produto_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.quem_somos
CREATE TABLE IF NOT EXISTS `quem_somos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` longtext,
  `img1` varchar(250) DEFAULT NULL,
  `img2` varchar(250) DEFAULT NULL,
  `img3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela store_kubrick.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '2' COMMENT '1=Administrador; 2=Visitante',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
