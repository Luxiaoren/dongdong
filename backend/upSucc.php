<?php

$page=$_POST['page'];




	if (	(	($_FILES["file"]["type"] == "image/gif")
	|| 			($_FILES["file"]["type"] == "image/jpg")
	|| 			($_FILES["file"]["type"] == "image/jpeg")
	|| 			($_FILES['file']['type'] == "iamge/png" )
			)
&& ($_FILES["file"]["size"] < 200000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    	setcookie("page",$page);
    	setcookie("b",1);
    	session_start();
	      	$_SESSION['page']=$page;
    echo '<script type="text/javascript">top.location.href="anliShow.php";</script>';
    }
  else
    {
    	
	    	/*setcookie("b",1);
		    	header("window.top.Location:anliShow.php");*/
		    /*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		    echo "Type: " . $_FILES["file"]["type"] . "<br />";
		    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

	    if (file_exists("image/" . $_FILES["file"]["name"]))
	      {
	      	setcookie("b",3);
	      	setcookie("page",$page);
	      	session_start();
	      	$_SESSION['page']=$page;
	      	echo '<script type="text/javascript">top.location.href="anliShow.php";alert("文件已存在，请重新选择！");</script>';
	      	/*setcookie("b",2);
	      	header("window.top.Location:anliShow.php?b=2");*/
		      }
	    else
	      {  

	      	date_default_timezone_set('PRC');
	      	$ddd=date("YmdHis");
	      	$imagename=$ddd.".jpg";
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "image/" . $imagename);
	      //echo "Stored in: " . "image/" . $_FILES["file"]["name"];
	      	
	      $intro=$_POST['intro'];
	      $path="image/".$imagename;
	    
	      $date=date("Y-m-d");
	      
	      	require_once'./database/dbHelper.php';
	      $db=new dbHelper();
	      $sql="insert into $page(intro,imgPath,uploadTime)value('$intro','$path','$date')";

	      echo $sql;

	      $res =$db->execute_insert_updata($sql); 
	      $sql="insert into allShow(intro,imgPath,uploadTime)value('$intro','$path','$date')";
	       $res =$db->execute_insert_updata($sql); 
	     setcookie("b",2);
	     setcookie("page",$page);
	     session_start();
	      	$_SESSION['page']=$page;
	      	echo '<script type="text/javascript">alert("添加成功");</script>';
  		 echo '<script type="text/javascript">top.location.href="anliShow.php";</script>';

	      }
    }
  }
else
  {
  
 
  	setcookie("b",1);
  	setcookie("page",$page);
  	session_start();
	      	$_SESSION['page']=$page;
  	echo '<script type="text/javascript">top.location.href="anliShow.php";alert("上传文件错误！请选择正确的文件名和大小");</script>';
  /*	setcookie("b",1);
  header("window.top.Location:anliShow.php?b=1");*/
  }


?>