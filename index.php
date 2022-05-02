<?php 
  get_header();
?>

<div class="container">
    <div class="row">
      <?php
        if(have_posts() ) : while(have_posts()) : the_post()
      ?>
        <div class="col-3">
          <div class="card">
            <?php 
              if(has_post_thumbnail()) { 
            ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top img-fluid" alt="...">
            <?php } else { ?>
                <img src="<?php bloginfo("template_directory") ?>/img/nerd.png" alt="imagem substituta">
            <?php
              }
            ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Link da postagem</a>
            </div>
          </div>
        </div>
        <?php 
          endwhile;
          endif;
        ?>
    </div>
  </div>

<?php
  get_footer();
?>