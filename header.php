<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>


	<!-- Playfair Display Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	    <link rel="stylesheet" type="text/css" href="
	        <?php bloginfo('stylesheet_url'); ?>
	    " />

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid"> <!-- Begin Fluid Container Div -->

        <header class="row">
            <div class="col-md-12 globalmenu"> <!-- Global Nav -->
                <!--h1><a href="<!?php $url = home_url('/'); echo $url; ?>"><!?php bloginfo('name'); ?></a></h1-->
			          <div class="header-search"><?php get_search_form(); ?>
					      <?php wp_nav_menu( array( 'theme_location' => 'global-menu' ) ); ?>
				    </div>
            </div>
    			  <div class="col-md-12 topmenu">
      			    <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
                <a href="http://www.rebeccaschoenrock.com/thig/">
                    <img class="main-logo" src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/TH-Horiz-4c-Stacked.png" width="260px" alt="Tower Hill Insurance Group" />
                </a>
    			  </div>

				  <!-- Breadcrumbs Code -->

				  <?php if(!is_front_page()){ ?>
					    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					        <?php if(function_exists('bcn_display'))
					        {
					            bcn_display();
					        }?>
					    </div>
				  <?php } ?>
		    </header>
