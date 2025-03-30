<!DOCTYPE html>
<html>
<title>Form validation example</title>
<head>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    Name: <input type="text" name="name"><br>
   <span class="error">* <?php echo $nameerr;?></span>
    email: <input type="email" name="email"><br>
    <span class="error">* <?php echo $emailerr;?></span>
  <input type="submit">

    </form>
<?php
$name=$email="";
function check($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
$nameerr=$emailerr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(empty($_POST["name"])){
$nameerr="name is required";
}
else{
$name=check($_POST["name"]);
}

if (empty($_POST["email"])){
$emailerr="email required";

}
else{
$email=check($_POST["email"]);
}
}





echo $name;
echo $email;
?>

</body>
</html>