<?php
  get_header();
?>

<div class="d-flex justify-content-center">
  <div class="">
    <?php
      /* Caso tenha featured img no blog ela será mostrada normalmente */
      if(has_post_thumbnail()) {
    ?> 
    <img class="d-block img-fluid mx-auto" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <!-- Caso contrário será mostrada uma imagem default -->
    <?php } else { ?>
    <img class="d-block img-fluid mx-auto" src="<?php bloginfo("template_directory"); ?>/img/nerd.png" alt=""> 
    <?php } ?>
    <h1 class="px-5 pt-2"><?php the_title(); ?></h1>
    <div class="px-5"><?php the_content(); ?></div>
  </div>
</div>

<div class="d-flex flex-column justify-content-center align-items-center w-auto">
  <p>Minhas mídias sociais</p>
  <?php
    get_footer();
  ?>
</div>