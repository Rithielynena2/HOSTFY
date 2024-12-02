
CREATE TABLE usuario (
   id INT AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(100) NOT NULL,
   cpf VARCHAR(11) NOT NULL,
   data_nascimento DATE NOT NULL,
   endereco VARCHAR(255) NOT NULL,
   cidade VARCHAR(100) NOT NULL,
   estado VARCHAR(2) NOT NULL,
   telefone VARCHAR(15) NOT NULL,
   email VARCHAR(100) NOT NULL,
   senha VARCHAR(255) NOT NULL,
   banido TINYINT(1) DEFAULT 0 
);

INSERT INTO usuario (nome, cpf, data_nascimento, endereco, cidade, estado, telefone, email, senha, banido) VALUES ('João Silva', '12345678901', '1990-05-15', 'Rua A, 123', 'São Paulo', 'SP', '1198765-4321', 'joao@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Maria Oliveira', '23456789012', '1985-08-20', 'Avenida B, 456', 'Rio de Janeiro', 'RJ', '2199876-5432', 'maria@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Carlos Pereira', '34567890123', '1992-11-30', 'Rua C, 789', 'Belo Horizonte', 'MG', '3191234-5678', 'carlos@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Ana Costa', '45678901234', '1988-03-22', 'Praça D, 101', 'Curitiba', 'PR', '4193456-7890', 'ana@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Pedro Souza', '56789012345', '1995-01-12', 'Rua E, 202', 'Fortaleza', 'CE', '8593456-1234', 'pedro@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0);

senhas: 12345678


INSERT INTO usuario (nome, cpf, data_nascimento, endereco, cidade, estado, telefone, email, senha, banido) VALUES ('João Silva', '12345678901', '1990-05-15', 'Rua A, 123', 'São Paulo', 'SP', '1198765-4321', 'joao@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Maria Oliveira', '23456789012', '1985-08-20', 'Avenida B, 456', 'Rio de Janeiro', 'RJ', '2199876-5432', 'maria@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Carlos Pereira', '34567890123', '1992-11-30', 'Rua C, 789', 'Belo Horizonte', 'MG', '3191234-5678', 'carlos@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Ana Costa', '45678901234', '1988-03-22', 'Praça D, 101', 'Curitiba', 'PR', '4193456-7890', 'ana@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0), ('Pedro Souza', '56789012345', '1995-01-12', 'Rua E, 202', 'Fortaleza', 'CE', '8593456-1234', 'pedro@hotmail.com', '$2y$10$jxw6vzyLoBhMsGCsVRU29OsbCpoM7vFvDpdoePa39lInutPWLWx8m', 0);

senhas: 12345678

ADMIN - cria o registro dele

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `data_nascimento`, `endereco`, `cidade`, `estado`, `telefone`, `email`, `senha`, `banido`) VALUES ('0', 'admin', '00000000000', '0001-01-01', '', '', '', '00000000000', 'admin@admin', '$2y$10$YpHinYBv3MO3fxRH7V9HFekgeSuI.xvcY8t6vJG1T9uyWAXtqR8rq', '0');

altera o id dela para 0, porque ele não consegue fazer isso na hora da criação

UPDATE `usuario` SET `id` = '0' WHERE `usuario`.`cpf` = '00000000000';

a senha é 123456789 só em caso de alguém esquecer :D


CREATE TABLE Locador 
( 
    ID_locador INT PRIMARY KEY AUTO_INCREMENT,  
    CPF VARCHAR(11) NOT NULL,  
    Telefone VARCHAR(15) NOT NULL,  
    FOREIGN KEY (ID_locador) REFERENCES Usuario(id),
    UNIQUE (CPF)  -- Para garantir que o CPF seja único na tabela Locador
); 


CREATE TABLE Proprietario 
( 
    ID_proprietario INT PRIMARY KEY AUTO_INCREMENT,  
    CPF VARCHAR(11) NOT NULL,  
    Telefone VARCHAR(15) NOT NULL,  
    FOREIGN KEY (ID_proprietario) REFERENCES Usuario(id),
    UNIQUE (CPF)  -- Para garantir que o CPF seja único na tabela Locador
); 




CREATE TABLE Categoria 
( 
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,  
    nome_categoria VARCHAR(50) NOT NULL
); 
INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('1', 'Casa');
INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('2', 'Apartamento');
INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('3', 'Sitio');

INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('4', 'Hotel');
INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('5', 'Cabana');
INSERT INTO categoria (id_categoria, nome_categoria) VALUES ('6', 'Resort');

CREATE TABLE Checklist 
( 
    id_checklist INT PRIMARY KEY AUTO_INCREMENT,
    nome_checklist VARCHAR(50) NOT NULL
);

INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('1', 'Garagem');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('2', 'Bicicleta');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('3', 'Pet Friendly');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('4', 'Churrasqueira');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('5', 'Piscina');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('6', 'Sauna');
INSERT INTO checklist (id_checklist, nome_checklist) VALUES ('7', 'Quadra Esportiva');




CREATE TABLE Imovel 
( 
    ID_imovel INT PRIMARY KEY AUTO_INCREMENT,  
    CEP VARCHAR(8) NOT NULL,  
    Nome_imovel VARCHAR(50) NOT NULL,  
    Rua VARCHAR(50) NOT NULL,  
    Numero INT NOT NULL,  
    Bairro VARCHAR(50) NOT NULL,  
    Cidade VARCHAR(50) NOT NULL,  
    UF CHAR(2) NOT NULL,  
    ID_proprietario INT NOT NULL,  
    Valor DECIMAL(10, 2) NOT NULL,  
    Descrição VARCHAR(500) NOT NULL,  
    id_categoria INT NOT NULL,  
    id_checklist INT, RETIRAR
    Numero_pessoas INT,
    FOREIGN KEY (ID_proprietario) REFERENCES Proprietario(ID_proprietario), RETIRAR
    FOREIGN KEY (id_categoria) REFERENCES Categoria(id_categoria),
    FOREIGN KEY (id_checklist) REFERENCES Checklist(id_checklist) RETIRAR
); 
 
ALTER TABLE `imovel` ADD `imagens` VARCHAR(1500) NOT NULL AFTER `Numero_pessoas`;

INSERT INTO `imovel` (`ID_imovel`, `CEP`, `Nome_imovel`, `Rua`, `Numero`, `Bairro`, `Cidade`, `UF`, `ID_proprietario`, `Valor`, `Descrição`, `id_categoria`, `Numero_pessoas`, `imagens`) VALUES
(6, '12345678', 'Casa das Flores', 'Rua das Margaridas', 123, 'Jardim Palmeiras', 'São Paulo', 'SP', 9, 250.00, 'Casa com 3 quartos, 2 banheiros, ampla área de lazer.', 1, 6, './uploads/a3584decce0b10508737f3548d9d56b1.jpg'),
(7, '23456789', 'Casa do Sol', 'Avenida Solar', 456, 'Vila dos Ventos', 'Rio de Janeiro', 'RJ', 9, 350.00, 'Casa com 4 quartos, piscina e churrasqueira.', 1, 8, './uploads/4f92166526739eff08227ad35b3d5021.jpg'),
(8, '34567890', 'Residencial Bela Vista', 'Rua da Vista', 789, 'Centro', 'Belo Horizonte', 'MG', 9, 450.00, 'Casa ampla com 5 quartos e garagem para 4 carros.', 1, 10, './uploads/1a028411e72261e39ea68980e47db63f.jpg'),
(9, '45678901', 'Casa Verde', 'Rua das Palmeiras', 101, 'Vila Verde', 'Curitiba', 'PR', 10, 300.00, 'Casa com 3 quartos e quintal grande.', 1, 2, './uploads/e26e578c4d2085e0d588611632843dd4.jpg'),
(10, '56789012', 'Sítio dos Lagos', 'Avenida das Águas', 202, 'Vila dos Lagos', 'Fortaleza', 'CE', 10, 500.00, 'Casa de luxo com 6 quartos e vista para o lago.', 3, 12, './uploads/73c5862fdf0ea856d42f4dbc1ef193e6.jpg'),
(11, '67890123', 'Casa do Lago', 'Rua do Lago', 303, 'Lago Azul', 'Manaus', 'CE', 10, 400.00, 'Casa com 4 quartos e área externa com jardim.', 1, 6, './uploads/52c38158bb01f862d267d3814b14da75.jpg'),
(12, '12345001', 'Hostel Tropical', 'Rua do SOl', 101, 'Praia Central', 'Natal', 'RN', 8, 800.00, 'Hostel aconchegante próximo à praia, com quartos compartilhados e áreas de convivência vibrantes. Ideal para jovens viajantes em busca de socialização e experiências únicas.', 4, 20, './uploads/22c1837df0581e7de767a0b5d3587ef4.jpg'),
(13, '56789001', 'Pousadas Serenas', 'Estrada da Serra', 202, 'Vale Encantado', 'Teresópolis', 'RJ', 8, 2500.00, 'Pousada em local montanhoso, cercada por natureza exuberante. Oferece suítes confortáveis e excelente atendimento, ideal para quem busca sossego e contato com a natureza.', 5, 10, './uploads/3cfb316607aa8e15cb8c0821462173c6.jpg'),
(14, '12345002', 'Casa a Beira Mar', 'Avenida Oceânica', 303, 'Praia Bela', 'Salvador', 'BA', 11, 1500.00, 'Residência charmosa com acesso direto à praia. Vista incrível do mar, com ambientes espaçosos e ótima ventilação para momentos inesquecíveis.', 6, 6, './uploads/2987b6abcb0e92f2069fc30f0bf2b98b.jpg'),
(16, '78956001', 'Hotel Imperial', 'Rua das Palmeiras', 404, 'Centro', 'Curitiba', 'PR', 11, 4500.00, 'Hotel sofisticado no coração da cidade. Estrutura completa para turismo e negócios, com quartos luxuosos e serviços de alta qualidade.', 4, 50, './uploads/c687127463d8b16cbc4c963b4ff98747.jpg, ./uploads/00d5558132e586a2e2b5699c217fcdc6.jpg'),
(17, '34567001', 'Reserva do Paraíso', 'Alameda Verde', 505, 'Recanto Verde', 'Foz do Iguaçu', 'PR', 7, 3500.00, 'Espaço exclusivo com vista para a natureza e próximo às cataratas. Oferece tranquilidade e conforto com áreas de lazer e convivência.', 3, 15, './uploads/1c12bf11ff218b5a151059116689cdd5.jpg');





CREATE TABLE imovel_checklist (
    id int PRIMARY KEY AUTO_INCREMENT,
    id_imovel int,
    id_checklist int,
    FOREIGN KEY (id_imovel) REFERENCES imovel(id_imovel),
    FOREIGN KEY (id_checklist) REFERENCES checklist(id_checklist)
);

INSERT INTO `imovel_checklist` (`id`, `id_imovel`, `id_checklist`) VALUES
(26, 6, 1),
(27, 6, 2),
(28, 6, 3),
(29, 6, 6),
(30, 7, 4),
(31, 7, 5),
(32, 8, 1),
(33, 8, 4),
(34, 8, 5),
(35, 8, 6),
(36, 9, 2),
(37, 9, 3),
(38, 9, 4),
(39, 10, 2),
(40, 10, 4),
(41, 11, 1),
(42, 11, 2),
(43, 11, 3),
(44, 12, 1),
(45, 12, 2),
(46, 12, 4),
(47, 12, 5),
(48, 12, 6),
(49, 13, 2),
(50, 13, 4),
(51, 13, 6),
(52, 14, 1),
(53, 14, 4),
(54, 14, 6),
(55, 14, 7),
(60, 16, 1),
(61, 16, 2),
(62, 16, 4),
(63, 16, 5),
(64, 16, 6),
(65, 16, 7),
(66, 17, 1),
(67, 17, 3),
(68, 17, 4),
(69, 17, 5);
