<?php

function api_listar_posts($request) {
    $posts = get_posts(array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    ));
    $response = array();
    foreach ($posts as $post) {
      $response[] = array(
        'id' => $post->ID,
        'titulo' => $post->post_title,
        'conteudo' => $post->post_content,
        'autor' => $post->post_author,
       
      );
    }
    return rest_ensure_response($response);
  }
  
  function registrar_api_listar_posts() {
    register_rest_route('api', '/post', array(
      array(
        'methods' => 'GET',
        'callback' => 'api_listar_posts',
      ),
    ));
  }
  
  add_action('rest_api_init', 'registrar_api_listar_posts');
  

?>