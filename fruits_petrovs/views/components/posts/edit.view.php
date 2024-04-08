
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Edit a post</h1>

<input type="hidden" names="id "value=<?=$post["id"] ?> />

<form method="POST">
  <label>
    <span>Title:</span>
    <input name="title" value="<?= $$_POST["title"] ?? $post["title"] ?>"/>
    <?php if (isset($errors["title"])) { ?>
      <p><?= $errors["title"] ?></p>
    <?php  } ?>
  </label>
  <label>
    <span>Category ID:</span>
    <select name="category_id">
      <option value="1" <?= ( $_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : ""?>>sport</option>
      <option value="1" <?=  ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : ""?>>music</option>
      <option value="1" <?=  ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "selected" : ""?>>food</option>
    </select>
    <?php if (isset($errors["category_id"])) { ?>
      <p><?= $errors["category_id"] ?></p>
    <?php  } ?>
  </label>
  <button>Save</button>
</form>


<?php require "views/components/footer.php" ?>