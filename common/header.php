<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    
    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_url('http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic');
    echo head_css();

    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('modernizr'); ?>
    <?php queue_js_file('selectivizr-min'); ?>
    <?php queue_js_file('respond.min'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

            <header>
                <?php fire_plugin_hook('public_header'); ?>
                <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>
            </header>


        <div id="wrap">                
            <nav id="primary-nav">
                <div id="search-wrap">
                    <h2>Search</h2>
                    <?php echo search_form(array('show_advanced' => true)); ?>
                </div>
                <?php echo public_nav_main(); ?>
            </nav>
            <div id="content">
                <?php fire_plugin_hook('public_content_top'); ?>