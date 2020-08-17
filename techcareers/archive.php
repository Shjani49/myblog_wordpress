<?php get_header();?>

<h2>
  Archive Template:
  <?php echo get_the_archive_title(); // Output current archive / category name. ?>
</h2>
<?php // Look into " The Loop" as a topic for WordPress. ?>
<?php while( have_posts() ): // Loop through matching posts ?>
    <?php the_post(); // Sets up post object data. ?>
    <article>
        <h3><?php the_title(); ?></h3>
        <p>
        <strong>
        <time datetime="<?php echo get_the_date(DATE_ATOM); // THE BLOG POST PUBLISHED DATE FROM WP. 
                        ?>">
        <?php echo get_the_date(); // The blog post publish date from wp.  ?>         
        </strong>
        </p>
        <p><?php the_excerpt(); // The short summary of the post / page.?></p>
        <p>
            <a href="<?php the_permalink(); // The link to this post / page. ?>">
        Read More
      </a>
    </p>

    </article>
<?php endwhile;?>

<?php get_footer();?>
