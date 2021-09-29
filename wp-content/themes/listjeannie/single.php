<?php 
get_header();
$category = get_the_category();
$cat_id = $category[0]->term_id;
$type = get_post_type( get_the_ID() );
if($type == 'portfolio'){
?>
<div class="main single-portfolio" id="site-content">
<?php $details = get_field( "portfolio_details" ); if ($details):?>
<section class="blog-banner bg-very-light-gray" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) top left no-repeat;
    background-size: cover;"> 
            <div class="container">
            <div class="h-2 width-70">
                <div class="subtitle"><span><?php echo $details['technology'];?></span></div>
                <h1 class="text-effect h-2"><?php echo $details['title'];?></h1>
            </div>
            </div>
         </section>
    
        <section class="work-banner no-padding-bottom" style="background: <?php echo $details['top_section_background_color'];?>;">
            <div class="container">
                <div class="section-title">
                    <div class="work-logo"><img width="192" height="32" src="<?php echo $details['portfolio_logo'];?>" data-src="<?php echo $details['portfolio_logo'];?>"
                            class="lazyload attachment-full size-full ewww_webp_lazy_load" alt="<?php echo $details['logo_alt_tag'];?>" data-src-webp="<?php echo $details['portfolio_logo'];?>"></div>
                    <h1 class="width-45 h-3"><span><?php echo $details['technology'];?></span><?php echo $details['title'];?></h1>
                </div>
                <div class="work-detail-images"><img width="1250" height="630" src="<?php echo $details['main_banner'];?>"
                        data-src="<?php echo $details['main_banner'];?>" class="lazyload attachment-full size-full ewww_webp_lazy_load" alt="<?php echo $details['main_banner_alt_tag'];?>" data-src-webp="<?php echo $details['main_banner'];?>"></div>
            </div>
        </section>
        <?php $involvement = get_field( "involvement" ); if ($involvement):?>
        <section class="work-image-content">
            <div class="container">
                <div class="row">
                    <div class="work-title-detail grid-md-3 grid-sm-6">
                        <p><span>COUNTRY</span><?php echo $involvement['country'];?></p>
                    </div>
                    <div class="work-title-detail grid-md-3 grid-sm-6">
                        <p><span>INDUSTRY</span><?php echo $involvement['industry'];?></p>
                    </div>
                    <div class="work-title-detail grid-md-3 grid-sm-6">
                        <p><span>INVOLVEMENT</span><?php echo $involvement['involvement_in_dev'];?></p>
                    </div>
                    <div class="work-title-detail grid-md-3 grid-sm-6">
                        <p><span>VISIT</span><a href="<?php echo $involvement['site_link'];?>" target="_blank" rel="noopener noreferrer nofollow"><?php echo $involvement['site_name'];?></a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="work-left-content grid-md-5 grid-sm-12">
                        <h2 class="h-3"><?php echo $involvement['title_in_involvment'];?></h2>
                    </div>
                    <div class="work-right-content grid-md-6 grid-md-offset-1 grid-sm-12">
                        <p><?php echo $involvement['involvement_text'];?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>

        <section class="work-image-block bg-very-light-gray">
            <div class="container">
            <?php while( the_repeater_field('case_studies_images') ): ?>
                <div class="work-detail-images">
                    <img width="1250" height="3509" src="<?php echo the_sub_field('case_study_image');?>" data-src="<?php echo the_sub_field('case_study_image');?>" class="lazyload attachment-full size-full ewww_webp_lazy_load"
                        alt="<?php echo the_sub_field('case_study_image_alt_tag');?>" data-srcset="<?php echo the_sub_field('case_study_image');?> 1250w, <?php echo the_sub_field('case_study_image');?> 107w, <?php echo the_sub_field('case_study_image');?> 365w, <?php echo the_sub_field('case_study_image');?> 768w, <?php echo the_sub_field('case_study_image');?> 547w, <?php echo the_sub_field('case_study_image');?> 730w, <?php echo the_sub_field('case_study_image');?> 1200w"
                        data-sizes="(max-width: 1250px) 100vw, 1250px" data-src-webp="<?php echo the_sub_field('case_study_image');?>" data-srcset-webp="<?php echo the_sub_field('case_study_image');?> 1250w, <?php echo the_sub_field('case_study_image');?> 107w, <?php echo the_sub_field('case_study_image');?> 365w, <?php echo the_sub_field('case_study_image');?> 768w, <?php echo the_sub_field('case_study_image');?> 547w, <?php echo the_sub_field('case_study_image');?> 730w, <?php echo the_sub_field('case_study_image');?> 1200w">
                </div>
                <?php endwhile;?>
            </div>
        </section>
        <?php $whatwedid = get_field( "about_client_and_what_we_did" ); if ($whatwedid):?>
        <section class="work-detail-content-wrapper">
            <div class="container">
                <div class="row section-title">
                    <div class="grid-sm-12 text-center">
                        <h2><?php echo $whatwedid['title'];?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="detail-content">
                        <div class="grid-sm-4 grid-xs-12">
                            <h3 class="h-4"><?php echo $whatwedid['about_client_title'];?></h3>
                        </div>
                        <div class="grid-sm-8 grid-xs-12">
                            <p><?php echo $whatwedid['about_client_paragraph_text'];?></p>
                        </div>
                    </div>
                    <div class="detail-content">
                        <div class="grid-sm-4 grid-xs-12">
                            <h3 class="h-4"><?php echo $whatwedid['opportunity_title'];?></h3>
                        </div>
                        <div class="grid-sm-8 grid-xs-12">
                            <p><?php echo $whatwedid['opportunity_content'];?></p>
                        </div>
                    </div>
                    <div class="detail-content">
                        <div class="grid-sm-4 grid-xs-12">
                            <h3 class="h-4"><?php echo $whatwedid['what_we_did_title'];?></h3>
                        </div>
                        <div class="grid-sm-8 grid-xs-12">
                            <p><?php echo $whatwedid['what_we_did_content'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
        <?php $deliverdresults = get_field( "delivered_results" ); if ($deliverdresults):?>
        <section class="work-counter work-bg-wrap-1" style="background:<?php echo $deliverdresults['results_section_background_color'];?>">
            <div class="container">
                <div class="section-title">
                    <div class="h-2">
                        <div class="subtitle"><span><?php echo $deliverdresults['results_subtitle'];?></span></div>
                        <h2 class="width-80"><?php echo $deliverdresults['results_title'];?></h2>
                    </div>
                </div>
                <div class="row">
                <?php while( the_repeater_field('results_values') ): ?>
                    <div class="counter-setting grid-md-3 grid-sm-6">
                        <div class="vertical-counter" data-value="<?php echo the_sub_field('result_values_value');?>"></div>
                        <div class="vertical-percent">%</div><span><?php echo the_sub_field('result_values_title');?></span>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
        </section>
        <?php endif;?>
        <?php $casestudyafterresult = get_field( "case_studies_images_after_results" ); if ($casestudyafterresult['case_study_image_after_result'] != ''):?>
        <section class="work-image-block">
            <div class="container">
                <div class="work-detail-images no-shadow">
                    <img
                        width="1001" height="623" src="<?php echo $casestudyafterresult['case_study_image_after_result'];?>" class="lazyload attachment-full size-full ewww_webp_lazy_load"
                        alt="<?php echo $casestudyafterresult['alt'];?>"></div>
            </div>
        </section>
        <?php endif;?>
        <?php while( the_repeater_field('work_images') ): ?>
        <section class="work-image-block bg-very-light-gray">
            <div class="container">
                <div class="work-detail-images no-shadow">
                    <img
                        width="1250" height="720" src="<?php echo the_sub_field('work_image');?>"  class="attachment-full size-full" alt="<?php echo the_sub_field('work_image_alt');?>" >
                </div>
            </div>
        </section>
        <?php endwhile;?>
        <?php $mobileimages = get_field( "work_mobile_images_and_background_image" ); if ($mobileimages):?>
        <section class="section-parallax-block parallax" data-stellar-background-ratio="0.1" style="background-image: url(<?php echo $mobileimages['background_image'];?>)"></section>
        <section class="work-detail bg-very-light-gray ">
            <div class="container">
                <div class="row">
                <?php while( the_repeater_field('mobile_images') ): ?>
                    <div class="work-mobile-image grid-sm-4">
                        <img width="377" height="745" src="<?php echo the_sub_field('mobile_image');?>" alt="<?php echo the_sub_field('mobile_image_alt');?>" class="lazyload attachment-full size-full ewww_webp_lazy_load">
                    </div>
                    <?php endwhile;?>
                </div>
                <?php $features = get_field( "optimization_features" ); if ($features):?>
                <div class="row">
                    <div class="work-detail-title grid-md-7 grid-sm-12">
                        <h3><span><?php echo $features['of_subtitle'];?></span><?php echo $features['of_title'];?></h3>
                    </div>
                    <div class="counter-wrap grid-md-5 grid-sm-12">
                        <div class="counter-setting">
                            <div class="counter-setting-title"><?php echo $features['feature_1_title'];?></div>
                            <div class="vertical-counter" data-value="<?php echo $features['feature_1_value'];?>"></div>
                            <div class="vertical-percent"><?php echo $features['feature_1_percentage'];?></div>
                        </div>
                        <div class="counter-setting">
                            <div class="counter-setting-title"><?php echo $features['feature_2_title'];?></div>
                            <div class="vertical-counter" data-value="<?php echo $features['feature_2_value'];?>"></div>
                            <div class="vertical-percent"><?php echo $features['feature_2_percentage'];?></div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </section>
        <?php endif;?>
        <?php $clienttstmnl = get_field( "client_testimonial" ); if ($clienttstmnl):?>
        <section class="section-testimonial-block">
            <div class="container">
                <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                <div class="content-text">
                    <p><?php echo $clienttstmnl['testimonial'];?></p>
                </div><span class="author-text"><?php echo $clienttstmnl['author_text'];?></span></div>
        </section>
        <?php endif;?>
    <?php endif;?>
    <?php
        $args = array(  
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'cat' => $cat_id,
        'order' => 'ASC',
        'post__not_in' => array(get_the_ID())
        );

        $loop = new WP_Query( $args );
        if ($loop->have_posts()):    
    ?>
    <section class="work-related-project work-listing">
        <div class="h-2 section-title">
            <h2>Related projects</h2>
        </div>
        <ul> 
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <li>
                <div class="work-list">
                    <div class="work-thumb">
                    <a class="portfoliodetails" href="<?php echo get_permalink();?>" nextpage="<?php echo get_permalink();?>">
                    <img width="800" height="580" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded"></a>
                    </div>
                    <div class="work-content">
                    <h3 class="h-5 portfoliodetails" nextpage="<?php echo get_permalink();?>"><a href="<?php echo get_permalink();?>"><span><?php the_title(); ?></span></a></h3>
                    <?php $exerpt = get_field('title_image_excerpts');?>
                    <h4 class="h-5"><?php echo $exerpt['portfolio_excerpt'];?></h4>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </section>
    <?php endif;?>
</div>
<?php
}

elseif($type == 'post'){
$blogcategory = get_the_category();
$category = $blogcategory[0]->cat_name;
?>
<div class="main" id="site-content" data-barba="container">
        <?php $header = get_field('blog_details'); if ($header):?>
         <section class=section-title-block>
            <div class=container>
               <div class="h-2 width-70">
                  <span class=subtitle><?php echo get_the_date('j F Y'); ?> IN <a href="#" rel="category tag"><?php echo $category;?></a></span>
                  <h1 class="text-effect h-2"><?php the_title(); ?></h1>
               </div>
            </div>
         </section>
         <section class="section-parallax-block parallax" data-stellar-background-ratio=0.1 style="background-image:url('<?php echo $header['image'];?>')">
            <div class="left-cover bg-white"></div>
         </section>
         <section class=blog-detail-content-section>
            <div class=container>
               <div class=blog-detail-content>
               <?php while( the_repeater_field('blog_content') ): ?>
                  <p><?php echo the_sub_field('content_text');?></p>
               <?php endwhile;?>
               </div>
            </div>
         </section>
         <section class=blog-detail-content-section style="background-color: #f7f7f7;">
            <div class=container>
               <div class=blog-detail-content>
               <?php while( the_repeater_field('content_text') ): ?>
                  <p><?php echo the_sub_field('text');?></p>
               <?php endwhile;?>
                  
                     <?php
                     if( have_rows('content_list_items') ):
                        echo "<ul>";
                        // Loop through rows.
                        while ( have_rows('content_list_items') ) : the_row();
                    
                        while( the_repeater_field('list_content') ): ?>
                            <li><?php echo the_sub_field('list_text');?></li>
                         <?php endwhile;
                             
                        endwhile;
                        echo "</ul>";
                    endif;
                    ?>
               </div>
            </div>
         </section>
         <?php $getstarted = get_field('get_started_section'); if ($getstarted):
         $text = '';
         $btntext = '';
        $defaulttext = 'For immediate assistance with any type of website design and eCommerce development related requirements, connect with us now!';
        $defaultbtn = 'Get Started Now';
        if($getstarted['text'] == ''){$text = $defaulttext;}else{$text = $getstarted['text'];}
        if($getstarted['button_text'] == ''){$btntext = $defaultbtn;}else{$btntext = $getstarted['button_text'];}  
        ?>
         <section class="client-services client-services-middle bg-color bg-yellow">
            <div class=container>
               <div class=row>
                  <div class="h-2 grid-sm-12 grid-md-8 left-middle">
                     <h2><?php echo $text;?></h2>
                  </div>
                  <div class="grid-sm-12 grid-md-4 right-middle">
                     <div class="button btn-dual"><a class="btn btn-black popup-with-form" href=#contact-form><?php echo $btntext;?></a></div>
                  </div>
               </div>
            </div>
         </section>
         <?php endif;?>
         <?php endif;?>
      </div>



<?php }?>


<?php get_footer(); ?>    