  <footer>
    <div>
      <?php
        $args = [
          "post_type" => "social_links",
          "posts_per_page" => -1,
          "posts_status" => "publish"
        ];
        $query = new WP_Query($args);

        //loop

        if($query -> have_posts() ) : while($query -> have_posts()) : $query -> the_post();
      ?>
      <a href="<?php echo get_post_custom_values( "link")[0]; ?>">
        <img src="<?php the_post_thumbnail_url() ?>" alt="thumb image">
      </a>
      <?php
        endwhile;
        endif;
      ?>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
</body>
</html>