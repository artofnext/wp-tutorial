<?php

get_header();

pageBanner(array(
  'title' => 'Our Camuses',
  'subtitle' => 'Several campues',
));
?>

<div class="container container--narrow page-section">

<div class="acf-map">

<?php
  while(have_posts()) {
    the_post();
    $mapLocation = json_decode(get_field('open_map'), true);
    
    ?>

    <div class="maker" id="mapid" style="height: 200px;" data-lat="<?php echo $mapLocation['lat']; ?>" data-lon="<?php echo $mapLocation['lon']; ?>"></div>
    

    <?php
  }
  echo paginate_links();
?>
</div>

</div>

<?php
get_footer();


?>