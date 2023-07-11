#Criar o banco de dados manutencao
CREATE DATABASE manutencao;

#Acessar o banco de dados manutencao
USE manutencao;

# Criar a tabela laboratorio.
CREATE TABLE laboratorio (IDLABORATORIO INT PRIMARY KEY AUTO_INCREMENT) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
ALTER TABLE laboratorio ADD nome VARCHAR(30) NOT NULL UNIQUE;

# Criar a tabela computador.
CREATE TABLE computador (IDCOMPUTADOR INT PRIMARY KEY AUTO_INCREMENT) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
ALTER TABLE computador      ADD NOME            VARCHAR(20)     NOT NULL UNIQUE;
ALTER TABLE computador      ADD MARCA           VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD PROCESSADOR     VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD VELOCIDADE      DECIMAL(4,1)    NOT NULL;
ALTER TABLE computador      ADD RAM             INT             NOT NULL;
ALTER TABLE computador      ADD HD              INT             NOT NULL;   
ALTER TABLE computador      ADD MEDIDAHD        VARCHAR(2)      NOT NULL;              
ALTER TABLE computador      ADD SSD             INT             NOT NULL;
ALTER TABLE computador      ADD MEDIDASSD       VARCHAR(2)      NOT NULL;
ALTER TABLE computador      ADD SO              VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD VERSAOSO        VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD PLACADEVIDEO    VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD MONITOR         VARCHAR(20)     NOT NULL;
ALTER TABLE computador      ADD CONECTIVIDADE   VARCHAR(5)      NOT NULL;
ALTER TABLE computador      ADD IDLABORATORIO   INT             NOT NULL;
ALTER TABLE computador      ADD FOREIGN KEY (IDLABORATORIO) REFERENCES laboratorio (IDLABORATORIO);

# Criar tabela tipodeusuario.
CREATE TABLE tipodeusuario (IDTIPODEUSUARIO INT PRIMARY KEY AUTO_INCREMENT) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
ALTER TABLE tipodeusuario  ADD NOME           VARCHAR(20)     NOT NULL UNIQUE;

# Criar tabela usuario.
CREATE TABLE usuario (IDUSUARIO INT PRIMARY KEY AUTO_INCREMENT) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
ALTER TABLE usuario  ADD NOME                   VARCHAR(50)             NOT NULL;
ALTER TABLE usuario  ADD IDTIPODEUSUARIO        INT                     NOT NULL;
ALTER TABLE usuario  ADD FOREIGN KEY (IDTIPODEUSUARIO) REFERENCES tipodeusuario (IDTIPODEUSUARIO);
ALTER TABLE usuario  ADD SENHA                  VARCHAR(50)             NOT NULL;

# Criar tabela chamado.
CREATE TABLE chamado (IDCHAMADO INT PRIMARY KEY AUTO_INCREMENT) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
ALTER  TABLE chamado ADD DTABERTURA             DATE                           NOT NULL;
ALTER  TABLE chamado ADD IDUSUARIO              INT                            NOT NULL;
ALTER  TABLE chamado ADD IDCOMPUTADOR           INT                            NOT NULL;
ALTER  TABLE chamado ADD PROBLEMA               VARCHAR(200)                   NOT NULL;
ALTER  TABLE chamado ADD DTATENDIMENTO          DATE                                   ;
ALTER  TABLE chamado ADD HRATENDIMENTO          VARCHAR(20)                    NOT NULL; 

ALTER  TABLE chamado ADD FOREIGN KEY(IDUSUARIO) REFERENCES   usuario        (IDUSUARIO);
ALTER  TABLE chamado ADD FOREIGN KEY(IDCOMPUTADOR) REFERENCES computador (IDCOMPUTADOR);


#inserir DADOS TABELA laboratorio.
insert into laboratorio (NOME) values("Programação para Web");
insert into laboratorio (nome) values("Programação para Web");
#Select para tabela laboratorio.
SELECT IDLABORATORIO as idLaboratorio, NOME as nomeLaboratorio from laboratorio ORDER BY NOME;

+# inserir DADOS TABELA tipodeusuario
INSERT INTO tipodeusuario (NOME) VALUES("PROFESSOR");

# inserir DADOS TABELA usuarios
INSERT INTO usuario (NOME,IDTIPODEUSUARIO,SENHA) VALUES ("WAGNER",1,"123123");

# inserir DADOS TABELA computador
INSERT INTO computador
(   
    NOME, MARCA, PROCESSADOR,
    VELOCIDADE, RAM,
    HD, MEDIDAHD,
    SSD, MEDIDASSD,
    SO, VERSAOSO,
    PLACADEVIDEO, MONITOR,
    CONECTIVIDADE, IDLABORATORIO
)

VALUES
(   
    "IOT-01", "AMD",
    "RYZEN 5600G",
    3.9, 16,
    1, "TB",
    500, "GB",
    "WINDOWS", "WINDOWS 10 PRO",
    "RTX1060TI", "15",
    "WI-FI", 3
); 




# SELECTS PARA PEGARMOS OS DADOS E INSERIRMOS EM NOSSO SITE 

#'Select' TiposDeUsuários
select IDTIPODEUSUARIO as idTipodeusuario, NOME as nomeTipodeusuario from tipodeusuario order by NOME;  // dando erro // mas depois deu certo
select IDTIPODEUSUARIO, NOME from tipodeusuario order by NOME; // codigo que deu certo de primeira

#'Select' Usuarios
    "select ". 
    "usuario.IDUSUARIO AS idUsuario, ". 
    "usuario.NOME AS nomeUsuario, ". 
    "tipodeusuario.NOME AS nomeTipoDeUsuario ". 
    "from usuario ". 
    "inner join tipodeusuario on usuario.IDTIPODEUSUARIO = tipodeusuario.IDTIPODEUSUARIO ".
    "order by nomeUsuario;";

    // essa forma concatena os comandos no banco de dados, sendo mais facil para a aplicação entender o que tem que fazer

#'Select' Computadores
