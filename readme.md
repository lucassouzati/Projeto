# Scripts do Banco de Dados

ANUNCIANTES

CREATE TABLE `anunciantes` (
  `idanunciante` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFantasia` varchar(45) NOT NULL,
  `razaoSocial` varchar(45) DEFAULT NULL,
  `cnpj` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL,
  `img` blob,
  PRIMARY KEY (`idanunciante`,`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1$$

AVALIACOES

CREATE TABLE `avaliacoes` (
  `idavaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `idEvento` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `avaliacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idavaliacao`,`idEvento`),
  KEY `idEvento_idx` (`idEvento`),
  KEY `idCliente3_idx` (`idUsuario`),
  CONSTRAINT `idCliente3` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idEvento3` FOREIGN KEY (`idEvento`) REFERENCES `eventos` (`idevento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

CATEGORIAS

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1$$

CLASSIFICACAO

CREATE TABLE `classificacao` (
  `idClassificacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_classif` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idClassificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1$$
 
CONFIRMADOS

CREATE TABLE `confirmados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idusuario40` (`id_usuario`),
  KEY `idevento40` (`id_evento`),
  CONSTRAINT `idevento40` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`idevento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idusuario40` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1$$

EVENTOS
CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `dataInicio` datetime DEFAULT NULL,
  `dataFim` datetime DEFAULT NULL,
  `idAnunciante` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idSubCat` int(11) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `idClassificacao` int(11) DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'CONFIRMADO',
  `valor` decimal(2,0) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `foto` blob NOT NULL,
  PRIMARY KEY (`idevento`),
  KEY `idCategoria_idx` (`idCategoria`),
  KEY `idSubCat_idx` (`idSubCat`),
  KEY `idClassificacao_idx` (`idClassificacao`),
  KEY `idAnunciante_idx` (`idAnunciante`),
  CONSTRAINT `idAnunciante` FOREIGN KEY (`idAnunciante`) REFERENCES `anunciantes` (`idanunciante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idCategoria2` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idClassificacao2` FOREIGN KEY (`idClassificacao`) REFERENCES `classificacao` (`idClassificacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idSubCat2` FOREIGN KEY (`idSubCat`) REFERENCES `subcategorias` (`idSubCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8$$

FAVORITOS
CREATE TABLE `favoritos` (
  `idfavorito` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idfavorito`),
  KEY `idUsuario_idx` (`idUsuario`),
  KEY `id_categoria` (`idCategoria`),
  CONSTRAINT `idCategoria4` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario4` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

MIGRATIONS
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci$$

LEMBRAR SENHA
delimiter $$

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci$$
PREFERENCIAS
CREATE TABLE `preferencias` (
  `idpreferencia` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpreferencia`),
  KEY `idCategoria_idx` (`idCategoria`),
  KEY `idCliente_idx` (`idUsuario`),
  CONSTRAINT `idCat` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8$$

SUBCATEGORIAS
delimiter $$

CREATE TABLE `subcategorias` (
  `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idSubCategoria`),
  KEY `idCategoria` (`idCategoria`),
  CONSTRAINT `idCategoria` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8$$

USUARIOS
delimiter $$

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `datanasc` datetime DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `logradouro` varchar(45) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `news` varchar(2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `img` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1$$
