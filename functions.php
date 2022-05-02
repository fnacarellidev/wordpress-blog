<?php
  // adiciona recursos do tema
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");

  // Registro do menu primário
  function registra_menu_principal() {
    register_nav_menu("principal", "Menu Principal");
  }
  add_action("after_setup_theme", "registra_menu_principal");

  // importa o css
  function importa_css() {
    wp_enqueue_style("main", get_stylesheet_uri());
  }
  add_action("wp_enqueue_scripts", "importa_css");
  
  function registra_custom_post_type_social_links() {
    $args = [
      "labels" => [
        "name" => "Redes sociais"
      ],
      "public" => true,
      "supports" => ["title", "thumbnail", "excerpt", "custom-fields"]
    ];
    register_post_type("social_links", $args);
  }
  add_action("init", "registra_custom_post_type_social_links");
?>