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
	
	/**
	 * Function to create nice timestamps
	 *
	 * @param unixtimestamp $t Time to convert
	 * @param string $f The Format
	 * 
	 * @return string The nice stamp
	 */
  public static function time_offset($t, $f = 'h:ma M. j Y T'){
	$o = time() - $t;
	switch($o){
		case($o <= 1): return "just now"; break;
		case($o < 20): return $o . " seconds ago"; break;
		case($o < 40): return "half a minute ago"; break;
		case($o < 60): return "less than a minute ago"; break;
		case($o <= 90): return "1 minute ago"; break;
		case($o <= 59*60): return round($o / 60) . " minutes ago"; break;
		case($o <= 60*60*1.5): return "1 hour ago"; break;
		case($o <= 60*60*24): return round($o / 60 / 60) . " hours ago"; break;
		case($o <= 60*60*24*1.5): return "1 day ago"; break;
		case($o < 60*60*24*7): return round($o / 60 / 60 / 24) . " days ago"; break;
		case($o <= 60*60*24*9): return "1 week ago"; break;
		default: return date($f, $t);
	}
  }
}
?>