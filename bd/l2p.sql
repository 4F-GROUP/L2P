drop table if exists estudante cascade;
create table if not exists estudante(
    id serial primary key,
    cpf bigint not null,
    nome varchar(150) not null,
    email varchar(150) not null,
    telefone bigint not null,
    nascimento bigint not null,
    endereco varchar(150) not null,
    bairro varchar(150) not null,
    escolaridade int not null,
    instituicao int not null,
    instituicaonome varchar(150),
    curso varchar(150) not null,
    motivo varchar(500) not null,
    escolha varchar(500) not null,
    experiencia varchar(500) not null,
    expectativa varchar(500) not null,
    criado_em timestamp not null default current_timestamp
);