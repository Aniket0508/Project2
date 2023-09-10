<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database ="jobs";
// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a db
$db = "CREATE DATABASE jobs";
$msg = mysqli_query($conn, $db);

// Check for the database creation success
if($msg){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
if(isset($_POST['submit'])){
    $name=$_POST['NAME'];
    $email=$_POST['EMAIL'];
    $number=$_POST['MOBILE'];
    $password=$_POST['PASSWORD'];


    $sql = "INSERT INTO `users`(`MOBILE`, `NAME`, `EMAIL`, `PASSWORD`) VALUES ('$number','$name','$email','$password')";

    if(mysqli_query($conn,$sql)){
        echo "<br>RECORDS INSERTED SUCCESSFULLY NOW YOU CAN LOGIN.<br>";
    }
    else{
        echo "<br>FAILED TO INSERT RECORDS $sql." .mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $mail=$_POST['email'];
    $pass=$_POST['password'];

    $query= "SELECT * FROM `users` WHERE EMAIL = '$mail' AND PASSWORD='$pass' ";
     $result= mysqli_query($conn,$query);

     $row=mysqli_num_rows($result);

     if($row==1){
         header("location:first.php");
        }
     
else{
    $error="<br>Email ID or Password is incorrect<br>";
    echo $error;
}
}

if(isset($_POST['job']))
{

$cname=$_POST['company'];
$pos=$_POST['position'];
$desc=$_POST['jdesc'];
$pkg=$_POST['CTC'];

$check = "INSERT INTO `jobs`(`Company`, `Position`, `Job desc.`, `CTC`) VALUES ('$cname','$pos','$desc','$pkg')";

if(mysqli_query($conn,$check)){
    echo "<br>NEW JOBS POSTED ,GO TO HOMEPAGE FOR LIST OF JOBS AVAIABLE OR CAREER PAGE IF YOU WANT TO APPLY. <br>";
}
else{
    echo "<br>FAILED TO POST THE JOB $sql." .mysqli_error($conn);
}

}

if(isset($_POST['apply'])){
    $candidate=$_POST['Name'];
    $applyingfor=$_POST['applying'];
    $qualification=$_POST['qual'];
    $passout=$_POST['year'];

   $sqb="INSERT INTO `candidates`(`Name`, `Applied for`, `Qualification`, `Passout year`) VALUES ('$candidate','$applyingfor','$qualification','$passout')";

    if(mysqli_query($conn,$sqb)){
        echo "<br>YOU HAVE SUCCESSFULLY APPLIED FOR JOB AND YOUR NAME HAS BEEN POSTED ON CANDIDATES APPLIED PAGE.<br>";
    }
    else{
        echo "FAILED TO APPLY FOR JOB";
    }
}

mysqli_close($conn);

?>
