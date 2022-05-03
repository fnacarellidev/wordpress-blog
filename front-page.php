<?php
  get_header();
?>
<div class="container">
  <div class="d-flex justify-content-between">
    <div class="d-flex flex-column justify-content-around">
      <h1 class="homeh1">Hi, I'am <span class="text-primary">Marlon</span> Web Designer</h1>
      <div>
        <a class="btn btn-primary px-4" href="#">Contact</a>
      </div>
    </div>
    <div class="text-decoration-none">
    <img src="<?php bloginfo("template_directory"); ?>/img/nerd.png" alt="portfolio image">
    </div>
  </div>
  <div class="d-flex justify-content-start">
    <?php
      get_footer();
    ?>
  </div>
</div>
