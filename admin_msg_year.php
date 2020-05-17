<?php
					              include('db.php');
							      if (isset($_POST['sub'])) 
							      {
									       	$sender = $_POST['sender_name'];
									        	$msg = $_POST['msg'];

									    		$year = $_GET['y'];
									   	
									        	$date = date("d/m/y");
									        	$time = date("h:i:sa");

									        	$sql = mysqli_query($conn, "select * from registration where year = '".$year."'");
									        	$coun = "";
                                        while($row=mysqli_fetch_array($sql)){
                                       
		                                $s = mysqli_query($conn, "insert into notification(sender, sid, stud_name, msg, status, date, time) values('$sender', '".$row['sid']."', '', '$msg', 'unread', '$date', '$time')");
									        	$coun++;
		                            }
									        	if($coun > 0)
									        	{
									        	    echo '<script>alert("massage Successfully Send");</script>';

									        	    
												  }
												  else{
												    echo '<script>alert("error Occured");</script>';
												  }	

									        		
									        } 


									        ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark p-5">
  	<center style="border:3px solid black;" class="p-5" >
    <h1 class="text-white">massage Successfully Send</h1>
    <from action="admin_msg_year.php" method="POST" class="" style="padding-left:4s0px" >

    		<a href="admin_msg.php">	<button type="submit" name="bb" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;&nbsp;&nbsp;</button>
</a>
</from>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


