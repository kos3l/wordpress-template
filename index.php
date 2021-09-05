<?php get_header(); ?>

    <div class="main">      
        <div class="container">
        <?php while(have_posts()) : the_post() ?>
            <img src="<?php the_field('first_section_image'); ?>" height="128" width="196" alt="" />

            <h2> <?php the_field('first_section'); ?> </h2>
            <p> <?php the_field('first_section_content'); ?></p>
            <p> <?php the_field('first_section_content_one'); ?></p>
            <p> <?php the_field('first_section_content_two'); ?></p>

        </div>
        <?php endwhile; ?>
    </div>
    <div class="jumbotron">
      <div class="container"> 
      <?php while(have_posts()) : the_post() ?>
      
      <h1>
          <?php the_field('second_section_title'); ?>
        </h1>
        <p>
          <?php the_field('second_section_content'); ?>
        </p>
        <a class="btn" href="<?php the_field('second_section_link'); ?>"> <?php the_field('second_section_button'); ?> </a>
      </div>
      <?php endwhile; ?>
    </div>
<?php get_footer(); ?>
