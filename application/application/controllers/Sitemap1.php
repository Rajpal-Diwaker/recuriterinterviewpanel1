<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_sitemap extends CI_Controller {

	public function index()
	{
		print_r('dsds');die;
		require '/home/user/www/blog/wp-load.php';
		$links = [];

		//instantiate a WP_Query and get the latest 10 posts
		$wp_query = new \WP_Query();
		$wp_query->query('showposts=10');

			while ($wp_query->have_posts()) :
		   $wp_query->the_post();

			$links = the_permalink();

			endwhile;
		
		print_r($links);die;
		
		}
 
}
?>