<?php
get_header();
?>

<?php
	while ( have_posts() ) : the_post();

		$title = get_the_title();
		$content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content());
?>
		
<div class="row">
      <div class="large-6 medium-8 columns">
        <h1><?php echo $title; ?></h1>
      </div>
    </div>   

<div class="row" id="tekst1">
      <div class="large-6 medium-8 columns">
        <?php echo $content[0]; ?>
      </div>
    </div>

<div id="kontakt">
    <div class="row">
    <div class="text-center medium-12 columns">
    <div id="tilmeld">

	<?php get_template_part( 'mailform' ); ?> 

</div>
    </div>
    </div>
    </div>

<div class="row" id="tekst2">
      <div id="text2" class="large-6 medium-8 columns">
        <?php echo $content[1]; ?>
      </div>
    </div>

<?php endwhile;?>


<?php
get_footer();
?>