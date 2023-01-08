<?php
    $insert=false;
    if(isset($_POST['name'])){
    
    // Set connection Variables
    $server="localhost";
    $username="root";
    $password="";

    // set database_connection
    $con=mysqli_connect($server,$username,$password);

    // check for  sucessfull connection
    if(!$con){
        die("Connection to the database failed".mysqli_connect_error());
    }
    // echo "db connected Sucessfully..";
    
    // collecting post variables
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $desc=$_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // execute the query
    if($con->query($sql)==true){
        // echo "Successful insertion";
        // flag for sucessful insertion
        $insert=true;
    }
    else{
     echo "ERROR : $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form..</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet"> -->
</head>
<body>
    <img src="images/Tulunad.jpg" alt="Mite">
    <div class="container">
        <h1>Welcome To Tulunadu..</h1>
        <p >Enter the Details and Submit this form to comfirm 
            your participation in the Trip
        </p>
        <?php
        if($insert==true){
            
        }
        
        ?>
        <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name ">
                <input type="number" name="age" id="age" placeholder="Enter your age ">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender ">
                <input type="email" name="email" id="email"  placeholder="Enter your email ">
                <input type="phone" name="phone" id="phone"  placeholder="Enter your phone ">
                <textarea name="desc" id="desc" cols="30" rows="10"  placeholder="Enter any other information here" ></textarea>
                <button class="btn">Submit
               
                </button>
                <button class="btn" style="text-decoration:none;"><a href="index.php">reset
                <a>
                </button>
                <!--  -->
        </form>
    </div>
    <footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<!-- <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li> -->
								<!-- <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li> -->
								<li><a href="https://www.instagram.com/" ><i class="fa fa-instagram">Instagram</i></a></li> 
								<li><a href="https://www.linkedin.com/in/shobith-r-acharya-89a146222/" >  <i class="fa fa-linkedin-square">LinkedIn</i></a></li>
								<li><a href="https://mail.google.com/" > <i class="fa fa-envelope-square" aria-hidden="true"> Email    </i></a></li>
							</ul>
                        </div>
                        <div class="container1">
						    <p><i class="fa fa-tree" aria-hidden="true">Tulunadculture.</i> 2023. <a href="https://www.bing.com/ck/a?!&&p=8f8c17cd33c472f8JmltdHM9MTY3MzEzNjAwMCZpZ3VpZD0wYzE2NjExNy0yZDUyLTYxMTEtMjMyNS03MGE4MmNmZjYwN2QmaW5zaWQ9NTIyMA&ptn=3&hsh=3&fclid=0c166117-2d52-6111-2325-70a82cff607d&psq=manglore+&u=a1aHR0cHM6Ly9lbi53aWtpcGVkaWEub3JnL3dpa2kvTWFuZ2Fsb3Jl&ntb=1">Manglore</a> - 
                            <a href="https://www.bing.com/ck/a?!&&p=bbd496876d187fa6JmltdHM9MTY3MzEzNjAwMCZpZ3VpZD0wYzE2NjExNy0yZDUyLTYxMTEtMjMyNS03MGE4MmNmZjYwN2QmaW5zaWQ9NTIyNw&ptn=3&hsh=3&fclid=0c166117-2d52-6111-2325-70a82cff607d&psq=udupi&u=a1aHR0cHM6Ly9lbi53aWtpcGVkaWEub3JnL3dpa2kvVWR1cGk&ntb=1">Udupi</a> 
                            <!-- <br/>creater from udupi -->
                            </p>
                            <p></p>
                        </div>
						
	</footer>
    
</body>
<script src="index.js"></script>
   
</html>
