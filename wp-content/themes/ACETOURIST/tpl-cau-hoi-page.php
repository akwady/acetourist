<?php
/**
 * template name: Trang của các câu hỏi
 */
    get_header();
    get_template_part('sections/menu_header_2')
?>
    <section id="header_bg_img" style="
        background-image: url('<?php echo get_field('img_header' , 'option') ?>');
        background-attachment: fixed;
        background-size: cover;
        background-position:center bottom;">
        <div class="container-fluid">
            <div class="row">
                <div class="header_bg_img_title">
                    <p><?php echo get_field('page_title' , 'option') ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="header_question">
        <div class="container">
            <div class="row">
                <?php while(have_rows('question_all' , 'option')) : the_row() ?>
                <ul class="question_all">
                    <li class="question_1">
                        <div class="question_1_skull col-lg-1 col-md-2 col-xs-2">
                           <?php echo get_sub_field('question_1' , 'option') ?>

                        </div>
                        <div class="question_1_title col-lg-11 col-md-10 col-xs-10">
                            <p>
                                <?php echo get_sub_field('question' , 'option') ?>

                            </p>
                        </div>
                    </li>
                    <?php while(have_rows('reply' , 'option')) : the_row() ?>

                    <li class="question_1">
                        <div class="question_1_skull question_1_skull_2 col-md-2 col-sm-2 col-xs-2">
                            <?php echo get_sub_field('skull' , 'option') ?>
                        </div>
                        <div class="question_1_text col-lg-11 col-md-10 col-sm-11 col-xs-10">
                            <?php echo get_sub_field('reply_text' , 'option') ?>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endwhile; ?>
            </div>
        </div>
    </section>


<?php get_footer() ?>
