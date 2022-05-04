<?php
  get_header();
?>

<h1 class="d-flex justify-content-center">
  <?php the_title(); ?>
</h1>
<div class="ms-2 text-center"> <!-- pl não funcionou, apenas px -->
  <?php the_content(); ?>
</div>

<div class="d-flex flex-column justify-content-center align-items-center w-auto">
  <p>Minhas mídias sociais</p>
  <?php
    get_footer();
  ?>
</div>
