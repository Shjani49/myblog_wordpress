<?php get_header();?>

<article>
<h2>Page: <?php the_title(); //Output this page's title. ?></h2>
<?php the_content(); //Output this page's content. ?>
</article>

<?php get_footer();?>
