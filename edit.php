
<?php include_once("templates/header.php"); ?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editer contato</h1>
    <form id="create-form" action="<?= $BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id']?>">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name"    value="<?= $contact['name']?>" placeholder="Digite o nome" required >
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone"   value="<?= $contact['phone']?>" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="observations">Observações</label>
        <textarea class="form-control" id="observactions" name="observactions" rows="3"    placeholder="Insira as observações"><?= $contact['observactions']?></textarea>
      </div>
      <div>
      <button lass="form-control"  type="submit" class="btn btn-primary"> Atualizar </button>
      </div>
      
    </form>
  </div>
<?php include_once("templates/footer.php") ?>