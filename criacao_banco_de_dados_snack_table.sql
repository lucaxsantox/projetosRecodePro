CREATE TABLE `snack_table`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `preco` FLOAT(2) NULL,
  `preco_final` FLOAT(2) NULL,
  `imagem` VARCHAR(255) NULL,
  PRIMARY KEY (`idprodutos`),
  UNIQUE INDEX `imagem_UNIQUE` (`imagem` ASC));

create table tabela_de_pedidos (
id int(5) not null auto_increment primary key,
nome_do_cliente varchar (50),
endereco varchar (255),
telefone int (20),
nome_do_produto varchar(255),
valor_unitario float(2),
quantidade int(5),
valor_total float (2)
);