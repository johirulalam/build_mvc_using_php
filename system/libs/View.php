<?php 

/**
 * 
 */
class View
{
	public function view($filename) {
		include 'app/views/'.$filename.".php";
	}
}



 ?>