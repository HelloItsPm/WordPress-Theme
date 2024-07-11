<?php get_header(); ?>


<div>
    <div class="home-header-container">
        <img src="<?php echo wp_kses_post( get_field('home__header_wallpaper') ); ?>" alt="deux chaises moches beiges" class="home-header-img">
        <div class="home-header-title-container">
            <h1 class="home__header_title"><?php echo wp_kses_post( get_field('home__header_title') ); ?></h1>
            <p class="home__header_subtitle"><?php echo wp_kses_post( get_field('home__header_subtitle') ); ?></p>
        </div>
    </div>
</div>

<div>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>