<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title>oh, hello friend | you are loved</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="shortcut icon" href="http://ohf.luciewu.com/wp-content/uploads/2014/02/8_favicon.ico"/>

<?php wp_head(); ?>
</head>

<body <?php body_class('class-name'); ?>>
<div id="mainwrapper">
	<div id="header">
		<div id="headerdiv">
		<a href="http://ohf.luciewu.com"><img id="logo" src="http://ohf.luciewu.com/wp-content/uploads/2014/02/main_logo.png"></a>
		

		<div id="headerlinks">
		<?php if ( is_user_logged_in() ) { 
			global $current_user;
     			get_currentuserinfo(); ?>
			
			<span><a href="/cart"><img style="width: 15px;
vertical-align: text-top;" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/cart.png"/> Cart</a> | <a href="/my-account">My Account</a> | <a href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a> | <a href="/wishlist">Wishlist</a></span> 
		 <?php } else { ?>
			<span><a href="/cart"><img style="width: 15px;
vertical-align: text-top;" src="http://ohf.luciewu.com/wp-content/uploads/2014/01/cart.png"/> Cart</a> | <a href="/my-account">Sign In</a></span>
		<?php } ?> 
		</div> <!-- end header links -->
		</div> <!-- end headerdiv -->
	</div><!-- end header -->

	<div id="headermenu">
		<div id="headermenudiv">
			<?php wp_nav_menu( array('menu' => 'Header Menu' )); ?>
		</div>
	</div><!-- end headermenu -->
	

	<div id="main">
