<?php get_header() ?>

    <script type='text/javascript'
            src='<?php echo get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js'?>'></script>
    <script type='text/javascript'
            src='<?php echo get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js'?>'></script>





<div id="wrapper">


    <?php get_template_part('sections/menu_header') ?>


    <?php get_template_part('sections/slider') ?>

    <?php get_template_part('sections/our_tours') ?>



    <?php get_template_part('sections/why_choose_us') ?>


    <?php get_template_part('sections/what_customers_say_slider') ?>


    <?php get_template_part('sections/travel_tips') ?>


</div>


<script type='text/javascript' src='<?php echo get_template_directory_uri() . '/js/combined.js'?>'></script>
<?php get_footer() ?>