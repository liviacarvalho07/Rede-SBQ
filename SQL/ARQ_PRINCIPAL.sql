CREATE TABLE TIPOS_INST(
	ID INTEGER PRIMARY KEY,
    NOME_TIPO VARCHAR(30) NOT NULL
);

CREATE TABLE NIVEL_FORMACAO(
	ID INTEGER PRIMARY KEY
);

CREATE TABLE INSTITUICOES_GERAIS(
	ID INTEGER PRIMARY KEY,
    NOME_INSTITUICAO VARCHAR(300) NOT NULL,
    TIPO_INSTITUICAO VARCHAR(30) NOT NULL
);

CREATE TABLE cad_pessoal (
	id INTEGER PRIMARY KEY,
    nome_pessoal Varchar(255) NOT NULL,
    email_pessoal VARCHAR(255) NOT NULL,
    ESTADO VARCHAR(50) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    NIVEL_FORMACAO VARCHAR(50) NOT NULL,
    INSTITUICAO_FORMACAO VARCHAR(300) NOT NULL,
    INSTITUICAO_ATUACAO VARCHAR(300) NOT NULL,
    VALIDACAO VARCHAR(50) NOT NULL,
    SENHA VARCHAR(255) NOT NULL,
    CODIGO VARCHAR(255) NOT NULL
);

CREATE TABLE cad_pessoal (
	id INTEGER PRIMARY KEY,
    nome_pessoal Varchar(255) NOT NULL,
    email_pessoal VARCHAR(255) NOT NULL,
    ESTADO VARCHAR(50) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    NIVEL_FORMACAO VARCHAR(50) NOT NULL,
    INSTITUICAO_FORMACAO VARCHAR(300) NOT NULL,
    INSTITUICAO_ATUACAO VARCHAR(300) NOT NULL,
    VALIDACAO VARCHAR(50) NOT NULL,
    SENHA VARCHAR(255) NOT NULL,
    CODIGO VARCHAR(255) NOT NULL
);

CREATE TABLE cad_funcional (
    id INTEGER PRIMARY KEY,
    nome_funcional VARCHAR(255) NOT NULL,
    email_funcional VARCHAR(255) NOT NULL,
    ESTADO VARCHAR(50) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    NIVEL_FORMACAO VARCHAR(50) NOT NULL,
    INSTITUICAO_FORMACAO VARCHAR(300) NOT NULL,
    INSTITUICAO_ATUACAO VARCHAR(300) NOT NULL,
    VALIDACAO VARCHAR(50) NOT NULL,
    SENHA VARCHAR(255) NOT NULL,
    CODIGO VARCHAR(255) NOT NULL,
    area_atuacao VARCHAR(255) NOT NULL,
    subarea VARCHAR(255) NOT NULL,
    especialidade VARCHAR(255) NOT NULL,
    grupo_pesquisa VARCHAR(255) NOT NULL,
    posicao VARCHAR(100) NOT NULL,
    nome_coordenador VARCHAR(255) NOT NULL,
    email_coordenador VARCHAR(255) NOT NULL
);
