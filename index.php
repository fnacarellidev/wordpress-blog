<?php 
  get_header();
?>

<div class="container">
    <div class="row mr-10">
      <?php
        if(have_posts() ) : while(have_posts()) : the_post()
      ?>
        <div class="col-lg-4 d-flex align-items-stretch mb-3 mt-3">
          <div class="card">
            <?php 
              if(has_post_thumbnail()) { 
            ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top img-fluid" alt="..."> <!-- Caso tenha imagem disponivel na postagem, ela será exibida normalmente. -->
            <?php } else { ?>
                <img src="<?php bloginfo("template_directory") ?>/img/nerd.png" alt="imagem substituta"> <!-- Caso não tenha imagem, será mostrada uma imagem padrão -->
            <?php
              }
            ?>
            <div class="d-flex flex-column justify-content-between card-body">
              <div>
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Link da postagem</a>
            </div>
          </div>
        </div>
        <?php 
          endwhile;
          endif;
        ?>
    </div>
  <div class="d-flex flex-column justify-content-center align-items-center w-auto">
    <p>Minhas mídias sociais</p>
    <?php
      get_footer();
    ?>
  </div>
</div>
