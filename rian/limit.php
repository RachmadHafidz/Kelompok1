<?php
require_once(“global.class.php”);
require(“header.php”);
include_once(“head_body”);
if(isset($_GET[‘page’]))
{
$page=$_GET[‘page’];
if($page==1)
include(“home.php”);
elseif($page==2)
include(“profil.php”);
else
include(“under_construction.php”);
}

include_once(“footer.php”);
?>