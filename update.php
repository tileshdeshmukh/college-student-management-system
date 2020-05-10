<?php  
	include('db.php');



if(isset($_POST['update']))
{

	 

  	   	$name = $_POST['name'];
		  $nu = $_POST['nu'];
		  $add = $_POST['ad'];
		  $bdate = $_POST['bd'];
		  $dept = $_POST['dept'];
		  $year = $_POST['yr'];
		  $saap = $_POST['sid'];
		  $email = $_POST['email'];
		 
 	 

 	 $result= "UPDATE registration SET name='".$name."', number='".$nu."', address='".$add."', bdate='".$bdate."', year='".$year."',saap='".$saap."',email='".$email."' WHERE id='".$_GET['ed']."'";

 	 /*$msql = mysqli_query($conn, $result);*/

 	 if($msql = mysqli_query($conn, $result)
)
 	 {
    	echo '<script>alert("Data Successfully UPDATE");</script>';
    	/*header("location:detail.php");*/
 	 }
  	 else
  	 {
   		 echo '<script>alert("error Occured");</script>';

 	 }
}
else
{

 	header("location:detail.php");
}


?>











