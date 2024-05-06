CREATE TABLE GRUPO_PESQUISA(
	ID INTEGER PRIMARY KEY AUTO_INCREMENT,
	NOME_GRUPO_PESQUISA VARCHAR(255) NOT NULL 
);

CREATE TABLE cad_pessoal (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome_pessoal Varchar(255) NOT NULL,
    email_pessoal VARCHAR(255) NOT NULL,
    ESTADO VARCHAR(50) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    funcao VARCHAR(255) NOT NULL,
    NIVEL_FORMACAO VARCHAR(50) NOT NULL,
    INSTITUICAO_FORMACAO VARCHAR(300) NOT NULL,
    INSTITUICAO_ATUACAO VARCHAR(300) NOT NULL,
    ANO_CONCLUSAO VARCHAR(4) NOT NULL,
    SENHA VARCHAR(255) NOT NULL
);

CREATE TABLE cad_funcional (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome_funcional VARCHAR(255) NOT NULL,
    email_funcional VARCHAR(255) NOT NULL,
    POSICAO VARCHAR(50) NOT NULL,
    SENHA VARCHAR(255) NOT NULL,
    area_atuacao VARCHAR(255) NOT NULL,
    grupo_pesquisa VARCHAR(255) NOT NULL,
    nome_coordenador VARCHAR(255) NOT NULL,
    email_coordenador VARCHAR(255) NOT NULL,
    informacoes_laboratorio VARCHAR(255) NOT NULL,
    instituicao VARCHAR(255) NOT NULL
);

CREATE TABLE EQUIPAMENTOS_CATALOGO(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    NOME_EQUIPAMENTO VARCHAR(300) NOT NULL,
    INSTITUICAO_PROPRIETARIA VARCHAR(300) NOT NULL,
    MARCA VARCHAR(100) NOT NULL,
    MODELO VARCHAR(100) NOT NULL,
    IMAGEM VARCHAR(500) NOT NULL,
    TIPO_EQUIPAMENTO VARCHAR(50) NOT NULL,
    DESCRICAO VARCHAR(500) NOT NULL,
    #ENDEREÇO
    cep VARCHAR(9) NOT NULL,
    RUA VARCHAR(255) NOT NULL,
    BAIRRO VARCHAR(255) NOT NULL,
    CIDADE VARCHAR(255) NOT NULL,
    #CONTATO
    RESPONSAVEL VARCHAR(255) NOT NULL,
    TELEFONE VARCHAR(13) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    WEBSITE VARCHAR(300) NOT NULL,
    #AREAS DE ATUAÇÃO E ESPECIFICAÇÕES 
    AREA_ATUACAO_UM VARCHAR(255) NOT NULL,
    AREA_ATUACAO_DOIS VARCHAR(255) NOT NULL,
    AREA_ATUACAO_TRES VARCHAR(255) NOT NULL,

);
