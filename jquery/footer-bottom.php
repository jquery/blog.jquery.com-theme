<?php
	$project = preg_replace( '/^.*?([^.]+)\.[^.]+$/', '$1', JQUERY_LIVE_DOMAIN );

	$links = array(
		'Learning Center' => array(
			'icon' => 'pencil',
			'url' => 'http://learn.jquery.com/'
		),
		'Forum' => array(
			'icon' => 'group',
			'url' => 'http://forum.jquery.com/',
		),
		'API' => array(
			'icon' => 'wrench',
			'url' => 'http://api.' . $project . '.com/'
		),
		'Twitter' => array(
			'icon' => 'twitter',
			'url' => 'http://twitter.com/jquery'
		),
		'IRC' => array(
			'icon' => 'comments',
			'url' => 'http://irc.jquery.org/'
		),
		'GitHub' => array(
			'icon' => 'github',
			'url' => 'https://github.com/jquery'
		)
	);

	switch ( $project ) {
	case 'jqueryui':
		$links[ 'Forum' ][ 'url' ] = 'http://forum.jquery.com/using-jquery-ui/';
		$links[ 'Twitter' ][ 'url' ] = 'http://twitter.com/jqueryui';
		break;
	case 'jquerymobile':
		$links[ 'Forum' ][ 'url' ] = 'http://forum.jquery.com/jquery-mobile/';
		$links[ 'Twitter' ][ 'url' ] = 'http://twitter.com/jquerymobile';
		break;
	case 'qunitjs':
		$links[ 'Forum' ][ 'url' ] = 'http://forum.jquery.com/qunit-and-testing/';
		$links[ 'Twitter' ][ 'url' ] = 'http://twitter.com/qunitjs';
		break;
	}
?>

<div id="legal">
	<ul class="footer-site-links">
	<?php foreach ( $links as $title => $link ) : ?>
		<li><a class="icon-<?php echo $link[ 'icon' ]; ?>" href="<?php echo $link[ 'url' ]; ?>"><?php echo $title; ?></a></li>
	<?php endforeach ?></ul>
	<p class="copyright">
		Copyright <?php echo date('Y'); ?> <a href="https://jquery.org/team/">The jQuery Foundation</a>.
		<a href="https://jquery.org/license/">jQuery License</a>
		<span class="sponsor-line"><a href="http://digitalocean.com" rel="nofollow" class="do-link">Web hosting by Digital Ocean</a> | <a href="http://www.stackpath.com" rel="nofollow" class="sp-link">CDN by StackPath</a></span>
	</p>
</div>

<?php
unset( $project, $links );
