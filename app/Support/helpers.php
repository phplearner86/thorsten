<?php  

function checked($current, $checked)
{
	return $current == $checked ? 'checked' : '';
}

 function imageName($path)
{
	return substr($path, strrpos($path, '/', -1)+1, strlen($path));
	/*$name = explode("/", $path);
	return $name[2];*/
}
