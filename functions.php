<?php

    function add_styles()
    {
        /* Add Style */
        wp_enqueue_style('inputs',get_template_directory_uri().'/css/inputs.css');
        wp_enqueue_style('Buttons',get_template_directory_uri().'/css/buttons4.css');
        wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style('shahd-font','http://www.fontstatic.com/f=shahd');
        wp_enqueue_style('cairo-font','http://www.fontstatic.com/f=cairo');
        wp_enqueue_style('navbar',get_template_directory_uri().'/css/navbar.css');
        wp_enqueue_style('boostrap',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('boostrap-rtl',get_template_directory_uri().'/css/bootstrap-rtl.min.css');
        wp_enqueue_style('bottondown',get_template_directory_uri().'/css/buttondown.css');
        wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');


    }

    function add_scripts()
    {
        /* Add Javascript */
        wp_deregister_script("jquery"); /* Delete Jquery from Registered */
        wp_register_script('jquery',includes_url("/js/jquery/jquery.js"),array(),false,true); /* Register Jquery */
        wp_enqueue_script("jquery");
        wp_enqueue_script('boostrap_script',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
        wp_enqueue_script('viewportchecker',get_template_directory_uri().'/js/viewportchecker.min.js',array(),false,true);
        wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array(),false,true);




    }

    function navigation_menu(){
        register_nav_menu('navbar' , __('Navigation Bar'));
    }


/* Displating Navivation  Menu */
    function display_navbar()
    {
        wp_nav_menu(array(

            'menu_class' => 'categs'
        ));
    }

    add_action('wp_enqueue_scripts','add_styles');
    add_action('wp_enqueue_scripts','add_scripts');
    add_action('init','navigation_menu');

    /* Support Featured Image */
    add_theme_support('post-thumbnails');


    ?>