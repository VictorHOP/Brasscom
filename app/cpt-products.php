<?php
add_action('init', 'o2_produto');

function o2_produto()
{

  $labels = array(
    'name' => _x('Banners', 'post type general name'),
    'singular_name' => _x('Banner', 'post type singular name'),
    'all_items' => _x('Todos os Banners', 'post type singular name'),
    'add_new' => _x('Adicionar Banner', 'portfolio item'),
    'add_new_item' => __('Adicionar novo Banner'),
    'edit_item' => __('Editar Banner'),
    'new_item' => __('Novo Banner'),
    'view_item' => __('Ver Banner'),
    'search_items' => __('Buscar Banner'),
    'not_found' => __('Nenhum Banner encontrado'),
    'not_found_in_trash' => __('Nenhum Banner na lixeira'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type('banner', $args);


  $labels = array(
    'name' => _x('Category', 'taxonomy general name', 'textdomain'),
    'singular_name' => _x('Category', 'taxonomy singular name', 'textdomain'),
    'search_items' => __('Buscar Category', 'textdomain'),
    'all_items' => __('Todos as Category', 'textdomain'),
    'edit_item' => __('Editar Category', 'textdomain'),
    'update_item' => __('Atualizar Category', 'textdomain'),
    'add_new_item' => __('Adicionar nova Category', 'textdomain'),
    'new_item_name' => __('Novo nome de Category', 'textdomain')
  );

  $args = array(
    'public' => true,
    'hierarchical' => true,
    'labels' => $labels,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'category'),
    'show_in_nav_menus' => false
  );

  register_taxonomy('category', array('banner'), $args);


  $labels = array(
    'name' => _x('inteligencia', 'post type general name'),
    'singular_name' => _x('inteligencia', 'post type singular name'),
    'all_items' => _x('Todos os inteligencia', 'post type singular name'),
    'add_new' => _x('Adicionar inteligencia', 'portfolio item'),
    'add_new_item' => __('Adicionar novo inteligencia'),
    'edit_item' => __('Editar inteligencia'),
    'new_item' => __('Novo inteligencia'),
    'view_item' => __('Ver inteligencia'),
    'search_items' => __('Buscar inteligencia'),
    'not_found' => __('Nenhum inteligencia encontrado'),
    'not_found_in_trash' => __('Nenhum inteligencia na lixeira'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type('inteligencia', $args);


  $labels = array(
    'name' => _x('categoria inteligencia', 'taxonomy general name', 'textdomain'),
    'singular_name' => _x('categoria inteligencia', 'taxonomy singular name', 'textdomain'),
    'search_items' => __('Buscar categoria inteligencia', 'textdomain'),
    'all_items' => __('Todos as categoria inteligencia', 'textdomain'),
    'edit_item' => __('Editar categoria inteligencia', 'textdomain'),
    'update_item' => __('Atualizar categoria inteligencia', 'textdomain'),
    'add_new_item' => __('Adicionar nova categoria inteligencia', 'textdomain'),
    'new_item_name' => __('Novo nome de categoria inteligencia', 'textdomain')
  );

  $args = array(
    'public' => true,
    'hierarchical' => true,
    'labels' => $labels,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'categoria inteligencia'),
    'show_in_nav_menus' => false
  );

  register_taxonomy('categoria inteligencia', array('inteligencia'), $args);
}

$labels = array(
  'name' => _x('noticia', 'post type general name'),
  'singular_name' => _x('noticia', 'post type singular name'),
  'all_items' => _x('Todos as noticia', 'post type singular name'),
  'add_new' => _x('Adicionar noticia', 'portfolio item'),
  'add_new_item' => __('Adicionar nova noticia'),
  'edit_item' => __('Editar noticia'),
  'new_item' => __('Nova noticia'),
  'view_item' => __('Ver noticia'),
  'search_items' => __('Buscar noticia'),
  'not_found' => __('Nenhum noticia encontrado'),
  'not_found_in_trash' => __('Nenhuma noticia na lixeira'),
  'parent_item_colon' => ''
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => 5,
  'show_in_nav_menus' => true,
  'exclude_from_search' => false,
  'supports' => array('title', 'editor', 'thumbnail')
);

register_post_type('noticia', $args);


$labels = array(
  'name' => _x('video', 'post type general name'),
  'singular_name' => _x('video', 'post type singular name'),
  'all_items' => _x('Todos os videos', 'post type singular name'),
  'add_new' => _x('Adicionar video', 'portfolio item'),
  'add_new_item' => __('Adicionar novo video'),
  'edit_item' => __('Editar video'),
  'new_item' => __('Novo video'),
  'view_item' => __('Ver video'),
  'search_items' => __('Buscar video'),
  'not_found' => __('Nenhum video encontrado'),
  'not_found_in_trash' => __('Nenhuma video na lixeira'),
  'parent_item_colon' => ''
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => 5,
  'show_in_nav_menus' => true,
  'exclude_from_search' => false,
  'supports' => array('title')
);

register_post_type('video', $args);

$labels = array(
  'name' => _x('evento', 'post type general name'),
  'singular_name' => _x('evento', 'post type singular name'),
  'all_items' => _x('Todos os eventos', 'post type singular name'),
  'add_new' => _x('Adicionar evento', 'portfolio item'),
  'add_new_item' => __('Adicionar novo evento'),
  'edit_item' => __('Editar evento'),
  'new_item' => __('Novo evento'),
  'view_item' => __('Ver evento'),
  'search_items' => __('Buscar evento'),
  'not_found' => __('Nenhum evento encontrado'),
  'not_found_in_trash' => __('Nenhum evento na lixeira'),
  'parent_item_colon' => ''
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => 6,
  'show_in_nav_menus' => true,
  'exclude_from_search' => false,
  'supports' => array('title','thumbnail')
);

register_post_type('evento', $args);

$labels = array(
  'name' => _x('social', 'post type general name'),
  'singular_name' => _x('social', 'post type singular name'),
  'all_items' => _x('Todos os socials', 'post type singular name'),
  'add_new' => _x('Adicionar social', 'portfolio item'),
  'add_new_item' => __('Adicionar novo social'),
  'edit_item' => __('Editar social'),
  'new_item' => __('Novo social'),
  'view_item' => __('Ver social'),
  'search_items' => __('Buscar social'),
  'not_found' => __('Nenhum social encontrado'),
  'not_found_in_trash' => __('Nenhum social na lixeira'),
  'parent_item_colon' => ''
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => 6,
  'show_in_nav_menus' => true,
  'exclude_from_search' => false,
  'supports' => array('thumbnail')
);

register_post_type('social', $args);

//CUSTOM FIELDS ABAIXO

function campos()
{
  global $post;
  $ppe = get_post_meta($post->ID, 'ppe') ? get_post_meta($post->ID, 'ppe')[0] : '';


  $subtitulo = get_post_meta($post->ID, 'subtitulo', true);

?>
  <h3>Informações Adicionais</h3>
  <p>Subtitulo: </p>
  <input type="text" name="subtitulo" value="<?= $subtitulo ?>" style="width: 100%;">

<?php
}

function video()
{
  global $post;
  $ppe = get_post_meta($post->ID, 'ppe') ? get_post_meta($post->ID, 'ppe')[0] : '';


  $video = get_post_meta($post->ID, 'video', true);

?>
  <h3>Insira o link do video</h3>
  <p>insira o link aqui: </p>
  <input type="text" name="video" value="<?= $video ?>" style="width: 100%;">

<?php
}


// ADD META
function metabox_custom($post_type, $post)
{
  add_meta_box('campos', 'Campos', 'campos', array('inteligencia'), 'normal', 'high');
  add_meta_box('video', 'video', 'video', array('video'), 'normal', 'high');
}
add_action('add_meta_boxes', 'metabox_custom', 100, 2);

// SAVE META
function save_metabox_custom($post_id, $post, $update)
{
  wp_reset_query();
  $post_type = $post->post_type;

  // update_post_meta($post_id, 'subtitulo', $_POST['subtitulo']);
  // update_post_meta($post_id, 'video', $_POST['video']);
}
add_action('save_post', 'save_metabox_custom', 100, 3);?>
