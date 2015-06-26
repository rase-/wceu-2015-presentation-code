<?php

require 'vendor/autoload.php';

class SocketConnection {
  public function __construct() {
    $this->emitter = new SocketIO\Emitter();
  }

  public function when_post_published( $id, $post ) {
    $this->emitter->emit( 'new post', (array) $post );
  }

  public function when_post_possibly_viewed() {
    if ( is_singular() ) {
      $id = get_the_ID();

      $meta = get_post_meta( $id, 'real_time_views' );
      $count = ! empty( $meta ) ? (int) $meta[0] : 0;
      $count++;

      update_post_meta( $id, 'real_time_views', $count );
      $this->emitter->emit( 'post view ' . $id, $count );
    }
  }
}

$connection = new SocketConnection();
add_action( 'publish_post', array( $connection, 'when_post_published' ), 10, 2 );
add_action( 'template_redirect', array( $connection, 'when_post_possibly_viewed' ), 10, 0 );

?>
