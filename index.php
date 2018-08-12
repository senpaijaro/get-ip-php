<?php 

//get city
			 $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
 			 $current_city= $getloc->city;
			 $current_country=$getloc->country;
			 $current_ip = $getloc->ip;

			 echo $current_ip;
			 echo '<pre>';
			 print_r($getloc);
