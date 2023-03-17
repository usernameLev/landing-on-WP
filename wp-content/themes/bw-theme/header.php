<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Landging on WP</title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="container">
      <nav class="menu__desktop">
        <ul class="menu">
          <li class="menu__item active"><a href="<?php echo home_url('/') ?>">Home</a></li>
          <li class="menu__item"><a href="#about">About Us</a></li>
          <li class="menu__item"><a href="#team">Team</a></li>
          <li class="menu__item"><?php the_custom_logo(); ?></li>
          <li class="menu__item"><a href="#provide">Services</a></li>
          <li class="menu__item"><a href="#">Blog</a></li>
          <li class="menu__item"><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <nav class="menu__mobile">
        <div class="menu__inner">
          <?php the_custom_logo(); ?>
          <div class="menu__burger"><span>toggle menu</span></div>
        </div>
        <ul class="menu">
          <li class="menu__item active"><a href="<?php echo home_url('/') ?>">Home</a></li>
          <li class="menu__item"><a href="#about">About Us</a></li>
          <li class="menu__item"><a href="#team">Team</a></li>
          <li class="menu__item"><a href="#provide">Services</a></li>
          <li class="menu__item"><a href="#">Blog</a></li>
          <li class="menu__item"><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <div class="header__content">
        <h1 class="header__title"><?php echo CFS()->get('header_title'); ?></h1>
        <p class="header__text"><?php echo CFS()->get('header_slogan'); ?></p>
        <a href="#about" class="header__button"><?php echo CFS()->get('header_button'); ?></a>
      </div>
    </div>
  </header>