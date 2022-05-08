<?php

    class EstudanteService {
        private $repository;

        public function __construct() {
            $this->repository = new EstudanteRepository();
        }

        public function cadastrar(Estudante $estudante): bool {
            return $this->repository->fnAddEstudante($estudante);
        }
        
        public function atualizar(Estudante $estudante): bool {
            return $this->repository->fnUpdateEstudante($estudante);
        }
        
        public function listar($limit = 9999) {
            return $this->repository->fnListEstudante($limit);
        }

        public function localizar($id) {
            return $this->repository->fnLocalizarEstudanteID($id);
        }
        
        public function localizarporcpf($cpf) {
            return $this->repository->fnLocalizarEstudanteCPF($cpf);
        }
        
        public function localizarpornome($nome) {
            return $this->repository->fnLocalizarEstudantePorNome($nome);
        }
        
        public function localizarporemail($email) {
            return $this->repository->fnLocalizarEstudantePorEmail($email);
        }
        
        public function deletar($id) {
            return $this->repository->fnDeletarEstudante($id);
        }
    }