<?php 
/*Template Name: Services
*/

get_header();?>

<div class="main" id="site-content">
    <?php $header = get_field('header_section'); if($header) : ?>
        <section class="section-title-block">
            <div class="container">
                <div class="h-2 width-60"><span class="subtitle"><?php echo $header['header_subtitle'];?></span>
                    <h1 class="text-effect h-2"><?php echo $header['header_title'];?></h1>
                </div>
            </div>
        </section>
        <section class="section-parallax-block parallax" data-stellar-background-ratio="0.1" style="background-image:url(<?php echo $header['header_image'];?>)"></section>
    <?php endif;?>
    <?php $services = get_field('our_services'); if($services) : ?>
        <section class="section-story-block section-service-detail bg-very-light-gray">
            <div class="h-2 section-title">
                <div class="width-60 subtitle"><span></span></div>
                <h2 class="width-60 text-effect"><?php echo $services['our_services_title'];?></h2>
            </div>
            <div class="service-information">
            <?php while(the_repeater_field('our_services_details') ):?>    
                <div class="service-info">
                    <div class="service-wrap">
                        <h3 class="h-6"><a href="<?php echo the_sub_field('title_link');?>"><?php echo the_sub_field('title');?></a></h3>
                        <div class="toggle-class"></div>
                        <ul>
                        <?php while(the_repeater_field('features') ):?>    
                            <li><a href="<?php echo the_sub_field('link');?>"><?php echo the_sub_field('text');?></a></li>
                        <?php endwhile;?>
                        </ul>
                    </div>
                </div>
                <?php endwhile;?>   
            </div>
        </section>
        <?php endif;?>
        <?php $process = get_field('our_process'); if($process) : ?>
        <section class="section-approach-block dark-section">
            <div class="parallax-div parallax-div-left" data-stellar-ratio="1.2"></div>
            <div class="container">
                <div class="content row">
                    <div class="sticky-sidebar h-2 section-title grid-sm-12 grid-md-7">
                        <div class="width-80 subtitle"><span><?php echo $process['subtitle'];?></span></div>
                        <h2>
                            <?php echo $process['title'];?>
                        </h2>
                    </div>
                    <div class="approach-info grid-sm-12 grid-md-5">
                    <?php while(the_repeater_field('our_process_details') ):?>    
                        <div class="approach-detail">
                            <h3 class="h-4"><?php echo the_sub_field('title');?></h3>
                            <p><?php echo the_sub_field('content');?></p>
                        </div>
                    <?php endwhile;?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
        <?php $proficiency = get_field('work_proficiency'); if($proficiency) : ?>
        <section class="section-technology-block bg-very-light-gray">
            <div class="container">
                <div class="h-2 section-title">
                    <div class="width-60 subtitle"><span><?php echo $proficiency['subtitle'];?></span></div>
                    <h2 class="width-60"><?php echo $proficiency['title'];?></h2>
                </div>
                <div class="tech-info">
                <?php while(the_repeater_field('proficiency_dev') ):?>
                    <div class="tech-wrapper">
                        <div class="tech-wrap"><a href="<?php echo the_sub_field('button_link');?>" target="_self"><img width="150" height="45" src="<?php echo the_sub_field('image');?>" class="lazyload skip-webp"></a>
                            <p><?php echo the_sub_field('details_content');?></p> <a class="btn btn-black" href="<?php echo the_sub_field('button_link');?>" target="_self"><?php echo the_sub_field('button_name');?></a></div>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
        </section>
        <?php endif;?>
        <?php $collaboration = get_field('collaboration_types'); if($collaboration) : ?>
        <section class="section-working-slider">
            <div class="container">
                <div class="working-slider-wrap">
                    <div class="swiper-container working-slider">
                        <div class="working-title"><?php echo get_field('collaboration_title');?></div>
                        <div class="swiper-wrapper">
                            <?php while(the_repeater_field('collaboration_types') ):?>
                            <div class="swiper-slide">
                                <div class="work-number"><?php echo the_sub_field('number');?></div>
                                <h3><?php echo the_sub_field('content_title');?></h3>
                                <div class="working-slider-content">
                                    <p><?php echo the_sub_field('content_detail');?></p>
                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                        <div class="swiper-button-prev working-prev"></div>
                        <div class="swiper-button-next working-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>

</div>

<?php get_footer(); ?>    