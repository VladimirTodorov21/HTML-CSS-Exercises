<!DOCTYPE html>
	 
<html>
	<body>
    	<?php
            $count_visit=0;
      
            if(isset($_COOKIE['count_visit'])) {
            	$count_visit = $_COOKIE['count_visit'];
           		$count_visit ++;
            }
            
            if(isset($_COOKIE['last_visit'])) {
            	$last_visit = $_COOKIE['last_visit'];
            }
            
            setcookie('count_visit', $count_visit+1, time()+3600);
            setcookie('last_visit', date("D M d h:i:s T Y"), time()+3600);

            if($count_visit == 0) {
            	echo "Welcome to this website! It is your first time that you are here.";
            }else{
            	echo "You have visited this page ".$count_visit." times <br />Last time you visited this page was on ".$last_visit;
            }
        ?>
    </body>
</html>
