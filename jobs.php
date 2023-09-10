<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates Applied</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    /* The side navigation menu */
    .navbar{
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top:0;
        width:100%;
        
    }
.sidebar {
  margin: 0;
  margin-top: 55px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: hidden;
  
}

/* Sidebar links */
.sidebar a {
  margin:0px;
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
.content {
  margin-left: 200px;
  padding: 70px 10px;
  
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


</style>


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADMIN DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="sidebar">
    <!-- The sidebar -->

  <a class="active" href="first.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="career.php">Career</a>
  <a href="#about">About</a>
</div>

<div class="content">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Applied for</th>
      <th scope="col">Qualification</th>
      <th scope="col">Passout Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="jobs";
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password,$database);

    $sql = "SELECT `Name`, `Applied for`, `Qualification`, `Passout year` FROM candidates";

    $result=mysqli_query($conn,$sql);

    if($result->num_rows>0){
      $i=0;
     while($rows=$result->fetch_assoc()){
       
       echo'
       <tr>
       <th scope="row">'.++$i.'</th>
       <td>'.$rows['Name'].'</td>
       <td>'.$rows['Applied for'].'</td>
       <td>'.$rows['Qualification'].'</td>
       <td>'.$rows['Passout year'].'</td>

       </tr>';
     }
    
    }
    else{
      echo"";
    }
    ?>
  </tbody>
</table>
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>