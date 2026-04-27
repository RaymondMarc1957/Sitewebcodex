<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="topbar">
  <div class="container nav-wrap">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">Cabinet Naturos</a>
    <button id="menuToggle" aria-label="Ouvrir le menu">☰</button>
    <nav id="mainNav">
      <a href="#services">Services</a>
      <a href="#tarifs">Tarifs</a>
      <a href="#horaires">Horaires</a>
      <a href="#faq">FAQ</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>
