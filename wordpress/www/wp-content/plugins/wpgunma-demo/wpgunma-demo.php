<?php
/*
Plugin Name: WP Gunma Demo
Plugin URI: https://go-sign.info
Description: This is a sample
Author: Ko Takagi
Version: 0.9
Author URI: https://go-sign.info
*/

add_action( 'init', function() {
	register_post_type( 'blog', [
		'has_archive' => true,
		'public' => true,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		'label'  => 'ブログ',
	] );
} );

add_action( 'init', function() {
	register_post_type( 'news', [
		'has_archive' => true,
		'public' => true,
		'supports' => [
			'title',
			'editor',
			'thumbnail',
		],
		'label'  => 'ニュース',
	] );
} );

add_action( 'init', function() {
	register_post_type( 'product', [
		'has_archive' => true,
		'public' => true,
		'supports' => [
			'title',
		],
		'label'  => '商品',
	] );
} );

add_filter( 'the_content', function( $content ) {
	return $content;
} );
