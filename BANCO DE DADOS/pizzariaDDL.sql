CREATE SCHEMA pizzaria;

USE pizzaria;
 
 CREATE TABLE tb_pessoas(
	id_pessoa integer primary key auto_increment,
    pes_nome varchar(30) not null,
    pes_sobrenome varchar(45) not null,
    pes_nascimento varchar(10) not null,
    pes_email varchar(45) not null unique,
    pes_sexo char(1) not null,
    pes_cpf varchar(15) not null unique
 );
 
 CREATE TABLE tb_usuarios(
	id_usuario integer primary key auto_increment,
    user_senha varchar(32) not null,
    user_permissao varchar(20) not null,
    user_img varchar(32) not null,
    pessoa_id integer not null,
    constraint fk_pessoa foreign key (pessoa_id) references tb_pessoas(id_pessoa) on delete cascade
 );
 
CREATE TABLE tb_estado(
	id_estado integer primary key auto_increment,
    est_codigoUf integer not null,
    est_nome varchar(50) not null unique,
    est_uf char(2) not null
);

CREATE TABLE tb_cidade(
	id_cidade integer primary key auto_increment,
    cid_nome varchar(50) not null,
    cid_uf char(2) not null,
    estado_id integer not null,
    constraint fk_estado foreign key(estado_id) references tb_estado(id_estado) on delete cascade
);

CREATE TABLE tb_bairro(
	id_bairro integer primary key auto_increment,
    bar_nome varchar(50) not null,
    bar_uf char(2) not null,
    cidade_id integer not null,
    constraint fk_cidade foreign key (cidade_id) references tb_cidade(id_cidade) on delete cascade
);

CREATE TABLE tb_logradouro(
	
    id_logradouro integer primary key auto_increment,
    log_descricao varchar(50) not null,
    log_cep varchar(11) not null,
    log_uf char(2) not null,
    bairro_id integer not null,
    constraint fk_bairro foreign key(bairro_id) references tb_bairro(id_bairro) on delete cascade
);

CREATE TABLE pessoas_endereco(
	pessoas_id integer not null,
    logradouro_id integer not null,
    constraint fk_pessoas foreign key(pessoas_id) references tb_pessoas(id_pessoa) on delete cascade,
    constraint fk_logradouro foreign key(logradouro_id) references tb_logradouro(id_logradouro) on delete cascade
); 