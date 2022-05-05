drop table if exists estudante cascade;
create table if not exists estudante(
    id serial primary key,
    cpf int not null,
    nome varchar(150) not null,
    email varchar(150) not null,
    telefone varchar(150) not null,
    nascimento varchar(150) not null,
    endereco varchar(150) not null,
    bairro varchar(150) not null,
    escolaridade varchar(150) not null,
    instituicao varchar(150) not null,
    instituicaonome varchar(150),
    curso varchar(150) not null,
    motivo varchar(500) not null,
    escolha varchar(500) not null,
    experiencia varchar(500) not null,
    expectativa varchar(500) not null,
    criado_em timestamp not null default current_timestamp
);