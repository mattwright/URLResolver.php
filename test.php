<?php 
	require_once('vendor/autoload.php');
	use Resolver\URLResolver ;

	$resolver = new URLResolver();

	$resolver->isDebugMode(true);
	$resolver->setMaxRedirects(10);
	// $resolver->setCookieJar('/mycookie.cookie');
	// $resolver->setUserAgent('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36');
	$resolver->resolveURL('http://t.co/Hb6cX2JyGM');

?>