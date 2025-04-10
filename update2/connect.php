<?php

    error_reporting(0);

	$pgn=trim($_SERVER["REQUEST_URI"]);

   ####
   ##  ?????????? ????????
   ####

    $adr=explode("/",$pgn);


    if(stristr($adr[(count($adr)-1)], "?")){

    	$bp = explode("?", $adr[(count($adr)-1)]);

    	$adr[(count($adr)-1)] = $bp[0];

    }
    
    define(ADR, $adr);
    

                
?>