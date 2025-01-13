<?php
include_once("templates/header.php");
?>
<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $contact["nome_contato"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact["tel_contato"] ?></p>
    <p class="bold">Observações:</p>
    <p><?= $contact["obs_contato"] ?></p>
</div>
<?php
include_once("templates/footer.php");
?>