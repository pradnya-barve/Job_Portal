<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    /*var_dump($sql);
    die();*/
    if(mysqli_query($conn,$sql)){
        echo "Records inserted successfully.";
    }else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}
echo"";

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    mysqli_query($conn,$sql);
}
echo"";

if(isset($_POST['first'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    /*var_dump($sql);
    die();*/
    mysqli_query($conn,$sql);
}
echo"";
//mysqli_close($conn);
?>