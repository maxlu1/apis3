<div class="container wptest_apis3-contentPage">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content wph_content-text">
            <?php the_content(); ?>
        </div>
    </article>
</div>
<section class="wptest_apis3-contentPage-formSection">
    <div class="container wptest_apis3-contentPage">
         <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
    </div>
</section>

<section class="wptest_apis3-contentPage-postsSection">
    <div class="container wptest_apis3-contentPostsList">
        <div class="row">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'category_name' => 'opportunity',
                'post_status' => 'publish'
            ));
            foreach ($recent_posts as $post) : ?>

                <div class="col-lg-4 col-sm-12 col-md-4 listItems">
                    <article class="items">
                        <h3 class="items-title"><?php echo $post['post_title'] ?></h3>
                        <p class="items-text"><?php echo get_the_excerpt($post['ID']) ?></p>
                        <div class="items-icon">
                            <svg viewBox="0 0 20 20" class="item-iconSymbol">
                                <path d="M 7.2904307,0.106202 V 7.2904318 H 0.1062015 V 12.70964 h 7.1842292 v 7.184158 H 12.709648 V 12.70964 h 7.18415 V 7.2904318 h -7.18415 V 0.106202 Z"></path>
                            </svg>
                        </div>
                    </article>
                </div>

            <?php endforeach;
            wp_reset_query(); ?>
        </div>
    </div>
</section>