<?php
/**
 * @package      Qhtml5
 *
 * @author       Quantility
 * @copyright    Copyright (C) 2015. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
 
$num = Rand (1,9); 
switch ($num) {
	case 1: echo '<a href="/'.$honeypot_file.'"><!-- finches-naked --></a>';
	break;
	case 2: echo '<a href="/'.$honeypot_file.'"><img src="/templates/'.$this->template.'/images/finches-naked.gif" height="1" width="1" border="0"></a>';
	break;
	case 3: echo '<a href="/'.$honeypot_file.'" style="display: none;">finches-naked</a>';
	break;
	case 4: echo '<div style="display: none;"><a href="/'.$honeypot_file.'">finches-naked</a></div>';
	break;
	case 5: echo '<a href="/'.$honeypot_file.'"></a>';
	break;
	case 6: echo '<!-- <a href="/'.$honeypot_file.'">finches-naked</a> -->';
	break;
	case 7: echo '<div style="position: absolute; top: -250px; left: -250px;"><a href="/'.$honeypot_file.'">finches-naked</a></div>';
	break;
	case 8: echo '<a href="/'.$honeypot_file.'"><span style="display: none;">finches-naked</span></a>';
	break;
	case 9: echo '<a href="/'.$honeypot_file.'"><div style="height: 0px; width: 0px;"></div></a>';
}
?>
