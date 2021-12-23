<?php
if(isset($_POST["login"])){  
  
    if(!empty($_POST['Emailid']) && !empty($_POST['Password'])) 
    {  
        $Emailid=$_POST['Emailid'];  
        $Password=$_POST['Password'];  
      
        $conn = mysqli_connect('localhost','root','','signup');  
        if(!$conn)
{

    die("Connection failed: " . mysqli_connect_error());
}

      
        $query=mysqli_query($conn, "SELECT * FROM entry_details WHERE Emailid='".$Emailid."' AND Password='".$Password."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['Emailid'];  
        $dbpassword=$row['Password'];  
        }  
      
        if($Emailid == $dbusername && $Password == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_Emailid']=$Emailid;  
      
        /* Redirect browser */  
        header("Location: Home.html");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    } 

?>