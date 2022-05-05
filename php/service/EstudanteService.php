<?php

    class EstudanteService {
        private $repository;

        public function __construct() {
            $this->repository = new EstudanteRepository();
        }

        public function cadastrar($usuario): bool {
            return $this->repository->fnAddEstudante($usuario);
        }
        
        public function atualizar($usuario): bool {
            return $this->repository->fnUpdateEstudante($usuario);
        }
        
        public function listar($limit) {
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