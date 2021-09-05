<!DOCTYPE html>
<html>
  <head>

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <title> <?php bloginfo("name") ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header" style="background-image: url(<?php the_field('background'); ?>);">
      <div class="container">

        <h1>
        <?php the_title(); ?> 
        </h1>
        <p>
        <?php the_content(); ?>
        </p>
        <a class="btn" href="<?php the_field('first_section_link'); ?>"><?php the_field('first_section_button'); ?></a>

      </div>
    </div>
    
