<?php

require_once '..'. DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'vendor'. DIRECTORY_SEPARATOR . 'autoload.php';



class Index
{
	use src\traits\Page;
	
	protected function RenderBody()
	{		
		return 'Welcome to waryway.com!';
	}
}
new Index();
?>