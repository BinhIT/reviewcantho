<?php
/**
 * Theme functions and definitions
 *
 * @package Flatsome-child
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
require_once 'simple_html_dom.php';
// Craw all post in cate 
function add_crawl_data(){
	if (!is_admin() && isset($_GET['act']) && $_GET['act']=='crawl'){
		//Code Crawler
		$html_content = file_get_html('https://trustreview.vn/category/do-gia-dung');
    echo ($html_content );
		if (!empty($list_post)){
		  foreach ($list_post as $post){
		    	$post_link = $post->find('.post_title h2 a', 0)->href;
		    	$thumb = $post->find('.post_thumb img')->src;

		    	//Post Detail
		    	$html_detail = file_get_html($post_link);
		    	$title = $html_detail->find('.content-entry .the_title h1', 0)->plaintext;
		    	$content = $html_detail->find('.content-entry .the_content', 0)->innertext;
		   }
		}
		die();
	}
}

add_action('init', 'add_crawl_data');




