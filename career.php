<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
<style>
    .navbar{
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top:0;
        width:100%;
        left: 0;
        height: 60px;
        z-index: 10;
    }
.back{
  height:300px;
  background-image: url('bcg.jpg');
  background-repeat: no-repeat;
  background-size: 100% 100%;
  margin-top: 60px;
}
.back h1{
  font-size: 50px;
  font-weight: bolder;
  font-family: sans-serif;
  color:black;
  text-align: center;
  padding-top: 100px;
  
}
.jumbo{
  width: 100%;
  display:flex ;
  flex-wrap: wrap;
}
.btn-primary{
width:100px;
border-radius: 5px;
margin: 20px;
}
.btn-primary:hover{
    background-color:black;
    color:orange;
    border-bottom: 5px solid orange;
   transition: 0.5s;
  }
.row{
  width: 30%;
  margin: 20px;
  height: 250px;
  box-shadow: 5px 5px 10px;
  border-radius:10px;
}


</style>
</head>

<body>
  <div class="navbar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="first.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jobs.php">Candidates Applied</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="back">
<h1>CAREER</h1>
</div>
 <div class="jumbo">
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database ="jobs";
// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
$sql="SELECT `Company`, `Position`, `Job desc.`, `CTC` FROM `jobs`";
$result=mysqli_query($conn,$sql);
if($result->num_rows >0){
  while($rows = $result->fetch_assoc()){
    echo'
    
    <div class="row">
    <h3 style="text-align:center;">'.$rows['Position'].'</h3>
    <h4 style="text-align:center;">'.$rows['Company'].'</h4>
  
    <p style="color:black;"><b>Skills Required:</b>'.$rows['Job desc.'].'</p>
    <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Apply</button>

    </div>';
  }
}

?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="config.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="Name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <select  name="applying" class="form-control">
  <optgroup label="Positions">
    <option value ="null"> </option>
    <option value="SDE">SDE</option>
    <option value="project">Project Manager</option>
    <option value="webd">Web developer</option>
    <option value="php">PHP developer</option>
    

  
</select>

          </div>

      <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual"></input>
          </div>
      
    
      <div class="mb-3">
            <label for="message-text" class="col-form-label">Year Of Passout</label>
            <input type="number" class="form-control"  name="year"></input>
          </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="apply" class="btn btn-primary">Apply</button>
      </div>
</form>
    </div>
  </div>
</div>
 </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>