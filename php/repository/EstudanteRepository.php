<?php
class EstudanteRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnAddEstudante($estudante): bool
    {
        try {

            $query = "INSERT INTO estudante (cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa) VALUES (:pcpf, :pnome, :pemail, :ptelefone, :pnascimento, :pendereco, :pbairro, :pescolaridade, :pinstituicao, :pinstituicaonome, :pcurso, :pmotivo, :pescolha, :pexperiencia, :pexpectativa) ON conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pcpf", $estudante->getCPF());
            $stmt->bindValue(":pnome", $estudante->getNome());
            $stmt->bindValue(":pemail", $estudante->getEmail());
            $stmt->bindValue(":ptelefone", md5($estudante->getTelefone()));
            $stmt->bindValue(":pnascimento", md5($estudante->getNascimento()));
            $stmt->bindValue(":pendereco", md5($estudante->getEndereco()));
            $stmt->bindValue(":pbairro", md5($estudante->getBairro()));
            $stmt->bindValue(":pescolaridade", md5($estudante->getEscolaridade()));
            $stmt->bindValue(":pinstituicao", md5($estudante->getInstituicao()));
            $stmt->bindValue(":pinstituicaonome", md5($estudante->getInstituicaoNome()));
            $stmt->bindValue(":pcurso", md5($estudante->getCurso()));
            $stmt->bindValue(":pmotivo", md5($estudante->getMotivo()));
            $stmt->bindValue(":pescolha", md5($estudante->getEscolha()));
            $stmt->bindValue(":pexperiencia", md5($estudante->getExperiencia()));
            $stmt->bindValue(":pexpectativa", md5($estudante->getExpectativa()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o estudante no banco de dados. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnUpdateEstudante($estudante): bool
    {
        try {

            $query = "UPDATE estudante SET cpf = :cpf, nome = :pnome, email = :pemail, telefone = :ptelefone, nascimento = :pnascimento, endereco = :pendereco, bairro = pbairro, escolaridade = :pescolaridade, instituicao = :pinstituicao, instituicaonome = :pinstituicaonome, curso = :pcurso, motivo = :pmotivo, escolha = :pescolha, experiencia = :pexperiencia, expectativa = :pexpectativa WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pcpf", $estudante->getCPF());
            $stmt->bindValue(":pnome", $estudante->getNome());
            $stmt->bindValue(":pemail", $estudante->getEmail());
            $stmt->bindValue(":ptelefone", md5($estudante->getTelefone()));
            $stmt->bindValue(":pnascimento", md5($estudante->getNascimento()));
            $stmt->bindValue(":pendereco", md5($estudante->getEndereco()));
            $stmt->bindValue(":pbairro", md5($estudante->getBairro()));
            $stmt->bindValue(":pescolaridade", md5($estudante->getEscolaridade()));
            $stmt->bindValue(":pinstituicao", md5($estudante->getInstituicao()));
            $stmt->bindValue(":pinstituicaonome", md5($estudante->getInstituicaoNome()));
            $stmt->bindValue(":pcurso", md5($estudante->getCurso()));
            $stmt->bindValue(":pmotivo", md5($estudante->getMotivo()));
            $stmt->bindValue(":pescolha", md5($estudante->getEscolha()));
            $stmt->bindValue(":pexperiencia", md5($estudante->getExperiencia()));
            $stmt->bindValue(":pexpectativa", md5($estudante->getExpectativa()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao editar o estudante no banco de dados. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }


    public function fnListEstudante($limit = 9999) {
        try {

            $query = "SELECT id, cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa  FROM estudante LIMIT :plimit";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':plimit', $limit);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarEstudanteID($id) {
        try {

            $query = "SELECT id, cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa  FROM estudante WHERE  id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarEstudanteCPF($cpf) {
        try {

            $query = "SELECT id, cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa  FROM estudante WHERE  cpf = :pcpf";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pcpf', $cpf);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarEstudantePorNome($nome) {
        try {

            $query = "SELECT id, cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa  FROM estudante WHERE nome = :pnome";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pnome', $nome);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarEstudantePorEmail($email) {
        try {

            $query = "SELECT id, cpf, nome, email, telefone, nascimento, endereco, bairro, escolaridade, instituicao, instituicaonome, curso, motivo, escolha, experiencia, expectativa  FROM estudante WHERE email = :pemail";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pemail', $email);

            if($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os estudantes do banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnDeletarEstudante($id) {
        try {

            $query = "DELETE FROM estudante WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Estudante');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao deletar o estudante no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}
