<?php /* Template name: Sobre */  ?>
<?php
include 'header.php';
?>
    <!-- Puxa post da pagina, não precisa dizer que estou puxando da pagina -->
    <?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
    <?php the_post(); ?>
        <?php echo the_content();?>

    <?php endwhile ?>
<?php endif ?>

<?php
include 'footer.php';
?>