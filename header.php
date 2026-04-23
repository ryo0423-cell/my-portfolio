<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?> </head>

  <body <?php body_class(); ?>>
    <header>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Portfolio</a></h1>
      <button class="hamburger" id="hamburger">
        <span></span><span></span><span></span>
      </button>

      <nav>
        <ul id="nav-menu">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#skills">Skills</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#works">Works</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
        </ul>
      </nav>
    </header>