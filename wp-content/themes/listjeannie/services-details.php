<?php 
/*Template Name: Services Website Design
*/

get_header();?>
<div class="main" id="site-content">
<?php $topsection = get_field('top_section'); if ($topsection):?>
         <section class="section-title-block">
            <div class="container">
               <div class="h-2 width-60">
                  <span class="subtitle"><?php echo $topsection['subtitle'];?></span>
                  <h1 class="text-effect h-2"><?php echo $topsection['title'];?></h1>
               </div>
            </div>
         </section>
         <?php if($topsection['formulate_design_title'] != '') : ?>
         <section class="formulate-design">
            <div class="container">
               <div class="row">
                  <div class="h-2 grid-sm-12 grid-md-6">
                     <h2><?php echo $topsection['formulate_design_title'];?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-6">
                     <p><?php echo $topsection['formulate_design_subtitle'];?></p>
                  </div>
               </div>
               <div class="row formulate-design-content">
               <?php while( the_repeater_field('formulate_design_boxes') ): ?>
                  <div class="grid-sm-6 grid-md-3">
                     <div class="number"><?php echo the_sub_field('number');?></div>
                     <p><?php echo the_sub_field('detail');?></p>
                  </div>
                  <?php endwhile;?>
               </div>
            </div>
         </section>
         <?php endif;?>
         <?php if($topsection['image'] != '') : ?>
         <section class="section-parallax-block parallax" data-stellar-background-ratio=0.1 style="background-image:url(<?php echo $topsection['image'];?>)">
         <?php $contentbox = get_field('top_section_details_on_image'); if($contentbox['title'] != '') : ?>
            <div class="parralax-content">
                <h2 class="h-4"><?php echo $contentbox['title'];?></h2>
                <p><?php echo $contentbox['text'];?></p>
            </div>
            <div class="left-cover bg-white"></div>
            <?php endif;?>
         </section>
         <?php endif;?>
         <?php $wid = get_field('what_is_design'); if($wid['title'] != '') : ?>
         <section class="parallax-split-content-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="parallax-content grid-md-6">
                        <h2><?php echo $wid['title'];?></h2>
                        <p><?php echo $wid['content'];?></p>
                    </div>
                    <div class="parallax-image grid-md-6">
                        <div class="primary-img-show" data-stellar-ratio="1.1" data-stellar-vertical-offset="700"><img src="<?php echo $wid['image'];?>" class="skip-lazy skip-webp" alt="landing-page-design-right-1"></div>
                        <div class="secondary-img-show"><img src="<?php echo $wid['image'];?>" class="skip-lazy skip-lazy skip-webp" alt="landing-page-design-right-1"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
         <?php $whyus = get_field('why_us'); if ($whyus != ''):
            if( have_rows('why_us') ): 
                while ( have_rows('why_us') ) : the_row();
            ?>
         <section class="design-skills bg-white">
            <div class="container">
               <div class="row section-title">
                  <div class="grid-sm-12 grid-md-5">
                     <h2><?php echo the_sub_field('title');?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-6 grid-md-offset-1">
                     <p><?php echo the_sub_field('content');?></p>
                  </div>
               </div>
               <div class="row">
               <?php while( the_repeater_field('details') ): ?>
                  <div class="design-skills-content grid-md-4 grid-sm-6 grid-xs-12">
                     <h3 class="h-4"><?php echo the_sub_field('details_title');?></h3>
                     <p><?php echo the_sub_field('details_content');?></p>
                  </div>
                  <?php endwhile; ?>
               </div>
            </div>
         </section>
         <?php endwhile; endif; endif;?>

         <?php $epwhyus = get_field('effective_pages_and_why_us'); if ($epwhyus != ''):
            if( have_rows('effective_pages_and_why_us') ):?>

         <section class="simple-content-block bg-very-light-gray">
            <div class="container">
                <div class="row">
                <?php while ( have_rows('effective_pages_and_why_us') ) : the_row(); ?>
                    <div class="grid-md-6 grid-sm-12 grid-xs-12">
                        <h2 class="h-4"><?php echo the_sub_field('title');?></h2>
                        <p><?php echo the_sub_field('content');?></p>
                        <ul>
                        <?php while( the_repeater_field('list_items') ): ?>   
                        <li><?php echo the_sub_field('list_item');?></li>
                        <?php endwhile;?>
                        </ul>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </section>
        <?php endif; endif;?>
        <?php $empower = get_field('empower_market'); if ($empower['title'] != ''): ?>
        <section class="section-our-export">
            <div class="container"><span class="small-title"><?php echo $empower['subtitle'];?></span>
                <h2><?php echo $empower['title'];?></h2>
                <div class="button"><a class="btn btn-white popup-with-form" href="#contact-form"><?php echo $empower['button_text'];?></a></div>
            </div>
        </section>
        <?php endif;?>
        <?php $designservice = get_field('design_services'); if ($designservice != ''):
            if( have_rows('design_services') ): 
                while ( have_rows('design_services') ) : the_row();
            ?>
        <section class="section-landing-service-wrapper">
            <div class="container">
                <div class="row">
                    <div class="grid-md-12 no-padding">
                        <div class="h-2 section-title grid-md-6">
                            <h2><?php echo the_sub_field('title');?></h2>
                        </div>
                        <div class="grid-md-6 grid-lg-6">
                            <p><?php echo the_sub_field('content');?></p>
                        </div>
                    </div>
                    <div class="grid-md-12 no-padding services-wrapper">
                    <?php while( the_repeater_field('details') ): ?>
                        <div class="grid-md-3 grid-sm-6 grid-xs-12"><span><i class="<?php echo the_sub_field('icon_class');?>"></i></span>
                            <h3 class="title width-80 h-5"><?php echo the_sub_field('name');?></h3>
                        </div>
                    <?php endwhile;?>
                    </div>
                    <div class="grid-md-12 button"><a class="btn btn-black" href="/contact/#contact-detail-form" target="_self"><?php echo the_sub_field('button_text');?></a></div>
                </div>
            </div>
        </section>
        <?php endwhile; endif; endif;?>
        <?php $designoffers = get_field('offers'); if ($designoffers != ''):
            if( have_rows('offers') ): 
                while ( have_rows('offers') ) : the_row();
            ?>
        <section class="design-skills">
            <div class="container">
                <div class="row">
                    <div class="grid-md-9 grid-sm-12 section-title">
                        <h2><?php echo the_sub_field('title');?></h2>
                    </div>
                </div>
                <div class="row">
                <?php while( the_repeater_field('offer_details') ): ?>
                    <div class="design-skills-content grid-md-4 grid-sm-6">
                        <h3 class="h-4"><?php echo the_sub_field('title');?></h3>
                        <p><?php echo the_sub_field('content');?></p>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </section>
        <section class="section-bg no-padding"><img src="<?php echo the_sub_field('image');?>"></section>
        <?php endwhile; endif; endif;?>
         <?php $includes = get_field('design_includes'); if ( $includes['title'] != ''):?>
         <section class="design-slider-wrapper">
            <div class="container">
               <div class="row">
                  <div class="grid-md-6">
                     <h2><?php echo $includes['title'];?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-5 grid-md-offset-1">
                     <p><?php echo $includes['content'];?></p>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="grid-xs-12">
                     <div class="outside-box-right">
                        <div class="swiper-container design-slider">
                           <div class="swiper-wrapper">
                           <?php while( the_repeater_field('design_include_boxes') ): ?>
                              <div class="swiper-slide">
                                 <div class="slide-content-wrap">
                                    <div class="services-number"><?php echo the_sub_field('number');?></div>
                                    <h3 class="services-title h-4"><?php echo the_sub_field('title');?></h3>
                                    <div class="services-content">
                                       <p><?php echo the_sub_field('text');?></p>
                                    </div>
                                 </div>
                              </div>
                              <?php endwhile;?>
                              <div class="swiper-slide"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php endif;?>
         <?php $principles = get_field('design_principles'); if ($principles['title'] != ''):?>
         <section class="design-content-wrapper">
            <div class="container">
               <div class="row section-title">
                  <div class="grid-md-6">
                     <h2><?php echo $principles['title'];?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-6">
                     <p><?php echo $principles['detail_text'];?></p>
                  </div>
               </div>
               
               <?php while( the_repeater_field('design_principles_details') ): ?>
               <div class="row design-content-box align-items-center">
                  <div class="grid-md-6 grid-sm-12 grid-xs-12">
                     <h3 class="h-4"><?php echo the_sub_field('title');?></h3>
                  </div>
                  <div class="grid-md-6 grid-sm-12 grid-xs-12">
                     <p><?php echo the_sub_field('text');?></p>
                  </div>
               </div>
               <?php endwhile;?>
            </div>
         </section>
         <?php endif;?>
         <?php $hireus = get_field('hire_us'); if ($hireus['hire_us_title'] != ''):?>
         <div class="popup-sticky-button"><a class="popup-with-form" href="#popup-hire-developer"><i class="fas fa-user"></i><span class="popup-text"><?php echo $hireus['hire_us_title'];?></span></a></div>
         <div id="popup-hire-developer" class="hire-developer-wrap popup-form mfp-hide">
            <div class="lazyload form-image" style="background-image:url(<?php echo $hireus['popup_image'];?>)"></div>
            <div class="form-detail">
               <div class="form-detail-title">
                  <h2><?php echo $hireus['hire_us_popup_title'];?></h2>
               </div>
               <p><?php echo $hireus['hire_us_popup_content'];?></p>
               <a class="btn btn-black" href="<?php echo home_url();?>/contact"><?php echo $hireus['hire_button_text'];?></a>
            </div>
         </div>
         <?php endif;?>
         <?php $designportfolio = get_field('design_portfolio'); if ($designportfolio['title'] != ''):?>
         <section class="mobile-app-our-works">
            <div class="container">
               <div class="row">
                  <div class="h-2 grid-sm-12 grid-md-5">
                     <h2><?php echo $designportfolio['title'];?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-6 grid-md-offset-1">
                     <p><?php echo $designportfolio['detail'];?></p>
                     <div class="button btn-dual"><a class="btn btn-white" href="<?php echo home_url();?>/work">View our works</a><a class="btn btn-white-border popup-with-form" href="#contact-form">Start a new project</a></div>
                  </div>
               </div>
            </div>
         </section>
         <?php endif;?>
         <?php $ddes = get_field('design_development_or_ecommerce_solutions'); if ($ddes['title'] != ''):?>
         <section class="section-design-further">
            <div class="container">
               <div class="h-2">
                  <span class="subtitle"><?php echo $ddes['subtitle'];?></span>
                  <h2><?php echo $ddes['title'];?></h2>
               </div>
               <div class="grid-md-12 service-wrapper">
               <?php while( the_repeater_field('design_development_or_ecommerce_solutions_boxes') ): ?>
                  <div class="grid-md-4 grid-sm-6 grid-xs-12">
                     <span><i class="<?php echo the_sub_field('icon_class');?>"></i></span>
                     <h3 class="h-4" class="title"><?php echo the_sub_field('title');?></h3>
                     <div class="content">
                        <p><?php echo the_sub_field('text');?></p>
                     </div>
                  </div>
                  <?php endwhile;?>
               </div>
            </div>
         </section>
         <?php endif;?>
         <section class="work-related-project work-listing" style="background-color: #f7f7f7">
            <div class="h-2 section-title">
               <h2>Related projects</h2>
            </div>
            <ul>
               <li>
                  <div class="work-list">
                     <div class="work-thumb">
                        <a href=../../work/opumo/index.html >
                           <noscript><img width=800 height=580 src="https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=opumo srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-595x431.jpg 595w" sizes="(max-width: 800px) 100vw, 800px"></noscript>
                           <img width=800 height=580 src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20580%22%3E%3C/svg%3E' data-src=https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image ewww_webp_lazy_load" alt=opumo data-srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-595x431.jpg 595w" data-sizes="(max-width: 800px) 100vw, 800px" data-src-webp=https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg.webp data-srcset-webp="https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1.jpg.webp 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-300x218.jpg.webp 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-768x557.jpg.webp 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/02/opumo-1-595x431.jpg.webp 595w">
                        </a>
                     </div>
                     <div class="work-content">
                        <h3 class="h-5"><a href=../../work/opumo/index.html ><span>OPUMO</span></a></h3>
                        <h4 class="h-5">A highly creative multi-branded store delivers robust shopping experience</h4>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="work-list">
                     <div class="work-thumb">
                        <a href=../../work/ecoski/index.html >
                           <noscript><img width=800 height=580 src="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="thumb-ecoski" srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-595x431.jpg 595w" sizes="(max-width: 800px) 100vw, 800px"></noscript>
                           <img width=800 height=580 src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20580%22%3E%3C/svg%3E' data-src=https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image ewww_webp_lazy_load" alt=thumb-ecoski data-srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-595x431.jpg 595w" data-sizes="(max-width: 800px) 100vw, 800px" data-src-webp=https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg.webp data-srcset-webp="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski.jpg.webp 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-300x218.jpg.webp 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-768x557.jpg.webp 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-ecoski-595x431.jpg.webp 595w">
                        </a>
                     </div>
                     <div class="work-content">
                        <h3 class="h-5"><a href=../../work/ecoski/index.html ><span>EcoSki</span></a></h3>
                        <h4 class="h-5">Make your ski experience memorable with perfect ski and snowboard gears</h4>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="work-list">
                     <div class="work-thumb">
                        <a href="https://www.themezaa.com/product/pofo-creative-portfolio-and-blog-wordpress-theme/" target="_blank">
                           <noscript><img width=800 height=580 src="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="thumb-pofo" srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-595x431.jpg 595w" sizes="(max-width: 800px) 100vw, 800px"></noscript>
                           <img width=800 height=580 src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20580%22%3E%3C/svg%3E' data-src=https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image ewww_webp_lazy_load" alt=thumb-pofo data-srcset="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-300x218.jpg 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-768x557.jpg 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-595x431.jpg 595w" data-sizes="(max-width: 800px) 100vw, 800px" data-src-webp=https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg.webp data-srcset-webp="https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo.jpg.webp 800w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-300x218.jpg.webp 300w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-768x557.jpg.webp 768w, https://linksture.b-cdn.net/wp-content/uploads/2020/09/thumb-pofo-595x431.jpg.webp 595w">
                        </a>
                     </div>
                     <div class="work-content">
                        <h3 class="h-5"><a href="https://www.themezaa.com/product/pofo-creative-portfolio-and-blog-wordpress-theme/" target="_blank"><span>Pofo WordPress Theme</span></a></h3>
                        <h4 class="h-5">A creative WordPress theme for portfolio, agency and blog websites</h4>
                     </div>
                  </div>
               </li>
            </ul>
         </section>
         <?php endif;?>
      </div>
      


<?php get_footer();?>