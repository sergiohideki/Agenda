<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="nome_contato" placeholder="Digite o seu nome" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" name="tel_contato" placeholder="Digite o seu telefone" required>
        </div>
        <div class="form-group">
            <label for="observations">Observação:</label>
            <textarea type="text" class="form-control" id="observations" name="obs_contato" placeholder="Digite a observação" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<?php
include_once("templates/header.php");
?>