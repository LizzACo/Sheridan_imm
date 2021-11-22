<?php
//about-public.php
include("includes/header.php");
?>
<link rel = "stylesheet" href = "./includes/style.css"/>
<nav>
    <ul>
        <a href = "main.php">Home</a>
        <a href = "about-public.php">About</a>
        <a href = "contact-form.php">Contact</a>
        <a href = "404-No-Found.php">Profile</a>
        <a href = "logout.php">Logout</a>
    </ul>
</nav>

<h1>About Imm News Network </h1>

<p>Prepare for your career

<p>In the Interactive Media Management program, you'll learn to create, manage and develop web and mobile content, leveraging a curriculum in usability, interactivity, front-end coding, social media, user experience (UX) and emerging mobile technologies in an interdisciplinary, inter-professional collaborative learning environment.

<p>The most up-to-date new media skills

<p>Develop superior new media skills in this intensive one-year graduate program, learning to combine graphics, text, animation, audio and video to produce:

<p>Web and mobile applications
<p>Physical computing and augmented reality
<p>Immersive experiences and installations
<p>Visual communication and visualization work
<p>Games and puzzles
<p>Build environments from the ground up

<p>In this program, you'll learn to build interactive multimedia environments from the ground up using industry best practices for interface design and interactive programming. You'll use HTML5, CSS3, Javascript, APIs and responsive design to design and build digital media, mobile web, web animation and natural user interfaces (NUI) using multi touch, gesture capture and wearable technologies.

<?php
echo($_POST["about"]);
?>

<?php
include("includes/footer.php");
?>
