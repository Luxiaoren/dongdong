<?php

foreach($_COOKIE as $key=>$val){
setCOOKIE($key,"",time()-1);
}

header("location:index.php");
?>
