<?php do_action("philosophy_category_page", single_cat_title('',false)); ?>
<?php get_header();?>
    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
            <?php echo apply_filters("filter_text", "Filter Text"); ?>
            <?php echo apply_filters("filter_text_one_more", "Filter Text 1", "filter text 2"); ?>
            <?php do_action("philosophy_before_category_title"); ?>
                <h1>
                    <?php _e("Category", "philosophy"); ?> <?php single_cat_title(); ?>
                </h1>
            <?php do_action("philosophy_after_category_title"); ?>

            <?php do_action("philosophy_before_category_description"); ?>
                <p class="lead">
                    <?php echo category_description(); ?>
                </p>
            <?php do_action("philosophy_after_category_description"); ?>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>
                <?php
                if(!have_posts()):
                    ?>
                    <h5 class="text-center"><?php _e("There is no posts in this category", "philosophy"); ?></h5>
                <?php
                endif;
                ?>
                <?php 
                while (have_posts()){
                    the_post();
                    get_template_part("/template-parts/post-formats/post",get_post_format());
                }
                ?>

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                     <?php philosophy_pagination(); ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->

    <!-- s-extra
    ================================================== -->
    <?php get_footer();?>