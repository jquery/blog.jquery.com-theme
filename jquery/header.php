<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head data-live-domain="<?php echo JQUERY_LIVE_DOMAIN; ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	?></title>

	<meta name="author" content="jQuery Foundation - jquery.org">
	<meta name="description" content="jQuery: The Write Less, Do More, JavaScript Library">

	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/i/favicon.ico">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css?v=1">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.2.6.2.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<script src="//use.typekit.net/wde1aof.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

</head>
<body <?php body_class(); ?>>

<header>
	<section id="global-nav">
		<nav>
			<div class="constrain">
				<ul class="projects">
					<li class="project jquery"><a href="http://jquery.com/" title="jQuery">jQuery</a></li>
					<li class="project jquery-ui"><a href="http://jqueryui.com/" title="jQuery UI">jQuery UI</a></li>
					<li class="project jquery-mobile"><a href="http://jquerymobile.com/" title="jQuery Mobile">jQuery Mobile</a></li>
					<li class="project sizzlejs"><a href="http://sizzlejs.com/" title="Sizzle">Sizzle</a></li>
					<li class="project qunitjs"><a href="http://qunitjs.com/" title="QUnit">QUnit</a></li>
				</ul>
				<ul class="links">
					<li><a href="http://plugins.jquery.com/">Plugins</a></li>
					<li class="dropdown"><a href="http://contribute.jquery.org/">Contribute</a>
						<ul>
							<li><a href="http://contribute.jquery.org/cla/">CLA</a></li>
							<li><a href="http://contribute.jquery.org/style-guide/">Style Guides</a></li>
							<li><a href="http://contribute.jquery.org/triage/">Bug Triage</a></li>
							<li><a href="http://contribute.jquery.org/code/">Code</a></li>
							<li><a href="http://contribute.jquery.org/documentation/">Documentation</a></li>
							<li><a href="http://contribute.jquery.org/web-sites/">Web Sites</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="http://events.jquery.org/">Events</a>
						<ul class="wide">
							<li><a href="http://appendto.com/what-we-do/training/schedule/jquery-virtual-training-april-2014/">Apr 16-17 | jQuery Virtual Training</a></li>
							<li><a href="http://jqueryuk.com/?utm_source=jqueryorg&utm_medium=banner&utm_campaign=jqueryorgbanner">May 16 | jQuery UK</a></li>
							<li><a href="http://appendto.com/what-we-do/training/schedule/jquery-virtual-training-june-2014/">Jun 17-19 | jQuery Virtual Training</a></li>
							<li><a href="http://events.jquery.org/2014/chicago/">Sep 12-13 | jQuery Chicago</a></li>
							<li><a href="http://2014.cssdevconf.com/">Oct 13-15 | CSS Dev Conf 2014</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="https://jquery.org/support/">Support</a>
						<ul>
							<li><a href="http://learn.jquery.com/">Learning Center</a></li>
							<li><a href="http://try.jquery.com/">Try jQuery</a></li>
							<li><a href="http://irc.jquery.org/">IRC/Chat</a></li>
							<li><a href="http://forum.jquery.com/">Forums</a></li>
							<li><a href="http://stackoverflow.com/tags/jquery/info">Stack Overflow</a></li>
							<li><a href="https://jquery.org/support/">Commercial Support</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="https://jquery.org/">jQuery Foundation</a>
						<ul>
							<li><a href="https://jquery.org/join/">Join</a></li>
							<li><a href="https://jquery.org/members/">Members</a></li>
							<li><a href="https://jquery.org/team/">Team</a></li>
							<li><a href="http://brand.jquery.org/">Brand Guide</a></li>
							<li><a href="https://jquery.org/donate/">Donate</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</section>
</header>

<div id="container">
	<div id="logo-events" class="constrain clearfix">
		<h2 class="logo"><a href="<?php echo jq_logo_link(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h2>

		<aside>
			<div id="broadcast"></div>
		</aside>
	</div>

	<nav id="main" class="constrain clearfix">
		<?php get_template_part('menu', 'header'); ?>

		<?php get_search_form(); ?>
	</nav>

	<div id="content-wrapper" class="clearfix row">
