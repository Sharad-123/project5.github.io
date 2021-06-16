
<?php
$insert =false;
if(isset($_POST['name'])){
    //set connection variables
 $server = "localhost";
 $username = "root";
 $password = "";
//create a database connection
 $con = mysqli_connect($server, $username ,$password);
//check for connection success
 if(!$con){
     die("Error" . mysqli_connect_error());

 }
//  echo "Success";

//collect post variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $sql = "INSERT INTO `form`.`form` (`name`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$email', '$phone', '$message', current_timestamp());";
//   echo $sql;


//execute the query
   if($con->query($sql) == true){
    //    echo "Successfully inserted";

    //flag for successfull insertion
       $insert = true;
   }
   else{
       echo "Error: $sql <br> $con->error";
       $not_insert=true;

   }
   //close the database connection 
   $con->close();
}
?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myFeedbackPage | myFeedbackPage.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navigation bar -->
    <nav id="navbar">
        <div id="logo">
            <img src="roboticslogo.png" alt="myFeedbackPage.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#feedback-container">Feedback</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
<!-- home page -->
    <section id="home">
        <h1 class="h-primary">Welcome to the Feedback page</h1>
        <p>This is the feedback page about Robotics Club Web Development Classes. </p>
        <p>Be the first to visit.</p>
        
    </section>
    <!-- on successful submit -->
    <?php
    if($insert == true){
    echo "<h2 id='h2'>Thanks for your response</h2>";
    }
    ?>

         <!-- about page  -->

         </section>
    <section id="about-container">
        <h1 class="h-primary center">About Me</h1>
        <div id="about">
            <div class="box">
                <h2 class="h-secondary center">Introduction</h2>
                <p class="center">Hello everypne, my name is Sharad Kumar Singh. I am currently pursuing Btech from Madan Mohan Malviya University of Technology,Gorakhpur,Uttar Pradesh. i did my schooling from Central Academy Jhunsi,Allahabad,Uttar Pradesh.</p>
            </div>
            <div class="box">
                <h2 class="h-secondary center">My Skills</h2>
                <p class="center">I am a full stack web developer.Languages known are following:<ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>NODEJS</li>
                    <li>PHP</li>
                    <li>C++</li>
                </ul> </p>
            </div>
            <div class="box">
                <h2 class="h-secondary center">Qualifications</h2>
                <p class="center">Currently I am pursuing Btech in MEchanical specialisation from MMMUT,Gorakhpur.Igot 93.6% in class 12th CBSE2020 and 90% in class 10th CBSE2018.</p>
            </div>
        </div>
    </section>


    <!-- feedback page  -->
    <section id="feedback-container">
        <h1 class="h-primary center">Our FeedBacks</h1>
        <div id="services">
            <div class="box">
                <h2 class="h-secondary center">FeedBack 1</h2>
                <p class="center">This feedback is about HTML classes , I started my journey in web dev two months earlier but then also many tags I was not knowing which I learny in this web dev course . Thank you sir for this course.</p>
            </div>
            <div class="box">
                <h2 class="h-secondary center">FeedBack 2</h2>
                <p class="center">I learnt a lot about CSS in this course and it was helpful for me. It was really a good boost for me for my web drv interest. CSS styling is very important for the good look of the websites. My favourite one was the crestion of small animations on the fronted. </p>
            </div>
            <div class="box">
                <h2 class="h-secondary center">FeedBack 3</h2>
                <p class="center">I was not knowing JavaScript , thank you sir for your course it was really helpful for me.</p>
            </div>
        </div>
    </section>
    
    <!-- contact page  -->

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="index1.php">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button class="btn" name="submit">Submit</button>
                
                </div>
               
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myFeedbackPage.com. All rights reserved!
        </div>
    </footer>
</body>
</html>