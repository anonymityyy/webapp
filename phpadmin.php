<?php
$servername="localhost";
$username="root";
$password="";
$database_name="signup";

$conn = new mysqli($servername, $username, $password,$database_name);
// Check connection

 if(!$conn)
{

    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $Name = $_POST['Name'];
    $Emailid = $_POST['Emailid'];
    $Password = $_POST['Password'];

    $sql_query = "INSERT INTO entry_details (Name, Emailid, Password) VALUES ('$Name','$Emailid','$Password')";

    if(mysqli_query($conn, $sql_query))
    {
        
        header("Location: Login.html");

    }
    else{
        echo "Error:" , $sql , "", mysqli_error($conn);

    }
    mysqli_close($conn);


}

?>