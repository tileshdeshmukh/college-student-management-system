<?php
session_start();

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
  </head>
  <body>  

<!-- nevbar -->
<?php
  
    include('db.php');

    
    $sql = mysqli_query($conn, "select * from registration where id = '".$_GET['eid']."' ");

    while($row=mysqli_fetch_assoc($sql)){
    $s = $row['sid'];
  
?>

        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary fixed-true">
            <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
             <!-- <pre style="font-size: 10px; color: white;">   
   SHRI VILE PARLE KELAVANI MANDAL
  <b style="font-size: 17px; color: black;">Institute Of Technology,Dhule  </b></pre>  -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="Profile.php?eid=<?php echo $_GET['eid'];?>">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="activity.php?eid=<?php echo $_GET['eid'];?>&s=<?php echo $s; ?>">Activity <span class="sr-only">(current)</span></a>
                  </li>

                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " style="color: black" href="#" id="navbardrop" data-toggle="dropdown">
                      Course Status
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="addcourse.php?s=<?php echo $s; ?>">Add New Course</a>
                      <a class="dropdown-item" href="viewc.php?s=<?php echo $s; ?>">View Courses</a>
                      <a class="dropdown-item" href="#"></a>
                    </div>
                  </li>
                 
                </ul>
             <form class="form-inline my-2 my-lg-0">

               <a href="logout.php"><button class="btn btn-dark my-2 my-sm-0" type="submit">Log-out</button></a>
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

              <div class="card mx-4" style="width:300px">
                   <img class="card-img-top" src="temp.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                      <h4 class="card-title"><p><?php echo $row['name']; ?></p></h4>
                      <h5><p class="card-text" style="color: blue"> <?php echo $row['email']; ?></p></h5>
                    <a href="detail.php?eid=<?php echo $d; ?>" style="color: black"><button class="btn btn-primary "><b>View Details</b>  </button></a>
                  </div>
              </div>
  </div>

               <div class="col-lg-7 col-md-7 col-sm-5 col-6 bg-light py-3">
                <div class="modal-header btn-primary">
                          <h4 class="modal-title text-white" style="color:black">My activites Details</h4>
                          
                    </div>

                     <?php
                        
                      include('db.php');

                      
                      $sql = mysqli_query($conn, "select * from activity where title = '".$_GET['t']."' && sid = '".$_GET['s']."'");

                      while($row=mysqli_fetch_assoc($sql)){
                      
                  ?>

                    
            <br>
                    <div class="mx-5">
                        <b>Title :</b> <?php echo $row['title'];?> <br>
                        <b>Location :</b> <?php echo $row['location'];?> <br>
                        <b>Year :</b> <?php echo $row['year'];?> <br>
                        <b>Work Type :</b> <?php echo $row['work_type'];?> <br>
                        <b>Team Members :</b> <?php echo $row['team'];?> <br>
                        <b>Details :</b> <?php echo $row['detail'];?> <br>
                       

                        </div>
                                                    
                  


                    <?php
                  }
                  ?>

               </div>


          
            
            
        </div>
    </div>

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