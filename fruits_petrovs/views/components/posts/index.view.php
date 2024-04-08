<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<form>
  <input name='id'/>
  <button>Filter</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? '') ?>'/>
  <button>Filter by Category</button>
</form>

<h1>Fruits</h1>



<a href="calories.php">One <span style="color: blue;">apple</span> has 90 calories.</a>






<ol>
<?php foreach($posts as $post) { ?>
  <li> 
    <a href="/show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["title"]) ?></a>
    <form class="delete-form" method="POST" action="/delete"><button>Delete</button></form>
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
  </li>
<?php } ?>
</ol>

<?php require "views/components/footer.php" ?>
