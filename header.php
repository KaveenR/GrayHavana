<!doctype html>
<htmls>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" media="all" />
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bower_components/modernizr/src/Modernizr.js"></script>
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
				<?php wp_head(); ?>
				<script>
		        // conditionizr.com
		        // configure environment tests
		        conditionizr.config({
		            assets: '<?php echo get_template_directory_uri(); ?>',
		            tests: {}
		        });
		        </script>
		</head>

    <body>
        <header>
            <h1 class="heading"><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
    				<?php wp_head(); ?></h1>
               <nav><?php html5blank_nav(); ?></nav>
        </header>
				<div class="bodyholder">
        <div class="container">
            <div class="mainbody">
