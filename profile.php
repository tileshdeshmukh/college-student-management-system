  

   	<?php 
                  	include('db.php');
                  	$c = "";
                  	$dates = array();
                  
                  	$s = mysqli_query($conn, "select * from notification where status = 'unread' and sid = '".$_GET['s']."' ");
                  	while ($r=mysqli_fetch_array($s)) {
                  		
                  		$dates[] = $r;
     	             	$c++;
                  }
        ?>


<?php
session_start();



  
                    include('db.php');
                    $c1 = "";
                    $dates1 = array();
                  
                    $ss = mysqli_query($conn, "select * from c_stud where status = 'unok' and sid = '".$_GET['s']."' ");
                    while ($rr=mysqli_fetch_array($ss)) {
                      
                      $dates1[] = $r;
                    $c1++;
                  }
                    


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="style.css">

    <title>Profile</title>
    <style>
    *{padding:0px; margin:0px;} 
    	.imgup:hover
    	{
    		  
  
  
  background-color: white;
  box-shadow: 5px 5px 3px #aaaaaa;
    	}
      .bs{
        border-radius: 50%;
        font-size: 10px;
      }
    </style>
  </head>
  <body>  

<!-- nevbar -->
<?php
  
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

    while($row=mysqli_fetch_assoc($sql)){
    $s = $row['sid'];
  
?>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary navbar-fixed-top">
            <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
              <pre style="font-size: 12px; color: white;">   
   Shri Vile Parle Kelavani Mandal
  <b style="font-size: 17px; color: black;" class="text-uppercase">Institute Of Technology,Dhule  </b></pre> 
               



            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="Profile.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $date['sid']; ?>">Home <span class="sr-only">(current)</span></a>
                  </li>

<!-- Notification -->
                  <li class="nav-item dropdown">

                    <a class="nav-link text-uppercase" style="color: white" href="#" id="navbardrop" data-toggle="dropdown">
                      Notification
                    
                     	 <span class="badge badge-danger"><?php echo $c;?></span>

                      
                  	</a>
  
                    <div class="dropdown-menu">
                     <?php 
                     	foreach ($dates as $date) {
                     	if ($date) {
                        
                        	
                     	
                     ?>
                      <a class="dropdown-item" href="msg_view.php?s=<?php echo $date['sid']; ?>&id=<?php echo $date['id']; ?>">
                      
                      	<small><i><?php echo 'Date :'.$date['date'];?> 	</i></small><br>
                      	<p><?php echo $date['sender'] ?></p>
                        
                      </a>
                  <?php } }?>
                      
                    </div>
                   
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="activity.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $s; ?>">Activity <span class="sr-only">(current)</span></a>
                  </li>

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white text-uppercase pr-5" style="color: black" href="#" id="navbardrop" data-toggle="dropdown">
                      Course Status
                    </a>
                    <div class="dropdown-menu text-uppercase">
                       <a class="dropdown-item" href="new_c.php?s=<?php echo $s;?>&eid=<?php echo $_GET['eid'];?>">New Couese &nbsp;&nbsp;<span class="badge badge-success bs text-dark"><?php echo $c1 ;?></span></a>
                      <a class="dropdown-item" href="addcourse.php?s=<?php echo $s;?>&eid=<?php echo $_GET['eid'];?>">Add Course</a>
                      <a class="dropdown-item" href="viewc.php?s=<?php echo $s; ?>&eid=<?php echo $_GET['eid'];?>">View Courses</a>
                     
                    </div>
                  </li>
                 
                </ul>
                <?php
            
            ?>

             <form class="form-inline my-2 my-lg-0" action="logout.php">

               <a href="logout.php"><button class="btn btn-danger my-2 my-sm-0" type="submit">Log-out</button></a>
            </form>
        </div>
      </nav>
      <?php
    }
    ?>

<!-- My Profile -->
<?php
    
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

    while($row=mysqli_fetch_assoc($sql)){
    $d = $row['id'];
?>
<div class="container my-4">
    <div class="row">
  <!-- Self Profile --> 
        <div class="col-lg-4 col-md-4 col-sm-2 col-2 text-center bg-light py-3">

              <div class="card mx-5">
                   <img class="card-img-top pb-3" src="img/<?php echo $row['img']; ?>" alt="Card image">
                  <div class="card-body">
                      <h4 class="card-title"><p><?php echo $row['name']; ?></p></h4>
                      <h5><p class="card-text" style="color: blue"> <?php echo $row['email']; ?></p></h5>
                    <a href="detail.php?eid=<?php echo $d; ?>" style="color: black"><button class="btn btn-primary "><b>View Details</b>  </button></a>
                  </div>
              </div> 
            
        </div>

          <div class="col-lg-7 col-md-7 col-sm-5 col-6 bg-light py-3">

            <center><img src="logo/svkm.png" style="width: 350px; height: 80px"></center>
            <hr style="color: blue">            
            <p class="mx-5">We are an academic college made up of students, scholars, old collegians and staff members. Our rich history is the foundation for our values. We are diverse, welcoming, accepting and passionate about being the best we can be. Join us to make your college experience unforgettable.</p>

			<br><br><br>	            

            <div class="mx-2">
            	<img src="logo/civ.png" data-toggle="tooltip" title="Civil-Eng(Logo)" class="pl-2 imgup" style="width: 120px; height: 100px">
            	<img src="logo/mach.png" data-toggle="tooltip" title="SESA (Logo)" class="pl-2 imgup" style="width: 120px; height: 100px">
            	<img src="logo/co.png" data-toggle="tooltip" title="Computer-Eng(Logo)" class="pl-2 imgup" style="width: 120px; height: 100px">
            	<img src="logo/et.jpg" data-toggle="tooltip" title="Electrical-(Logo)" class="pl-2 imgup" style="width: 120px; height: 100px">
            	<img src="logo/it.png" data-toggle="tooltip" title="IT-Eng (Logo)" class="pl-2 imgup" style="width: 120px; height: 100px"></div>
        <hr style="color: blue">
         <div class="text-center "><a href="{% http://www.svkm-iot.ac.in/ %}" class="untracked">http://www.svkm-iot.ac.in/</a></div>
          </div>

    </div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</div>
<?php
}
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
