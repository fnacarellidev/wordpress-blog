<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

<header class="d-flex justify-content-around align-items-center">
    <div class="page-title">
        <a href="<?php echo home_url("/"); ?>" class="text-decoration-none pb-1 border-bottom border-primary border-3" style="color: black;"><?php bloginfo("title"); ?></a> 
    </div>
    <div class="menu-text">
      <?php 
        wp_nav_menu(["theme_location" => "principal"]);
      ?>
    </div>
</header>