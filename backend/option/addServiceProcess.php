

<?php

$updateid=$_POST['id'];
$page=$_POST['page'];
$intro=$_POST['intro'];
$title=$_POST['title'];
$content=$_POST['content'];
$fenlei=$_POST['fenlei'];

echo $_COOKIE['page']."<br>";


if($_FILES['file']['name']==""){
	 			date_default_timezone_set('PRC');
			    $date=date("Y-m-d");
		      
			      require_once'../database/dbHelper.php';
			      $db=new dbHelper();
			      $sql="insert into $page (comserviceName,comserviceintro,comServicetitle,comServiceContent,comserviceUpLoadTime )value('$fenlei','$intro','$title','$content','$date')";
			      
			    	
			      $res =$db->execute_insert_updata($sql);
			      

			     setcookie("b",2);
			     
			   
		    	 setcookie("id",$updateid);
			   	
			   	if(!$res){
			   		echo "err";
			   	}
			  
			   	
			     
		  		 echo '<script type="text/javascript">top.location.href="../serviceContent.php";alert("添加成功")</script>';
		  		 
}else{




	if (	(	($_FILES["file"]["type"] == "image/gif")
	|| 			($_FILES["file"]["type"] == "image/jpg")
	|| 			($_FILES["file"]["type"] == "image/jpeg")
	|| 			($_FILES['file']['type'] == "iamge/png" )
			)
&& ($_FILES["file"]["size"] < 2000000))
  {
		  if ($_FILES["file"]["error"] > 0)
		    {
		    	setcookie("table",$table);
		    	setcookie("id",$updateid);
		    	setcookie("mes","error");
		    	setcookie("b",1);
		    	setcookie("page",$table);
		    echo '<script type="text/javascript">location.href="update.php";</script>';
		    }
		  else
		    {
		    	
			    	/*setcookie("b",1);
				    	header("window.top.Location:anliShow.php");*/
				    /*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
				    echo "Type: " . $_FILES["file"]["type"] . "<br />";
				    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
				    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";*/

			    if (file_exists("../image/" . $_FILES["file"]["name"]))
			      {
			      	setcookie("b",3);
			      	setcookie("table",$table);
		    		setcookie("id",$updateid);
			      	 setcookie("mes","文件已经存在");
			      	
			      	echo '<script type="text/javascript">location.href="update.php";</script>';
			      	/*setcookie("b",2);
			      	header("window.top.Location:anliShow.php?b=2");*/
				      }
			    else
			      {
			      	date_default_timezone_set('PRC');
			      	$ddd=date("YmdHis");
			      	$imagename=$ddd.".jpg";
			      move_uploaded_file($_FILES["file"]["tmp_name"],
			      "../image/" .$imagename);
			      //echo "Stored in: " . "image/" . $_FILES["file"]["name"];

			     
			      $path="image/".$imagename;
			      
			      $date=date("Y-m-d");
			      
			      require_once'../database/dbHelper.php';
			      $db=new dbHelper();
			    $sql="insert into $page (comserviceName,comserviceIntro,comServiceContent,comserviceUpLoadTime,comserviceImgPath)value('$title','$intro','$content','$date','$path')";
			      
			    	
			      $res =$db->execute_insert_updata($sql);
			      
			      $unpath="../".$res[0][0];
			     // echo $unpath;
			    

			      //unlink($unpath);
			      
			    
			     setcookie("b",2);
			     setcookie("table",$table);
		    	 setcookie("id",$updateid);
			     setcookie("page",$table);
			    	if($res){
			    echo "<script type='text/javascript'>location.href='../iframe/serviceContent.php';alert(添加成功')</script>";
			}

			      }
		    }
  }
else
  {
  
 
  	setcookie("b",1);
  	setcookie("table",$table);
    setcookie("id",$updateid);
  	setcookie("page",$table);
  	
  	echo "<script type='text/javascript'>alert('文件大小或者类型错误，请重新选择');</script>$table";
		  		 echo '<script type="text/javascript">top.location.href="./iframe/update.php";</script>';
  /*	setcookie("b",1);
  header("window.top.Location:anliShow.php?b=1");*/
  }
}

?>