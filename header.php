<?php
/* 
Header file.
@package Async
*/

?>
<!DOCTYPE html>
<html lang="<?php  language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Async theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> > <!-- add the classes for every page  -->
<?php 
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?> 
<!-- used to include the async javascript for analytics and other purposes -->
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
       <?php get_template_part('template-parts/header/nav'); ?>
    </header>
    <div id="content" class="site-content">




