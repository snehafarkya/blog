<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DesignSystemsOSS/eccentrictouch@master/source/eccentrictouch.css" />
    <title>Blog</title>
</head>
<body>
    <!-- navbar -->
    <?php

echo '<h1><center>Hello | Namaste | Kon`nichiwa | Bonjour👋 <br>Welcome to Sneha write`s</center></h1>';
echo '<div class="container">';
echo '<img src="../myimg1.png" alt="myimg" height="400">';
echo '<H1>Who Am I?</H1>';
echo '<p>Well, let me introduce myself! I am Sneha, a sophomore pursuing Bachleors of Computer Application from Medi-Caps University, Indore. I hail from Mandsaur which is famous for Lord Pashupatinath Temple, whose only parallel is in Nepal.I did my Higher secondary education from Mandsaur International School. I was cultural secretary of the same. Currently ,I am engaged in Frontend development . Languages known to me are C , C++ , MySQL, HTML5 , CSS and JavaScript. Apart from this, my interest areas are Singing and Content writing. This Blog is all about my experience as a content writer till now! <br> </p>';
echo '<h2>Meanwhile look at my work preciesely!</h2><br>';
echo "<button class='outline-btn'><a href='https://docs.google.com/document/d/1AGPaZVZPXW6cIEQ4z293yxKm6v9VGIqxGsiXejKjo8A/edit?usp=sharing' >Work till now!!</a></button><br><br>";

echo '';

?>
<center>

<?php
echo "<p>I knocked off my journey as a content writer seven months ago, when I gave an interview for the position as an Executive Member of the content and ideation team in one of the most technical sounded clubs of my University. It is actually from earlier years of my life that I like to express something in written format. Be it story writing, content creation, or narration of dramas/plays. I did all of these back in my school days. Well, I've never stopped writing since then!  </p><br>";
echo "<p>Throughout the initial year of my college, I got guidance from some very talented and inspiring friends/Seniors. I am grateful to <b>Jaspreet, Yash, and Sumit</b>, as well as the entire HEKORS community for their help. By writing the ReadMe file for Eccentric Touch, Yash provided me with an opportunity to contribute to the project. </p><br>";
echo "<p>In November 2021, one of my seniors, Sumit Singh established a startup called <b>The Bug Community</b>, a digital marketing agency.  Mr. Singh offered me a role as a content writer for TBC, and I jumped at the chance.  I was agog to do this job. I started writing some good stuff, according to client's demand. And by far, I'm enjoying it!</p><br>";
?>
<div class="formm">
<h2>Ahhh....Wanna say something? Just let me know 👇</h2><br>
 <form action="blog.php" method="post">
     <input type="text"  name="uname" placeholder="Enter Your Name" required><br><br>
     <input type="email" name="uemail" placeholder="Enter your email" required><br><br>
     <textarea id="w3review" name="msg" rows="4" cols="23"></textarea><br><br>
     <input type="submit" name="submit" class="p-6 	color-purple-900 shadow-light"  value="Submit">
 </form>
 </div>
</center>
<?php 
echo '</div>';
?>
 <?php
  error_reporting(E_ALL ^ E_WARNING); 
$hostname = "localhost";
$userid = "root";
$pass = "sneha";
$dbname = "blog";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo " ";
}

 $uname = $_POST['uname'];
 $uemail = $_POST['uemail'];
 $msg = $_POST['msg'];

 $sql = "insert into form values('$uname','$uemail','$msg');";
 $result = mysqli_query($conn,$sql);

echo "<br><br><br><Br>";
 ?>
 <div class="foot">
<footer>
    <div class="foot1">
        <h3>Social Links</h3><br>
        <a href="https://www.instagram.com/sing_with_sneha/">Instagram</a><br>
        <a href="https://www.linkedin.com/in/sneha-farkya-288773217/">LinkedIn</a><br>
        <a href="https://github.com/snehafarkya">Github</a><br>
    </div>
    <div class="foot2">
    <a href="https://my-portfolio-beta-coral.vercel.app/">Portfolio</a><br>
    <a href='https://docs.google.com/document/d/1AGPaZVZPXW6cIEQ4z293yxKm6v9VGIqxGsiXejKjo8A/edit?usp=sharing' >Content Writting</a>
    </div>
    <div class="foot3">
    <h3>Projects</h3><br>
    <a href="https://descent-a-graverse.vercel.app/">Descent~A Graverse</a><br>
    <a href="https://feed-a-fruit.vercel.app/">Feed-A-Fruit</a><br>
    </div>
</footer>
</div>

</body>
</html>