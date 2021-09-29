<?php 
/*Template Name: Home
*/

get_header();?>
<?php $topsection = get_field('top_section'); if ($topsection):?>
<section class="banner-section">
   <div class="container">
   	<div class="row">   		
   		
   	 <div class="col-md-6 col-sm-6">
   	  <div class="banner-content">
   	  	<h1 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $topsection['main_heading'];?></h1>
   	  	<p class="wow fadeInUp" data-wow-delay="0.5s"><?php echo $topsection['text'];?></p>
   	  	<a href="sign_up.html" class="hvr-sweep-to-bottom wow fadeInUp banner-Btn" data-wow-delay="0.6s">Sign Up</a>
   	  	<a href="#" class="hvr-rectangle-out wow fadeInUp" data-wow-delay="0.7s">Watch Video</a>
   	  </div>
   	 </div>
   	 		
   	 <div class="col-md-6 col-sm-6">
   	  <div class="banner-image wow fadeInUp">
   	   <img src="<?php echo $topsection['image'];?>" width="593" height="460" alt=""/>
   	  </div>
   	 </div>	
   		
   	</div>
   </div>
  </section>
  <?php endif;
  $howitworks = get_field('how_it_works'); if ($howitworks):
  ?>
  <section class="section-how-work" id="how_it_work">
   <div class="container">
   	<div class="row">
   	 
   	  <div class="col-sm-12 col-md-12">
   	   <div class="how-works wow fadeInUp">
   	   	<h1><?php echo $howitworks['subtitle'];?></h1>
   	   	<h2><?php echo $howitworks['title'];?></h2>
   	   	<p><?php echo $howitworks['text'];?></p>
   	   </div>
   	  </div>
   	  <?php while( the_repeater_field('how_it_works_boxes') ): ?>
   	  <div class="col-md-4 col-sm-4">
   	   <div class="our-services wow fadeInUp" data-wow-delay="0.4s">
   	    <div class="arrow-<?php echo the_sub_field('arrow');?>"></div>
        <img src="<?php echo the_sub_field('image');?>" alt=""/>
        <h3><?php echo the_sub_field('title');?></h3>
        <p><?php echo the_sub_field('text');?></p>
       </div>
   	  </div>
   	  <?php endwhile;?>
   	</div>
   </div>
  </section>
  <?php endif;?>
  <section class="paralex-background"></section>
  <?php $ourservices = get_field('our_services'); if ($ourservices): ?>
  <section class="section-our-services" id="services">
   <div class="container">
   	<div class="row">
   		
   	  <div class="col-md-12 col-sm-12">
   	   <div class="how-works wow fadeInUp">
   	   	<h1><?php echo $ourservices['subtitle'];?></h1>
   	   	<h2><?php echo $ourservices['title'];?></h2>
   	   	<p><?php echo $ourservices['text'];?></p>
   	   </div>
   	  </div>
   	  
   	  <div class="col-sm-12 col-md-12">
   	   <div class="row">
          <?php while( the_repeater_field('services_number_process') ): ?>
   	   	<div class="col-md-6 col-sm-6">
   	   	 <div class="our-services-content wow fadeInUp" data-wow-delay="0.2s">
   	   	  <h4><?php echo the_sub_field('number');?></h4>
   	   	  <h5><?php echo the_sub_field('title');?></h5>
   	   	  <p><?php echo the_sub_field('text');?></p>
   	   	 </div>
   	   	</div>
   	   	<?php endwhile;?>
   	   	
   	   </div>
   	  </div>
   		
   	</div>
   </div>
  </section>
  <?php endif;
  $ourclients = get_field('our_clients'); if ($ourclients): ?>
  <section class="section-sentence">
   <div class="container">
   	<div class="row">
   		
   	  <div class="col-md-12 col-sm-12">
   	   <div class="sentence-heading wow fadeInUp">
   	   	<h1><?php echo $ourservices['subtitle'];?></h1>
   	   	<h2><?php echo $ourservices['title'];?></h2>
   	   	<p><?php echo $ourservices['text'];?></p>
   	   </div>
   	  </div>
   	  
   	  <div class="col-md-12 col-sm-12">
   	   <div class="company-brands">
   	   	<ul>
        <?php while( the_repeater_field('our_client_images') ): ?>
   	   	 <li class="wow fadeInUp" data-wow-delay="0.2s">
   	   	  <img src="<?php echo the_sub_field('image');?>" width="300" height="150" alt=""/>
   	   	 </li>
        <?php endwhile;?>
   	   	 
   	   	</ul>
   	   </div>
   	  </div>	
   		
   	</div>
   </div>
  </section>
  <?php endif;
  $ourprocess = get_field('our_process'); if ($ourprocess):
  ?>
  <section class="extra-section">
   <div class="container">
    <div class="row">
     
      <div class="col-md-12 col-sm-12">
       <div class="how-works wow fadeInUp">
   	   	<h1><?php echo $ourprocess['subtitle'];?></h1>
   	   	<h2><?php echo $ourprocess['title'];?></h2>
   	   	<p><?php echo $ourprocess['text'];?></p>
   	   </div>
      </div>
      <?php while( the_repeater_field('process_images') ): ?>
      <div class="col-md-4 col-sm-12">
       <div class="extra-content wow fadeInUp" data-wow-delay="0.2s">
   	    <img src="<?php echo the_sub_field('image');?>" width="288" height="288" alt=""/>
   	   </div>
      </div>
      <?php endwhile;?>    
    	
    </div>
   </div>
  </section>
  <?php endif;?>
  <section class="section-subscribe">
   <div class="container">
   	<div class="row">
   		
   	 <div class="col-md-3 col-sm-12"></div>
   	 	
   	 <div class="col-md-6 col-sm-12">
   	 
   	  <div class="subscribe-heading">
   	  	<h1>Don’t Want to Miss Anything?</h1>
   	  	<p>Sign up & don’t ever miss out on an update!</p>
   	  </div>
   	  
   	  <div class="subscribe-form">
   	  	<input type="email" name="" placeholder="EMAIL">
   	  	<button type="submit" value="" class="hvr-sweep-to-bottom">Submit</button>
   	  </div>
   	  
   	 </div>
   		
   	 <div class="col-md-3 col-sm-12"></div>	
   		
   	</div>
   </div>
  </section>

<?php get_footer(); ?>    