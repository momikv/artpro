<?php
  
  /*status -*/
  
  if(isset($_COOKIE['USER_LANG']))
		header ("location: {$_COOKIE['USER_LANG']}");
	else
		header ("location: en");
?>
