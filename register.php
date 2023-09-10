<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body{
        background-image: url('workspace.jpg');
        background-size:100% 110%;
        background-repeat:no-repeat;
      }
      .full{
     display:flex;
     
 }
 .extra{
     margin-left:150px;
     font-weight:bold;
     font-family:sanserif;
 }
 .heading{
     font-weight:bold;
     font-family:sanserif;
     color:solid black;
     
 }
  form{
    margin-top:35px;
    margin-left:20em;
    width:40%;
    box-shadow: 8px 8px 8px 8px  black;
    padding:15px;
    border-radius: 5px;
    font-family:sanserif;
    font-weight:bold;
    background-color:white;
    margin-bottom:20px;
    
  }
  h1{
    font-size:50px;
    font-family:sanserif;
    color: #F4D03F ;
    font-weight:bolder;
  }

  .form-control{
    border-radius:10px;
    background-color:white;
    
  }
  
  .form-control:focus{
    outline:none;
    border-left: 5px solid blue;
    border-right:5px solid blue;
    border-top:none;
    border-bottom:none;
    box-shadow: 5px 5px 5px grey;
  }
  #btn{
    border-radius:10px;
  }
  #btn:hover{
    background-color:black;
    color:orange;
    border-bottom: 5px solid orange;
   transition: 0.5s;
  }
    </style>
</head>
<body>
    <div class="container">
      <h1 align="center">REGISTRATION</h1>
    <form method="POST" action="config.php">
    <div class="mb-3">
    <label for="exampleInputname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="name" name="NAME">
  </div>

  <div class="mb-3">
    <label for="exampleInputnumber" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="number" name="MOBILE">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="EMAIL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control" name="PASSWORD" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="full">
  <div class="btn">
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Register</input>
</div>
<div class="extra">
  <h6 class="heading">Already Registered?</h6>
  <a href="index.php" id="reg">Login</a>
</div>
</div>
  
</form>
</div>



</body>
</html>
