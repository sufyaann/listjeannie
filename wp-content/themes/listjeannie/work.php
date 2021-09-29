<?php 
/*Template Name: Work/Portfolio
*/

get_header();
$args = array(  
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC', 
);

$loop = new WP_Query( $args ); 

?>

<div class="main" id="site-content">
    <?php $header = get_field('work_header'); if ($header):?>
        <section class="section-title-block">
            <div class="container">
                <div class="h-2 width-70">
                    <div class="subtitle"><span><?php echo $header['work_subtitle'];?></span></div>
                    <h1 class="text-effect h-2"><?php echo $header['work_title'];?></h1>
                </div>
            </div>
        </section>
        <section class="work-listing no-padding">
            <ul>
                <?php 
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $portfolio = get_field('title_image_excerpts'); if ($portfolio):
                ?>
                <li class="change<?php echo the_id();?> loadjs" id="<?php echo the_id();?>">
                    <div class="work-list">
                        <div class="work-thumb" style="background-color:#405975"> 
                        <a class = "portfoliodetails menu-item" href="<?php echo get_permalink();?>"  id="<?php echo the_id();?>" nextpage="<?php echo get_permalink();?>">
                        <img width="800" height="580" src="<?php echo $portfolio['portfolio_image'];?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="opumo" srcset="<?php echo $portfolio['portfolio_image'];?> 800w, <?php echo $portfolio['portfolio_image'];?> 300w, <?php echo $portfolio['portfolio_image'];?> 768w, <?php echo $portfolio['portfolio_image'];?> 595w" sizes="(max-width: 800px) 100vw, 800px"></a></div>
                        <div
                            class="work-content">
                            <h2 class="h-5 portfoliodetails" id="<?php echo the_id();?>" nextpage="<?php echo get_permalink();?>"><a class="menu-item" href="<?php echo get_permalink();?>" nextpage="<?php echo get_permalink();?>"><span><?php echo $portfolio['portfolio_title'];?></span></a></h2>
                            <h3 class="h-5"><?php echo $portfolio['portfolio_excerpt'];?></h3>
                        </div>
                    </div>
                </li>
                <?php endif; endwhile; wp_reset_postdata();?>
            </ul>
        </section>

    <?php endif;?>
</div>


<?php
/*
$argspopup = array(  
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC', 
);

$looppopup = new WP_Query( $argspopup );
while ( $looppopup->have_posts() ) : $looppopup->the_post(); ?>
<div id="portfolio-details<?php echo the_id();?>" class="modal" style="display:none;">
<div class="cross" id="<?php echo the_id();?>">X</div>


<?php $details = get_field( "portfolio_details" ); if ($details):?>
        <section class="work-banner no-padding-bottom" style="background: <?php echo $details['top_section_background_color'];?>">
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
                    <a href="<?php echo get_permalink();?>">
                    <img width="800" height="580" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded"></a>
                    </div>
                    <div class="work-content">
                    <h3 class="h-5"><a href="<?php echo get_permalink();?>"><span><?php the_title(); ?></span></a></h3>
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
    
    <?php endwhile; wp_reset_postdata(); */?>
    
  <script>
//   function detailpage(){
//     var url = jQuery(this).attr('href');
//     alert(url);

//   }
  
// jQuery('.cross').click(function() {
//     var id = jQuery(this).attr('id');
//     //alert(id);
//     jQuery('#portfolio-details' + id).css("display", "none");
// });
  </script>  

<?php get_footer(); ?>    