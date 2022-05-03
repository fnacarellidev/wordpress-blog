<?php
  get_header();
?>

<?php
  if(has_post_thumbnail()) // Caso tenha featured img no blog ela será mostrada normalmente
  {
?> 
  <img class="img-fluid"  src="<?php the_post_thumbnail_url(); ?>" alt=""> 
<?php
  } else {
?>
  <img class="img-fluid"  src="<?php bloginfo("template_directory")?>/img/nerd.png" alt=""> <!-- Caso contrário será mostrada uma imagem default -->
<?php
  }
?>

<h1 class="px-5 pt-2"><?php the_title(); ?></h1>
<div class="px-5"><?php the_content(); ?></div>

<div class="d-flex flex-column justify-content-center align-items-center w-auto">
  <p>Minhas mídias sociais</p>
  <?php
    get_footer();
  ?>
</div>