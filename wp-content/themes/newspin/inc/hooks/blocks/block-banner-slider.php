<?php
/**
 * Full block part for displaying page content in page.php
 *
 * @package Newsphere
 */
?>

<?php

$newsphere_slider_category = newsphere_get_option('select_slider_news_category');
$newsphere_slider_mode = newsphere_get_option('select_main_banner_section_mode');
$newsphere_number_of_slides = 5;
$show_excerpt = 'true';
$excerpt_length = 25;

?>

<div class="banner-carousel-1 af-widget-carousel swiper-container banner-single-slider">
    <div class="swiper-wrapper">
        <?php
        $slider_posts = newsphere_get_posts($newsphere_number_of_slides, $newsphere_slider_category);
        if ($slider_posts->have_posts()) :
            while ($slider_posts->have_posts()) : $slider_posts->the_post();


                $aft_post_id = get_the_ID();
                $url = newsphere_get_freatured_image_url($aft_post_id, 'newsphere-slider-full');
                ?>
                <div class="swiper-slide">
                    <div class="big-grid">
                        <div class="read-single pos-rel">
                            <div class="read-img pos-rel read-img read-bg-img data-bg"
                                 data-background="<?php echo esc_url($url); ?>">
                                <a class="aft-slide-items" href="<?php the_permalink(); ?>"></a>
                                <?php if (!empty($url)): ?>
                                    <img src="<?php echo esc_url($url); ?>">
                                <?php endif; ?>
                                <?php newsphere_get_comments_count($aft_post_id); ?>

                            </div>
                            <div class="read-details">
                                <span class="min-read-post-format">
                                    <?php newsphere_post_format($aft_post_id); ?>
                                    <?php newsphere_count_content_words($aft_post_id); ?>
                                </span>
                                <div class="read-categories">
                                    <?php newsphere_post_categories(); ?>
                                </div>
                                <div class="read-title">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                </div>
                                <div class="entry-meta">
                                    <?php newsphere_post_item_meta(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <div class="swiper-button-next af-slider-btn"></div>
    <div class="swiper-button-prev af-slider-btn"></div>
</div>