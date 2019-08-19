<?php 


trait UrlParse {

// TRANSFORMAÇÃO DA URL EM ARRAYS

	public function parseUrl(){
		return explode("/", rtrim($_GET['url']),FILTER_SANITIZE_URL);
	}

}




 ?>