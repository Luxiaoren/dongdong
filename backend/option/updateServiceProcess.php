

<?php

$updateid=$_POST['id'];
$table=$_POST['table'];
$intro=$_POST['intro'];
$title=$_POST['title'];
$content=$_POST['content'];

if($_FILES['file']['name']==""){
	 			date_default_timezone_set('PRC');
			    $date=date("Y-m-d");
		      
			      require_once'../database/dbHelper.php';
			      $db=new dbHelper();
			      $sql="update $table set comServicetitle='$title',comServiceContent ='$content', comserviceUpLoadTime ='$date',comserviceIntro ='$intro' where id=$updateid";
			      
			    	echo $sql;

			      $res =$db->execute_insert_updata($sql);
			      

			     setcookie("b",2);
			     setcookie("table",$table);
			     setcookie("page",$table);
		    	 setcookie("id",$updateid);
			   	
			   
			     echo "<script type='text/javascript'>alert('修改成功');</script>$table";
		  		 echo '<script type="text/javascript">top.location.href="../serviceContent.php";</script>';
		  		 die();
}




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
			      	
			      	echo '<script type="text/javascript">location.href="../newShow.php";</script>';
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
			      $sql="select imgPath from $table where id = $updateid";
			      //echo $sql;

			      $res=$db->execute_select($sql);
			      
			      $unpath="../".$res[0][0];
			     // echo $unpath;
			      
			      unlink($unpath);
			      
			       $sql="update $table set comServicetitle='$title',comServiceContent ='$content', comserviceUpLoadTime ='$date',comserviceIntro ='$intro',
			       comserviceImgPath ='$path' where id=$updateid";
			      
			      

			      $res =$db->execute_insert_updata($sql);
			      if(!$res){
			      	echo "err";
			      	die();
			      }
			     setcookie("b",2);
			     setcookie("table",$table);
		    	 setcookie("id",$updateid);
			     
			    
		  		echo "<script type='text/javascript'>alert('修改成功');</script>$table";
		  		 echo '<script type="text/javascript">top.location.href="../newShow.php";</script>';

			      }
		    }
  }
else
  {
  
 
  	setcookie("b",1);
  	setcookie("table",$table);
    setcookie("id",$updateid);
  	
  	
  	echo "<script type='text/javascript'>alert('文件大小或者类型错误，请重新选择');</script>$table";
		  		 echo '<script type="text/javascript">top.location.href="../newShow.php";</script>';
  /*	setcookie("b",1);
  header("window.top.Location:anliShow.php?b=1");*/
  }


?>