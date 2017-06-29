<?php get_header();
global $avion;
$logo                 = $avion['logo-img']['url'];
$heading_text         = $avion['heading_text'];
$sub_heading_text     = $avion['sub_heading_text'];
$footer_text          = $avion['footer_text'];
$mailchimp            = $avion['subscribe_link'];
?>
      <div class="row">
        <div class="col-md-12">
          <div class="header-logo-wrapper">
            <img src="<?php echo $logo ?>" alt="avion" title="Avion Template" class="img-responsive center-block" />
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-md-12">
        <h1 class="text-center"><?php echo $heading_text; ?></h1>
        <h3 class="text-center"><?php echo $sub_heading_text; ?></h3>
        </div>
      </div>


  
      <div class="row">
        <div class="col-md-12">
          <div id="counter_wrapper">
            <div class="text-center" id="counter"></div>
          </div>
        </div>
      </div>

      <div class="text-center mc">
        
            <form id="mc-form" method="post" action="<?php echo $mailchimp; ?>">
              <div class="subscribe-form">
                <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                <button class="submit-btn" type="submit">Submit</button>
              </div>
              <label for="mc-email" class="mc-label"></label>
            </form>

      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="social-media-wrapper text-center">
        <?php 
            if (isset($avion['contact_social']) && !empty($avion['contact_social'])) {
              foreach ($avion['contact_social'] as $single_social) {
                ?>
                  <a href="<?php echo $single_social['url'] ?>"><i class="fa <?php echo $single_social['title'] ?>"></i></a>
                <?php
              }
            } else {
        ?>
          <a href="#"><i class="fa fa-pinterest"></i></a>
          <a href="#"><i class="fa fa-facebook-official"></i></a>
          <a href="#"><i class="fa fa-google-plus-official"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        <?php } ?>
          

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center copyright"><?php echo $footer_text; ?></div> 
      </div>
    </div>
    
<?php get_footer(); ?>