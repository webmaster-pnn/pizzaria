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

CREATE TABLE tb_categoria(
	id_categoria integer primary key auto_increment,
    cat_nome varchar(30) not null
);

CREATE TABLE tb_tamanho(
	id_tamanho integer primary key auto_increment,
    tam_nome varchar(30) not null
);
CREATE TABLE tb_produtos(
	id_produto integer primary key auto_increment,
    prod_nome varchar(45) not null,
    prod_descricao text ,
    prod_preco varchar(15) not null,
    prod_img varchar(32) not null,
	prod_ativo tinyint(1) not null,
    tamanho_id int not null,
    categoria_id int not null,
    constraint fk_tamanho foreign key (tamanho_id) references tb_tamanho(id_tamanho) on delete cascade,
    constraint fk_categoria foreign key (categoria_id) references tb_categoria(id_categoria) on delete cascade
);

CREATE TABLE tb_pedidos(
	id_pedido integer primary key auto_increment,
    ped_status varchar(20) not null,
    ped_data date not null,
    ped_qtd int not null,
    produto_id int not null,
    constraint fk_produto foreign key (produto_id) references tb_produtos(id_produto) on delete cascade
);

CREATE TABLE pessoas_pedidos(
	pessoa_id int not null,
    pedido_id int not null,
    constraint fk_pes foreign key (pessoa_id) references tb_pessoas(id_pessoa) on delete cascade,
    constraint fk_pedido foreign key (pedido_id) references tb_pedidos(id_pedido) on delete cascade
);