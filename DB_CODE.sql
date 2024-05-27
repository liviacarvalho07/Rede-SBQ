
create table cad_pessoal (
id integer primary key auto_increment,
nome_pessoal varchar(255) not null,
email_pessoal varchar(255) not null,
estado varchar(50) not null,
cidade varchar(60) not null,
funcao varchar(255) not null,
nivel_formacao varchar(50) not null,
instituicao_formacao varchar(300) not null,
instituicao_atuacao varchar(300) not null,
ano_conclusao varchar(6) not null,
senha varchar(255) not null
);

create table cad_funcional (
id integer primary key auto_increment,
nome_funcional varchar(255) not null,
email_funcional varchar(255) not null,
posicao varchar(50) not null,
senha varchar(255) not null,
area_atuacao varchar(255) not null,
grupo_pesquisa varchar(255) not null,
nome_coordenador varchar(255) not null,
email_coordenador varchar(255) not null,
informacoes_laboratorio varchar(255) not null,
instituicao varchar(255) not null
);

create table equipamentos_catalogo(
id integer primary key auto_increment,
nome_equipamento varchar(300) not null,
instituicao_proprietaria varchar(300) not null,
marca varchar(100) not null,
modelo varchar(100) not null,
tipo_equipamento varchar(50) not null,
descricao varchar(500) not null,
cep varchar(9) not null,
rua varchar(255) not null,
bairro varchar(255) not null,
cidade varchar(255) not null,
responsavel varchar(255) not null,
telefone varchar(13) not null,
email varchar(255) not null,
website varchar(300) not null,
nome_labarotorio varchar(244)

);

create table laboratorios{
id integer primary key auto_increment,
nome_labarotorio varchar(255) not null,
departamento varchar(255) not null,
nome_coordenador varchar(255) not null,
universidade varchar(300) not null
};
