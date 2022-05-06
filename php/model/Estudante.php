<?php

    class Estudante {

        private int $id;
        private int $cpf;
        private string $nome;
        private string $email;
        private int $telefone;
        private int $nascimento;
        private string $endereco;
        private string $bairro;
        private int $escolaridade;
        private int $instituicao;
        private string $instituicaonome;
        private string $curso;
        private string $motivo;
        private string $escolha;
        private string $experiencia;
        private string $expectativa;
        private string $criadoem;

        public function __construct() {}

        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): void {
            $this->id = $id;
        }

        public function getCPF(): int {
            return $this->cpf;
        }

        public function setCPF(int $cpf): void {
            $this->cpf = $cpf;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }
        
        public function getEmail(): string {
            return $this->email;
        }

        public function setEmail(string $email): void {
            $this->email = $email;
        }
        
        public function getTelefone(): int {
            return $this->telefone;
        }

        public function setTelefone(int $telefone): void {
            $this->telefone = $telefone;
        }
        
        public function getNascimento(): int {
            return $this->nascimento;
        }

        public function setNascimento(int $nascimento): void {
            $this->nascimento = $nascimento;
        }
        
        public function getEndereco(): string {
            return $this->endereco;
        }

        public function setEndereco(string $endereco): void {
            $this->endereco = $endereco;
        }
        
        public function getBairro(): string {
            return $this->bairro;
        }

        public function setBairro(string $bairro): void {
            $this->bairro = $bairro;
        }
        
        public function getEscolaridade(): int {
            return $this->escolaridade;
        }

        public function setEscolaridade(int $escolaridade): void {
            $this->escolaridade = $escolaridade;
        }
        
        public function getInstituicao(): int {
            return $this->instituicao;
        }

        public function setInstituicao(int $instituicao): void {
            $this->instituicao = $instituicao;
        }
        
        public function getInstituicaoNome(): string {
            return $this->instituicaonome;
        }

        public function setInstituicaoNome(string $instituicaonome): void {
            $this->instituicaonome = $instituicaonome;
        }
        
        public function getCurso(): string {
            return $this->curso;
        }

        public function setCurso(string $curso): void {
            $this->curso = $curso;
        }
        
        public function getMotivo(): string {
            return $this->motivo;
        }

        public function setMotivo(string $motivo): void {
            $this->motivo = $motivo;
        }
                
        public function getEscolha(): string {
            return $this->escolha;
        }

        public function setEscolha(string $escolha): void {
            $this->escolha = $escolha;
        }
        
        public function getExperiencia(): string {
            return $this->experiencia;
        }

        public function setExperiencia(string $experiencia): void {
            $this->experiencia = $experiencia;
        }
        
        public function getExpectativa(): string {
            return $this->expectativa;
        }

        public function setExpectativa(string $expectativa): void {
            $this->expectativa = $expectativa;
        }
        
        public function getCriadoEm(): string {
            return date('d/m/Y - H:i:s', strtotime($this->criadoem));
        }

        public function setCriadoEm(string $criadoem): void {
            $this->criadoem = $criadoem;
        }
    }