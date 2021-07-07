<?php require_once('data.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <form method="post" action="confirm.php">
      <div class="menu-items">
            <?php foreach($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?= $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?= $menu->getName() ?></h3>
            <p class="price">$<?= $menu->getTaxIncludedPrice() ?>(Sudah termasuk pajak)</p>
            <span>Qty : </span>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="Pesan">
    </form>
  </div>
</body>
</html>