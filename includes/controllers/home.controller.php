<?php

/* This controller home page */

class HomeController{
	public function handleRequest(){
		
		// Select all the categories:
		$content = Category::find();
		
		render('home',array(
			'title'		=> 'Book Store',
			'content'	=> $content
		));
	}
}

?>