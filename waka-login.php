<?php

	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		$username = $_REQUEST['username'];
		$Password = $_REQUEST['Password'];
		
		/* 
			:: Note to Wakaka Friends
			-----------------------------------------------------------------------------------------
			You can put your MySQL query here to check availability Username & Password from database
		*/
		
		if($username == 'wakaka' && $Password == 'design')
		{
			echo "success";
		}
	}

?>
