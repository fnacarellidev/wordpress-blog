<?php
  get_header();
?>

<img src="<?php the_post_thumbnail_url(); ?>" alt="">
<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

<?php
  get_footer();
?>