<?php
$conn=mysqli_connect("localhost","root","","userlogin");
if($conn){
    echo"connected";
}
else{
    echo "not connected";
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$hashed_password = password_hash('$password', PASSWORD_BCRYPT);
$sql="INSERT INTO users VALUE('','$name','$email','$hashed_password')";
$check=mysqli_query($conn,$sql);
if($check){
    echo"inserted";

}
else{
    echo"not inserted";
}

?>