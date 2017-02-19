<?php /** * The header for our theme. * * Displays all of the <head> section and everything up till
<div id="content">
    * * @package anton */ ?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_enqueue_script( "jquery"); ?>
        <?php wp_head(); ?>
    </head>

    <body>
     
       
        <div class="container-fluid header-wrapper">
            <!--header-->
            <div class="row a-navbar">
                <div class="logotype"><a href=""><i class="fa fa-check"></i> FOP.BIZ.UA</a></div>
                   
                    <nav>
                        <?php wp_nav_menu( array( 'menu_class'=>'menu-top', 'theme_location'=>'top-menu' ) ); ?>
                    </nav>
                    
                
            </div>
            </div>
        <div class="container">   
          <div class="row">
           

            
            <div class="row">
                <div class="col-md-12 a-header">
                        <?php if ( function_exists( 'easingslider' ) ) { easingslider( 7 ); } ?>
                </div>
            </div>
            </div>
        </div>  
        
            <div class="menu-mobile-wrapper">
               <div class="">
                <button class="btn-slide"><i class="fa fa-bars"></i>&nbsp;Меню</button>
            </div>
                <nav class="navigation-top" id="menu-top">
                <?php wp_nav_menu( array( 'menu_class'=>'menu-top', 'theme_location'=>'top-menu' ) ); ?>
            </nav> 
            </div>
        

        <div class="container a-content-all">