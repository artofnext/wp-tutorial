<?php

get_header();

pageBanner(array(
  'title' => 'Our Camuses',
  'subtitle' => 'Several campues',
));
?>

<div class="container container--narrow page-section">

<div class="acf-map" id="mapid">

<?php
  while(have_posts()) {
    the_post();
    $mapLocation = json_decode(get_field('open_map'), true);
    
    ?>

    <div class="marker" 
    data-lat="<?php echo $mapLocation['lat']; ?>" 
    data-lon="<?php echo $mapLocation['lon']; ?>"

    data-title="<?php the_title(); ?>" 
    >
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </div>
    

    <?php } ?>
</div>

</div>

<?php
get_footer();


?>