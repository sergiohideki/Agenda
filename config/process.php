<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// MODIFICAÇÕES NO BANCO
if (!empty($data)) {

    // Criar contato
    if ($data["type"] === "create") {

        $name = $data["nome_contato"];
        $phone = $data["tel_contato"];
        $observations = $data["obs_contato"];

        $query = "INSERT INTO contato (nome_contato, tel_contato, obs_contato) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } else if ($data["type"] === "edit") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contato 
                SET nome_contato = :name, tel_contato = :phone, obs_contato = :observations 
                WHERE id_contato = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        } catch (PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    } else if ($data["type"] === "delete") {

        $id = $data["id"];

        $query = "DELETE FROM contato WHERE id_contato = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        } catch (PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

    // SELEÇÃO DE DADOS
} else {

    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if (!empty($id)) {

        $query = "SELECT * FROM contato WHERE id_contato = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();
    } else {

        // Retorna todos os contatos
        $contacts = [];

        $query = "SELECT * FROM contato";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

// FECHAR CONEXÃO
$conn = null;
