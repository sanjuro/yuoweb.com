<?php
class Yuoweb
{
  public static function slugify($text)
  {
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);
 
    // trim and lowercase
    $text = strtolower(trim($text, '-'));
 
    return $text;
  }
  
  public static function clean($text)
  {
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '', $text);
 
    // trim and lowercase
    $text = strtolower(trim($text, '-'));
 
    return $text;
  }
  
	/**
	 *
	 *
	 * @param variant $check
	 */
	public static function TKO($check) {
		echo '<pre>';
		print_r($check);
		exit;
	}
}
?>