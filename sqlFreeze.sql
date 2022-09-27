CREATE DATABASE freeze

USE freeze

CREATE TABLE contato
(
id int primary key auto_increment,
nome varchar(100),
email varchar(100),
assunto varchar(50),
mensagem varchar(200)
)

CREATE TABLE produto
(
descricao varchar(50) primary KEY
)

CREATE TABLE forma_pagamento
(
descricao varchar(50) primary KEY
)

CREATE TABLE encomenda
(
id int primary key auto_increment,
nome varchar(100),
telefone varchar(100),
quantidade varchar(50),
endereco_entrega varchar(100),
produto varchar(50) references produto(descricao),
pagamento varchar(50) references forma_pagamento(descricao)
)



INSERT INTO produto(descricao)
VALUES ('Picolé de ninho trufado'),('Picolé de ameixa'),
('Sorvete de amora'),('Sorvete de chocolate'),
('Sorvete de framboesa'),('Sorvete de maracujá'),
('Sorvete de morango'),('Sorvete de doce de leite'),
('Picolé de coco'),('Picolé de limão')

INSERT INTO forma_pagamento(descricao)
VALUES ('Pagamento com dinheiro'),('Pagamento com cartão de débito'),
('Pagamento com cartão de crédito'),('Pagamento com cheque')