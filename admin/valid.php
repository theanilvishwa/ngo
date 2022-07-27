<?php 
session_start();

include("config.php");

if(!isadmin())
{
   alert("Not Allowed Admin");
   location("index.php");
}


function isadmin()
{
	
   if(isset($_SESSION["username"]))
   {
       return true;    
   }else
   { 
      return false;    
   }
}


?>