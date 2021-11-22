<?php
//about-edit.php
include("includes/header.php");
include("includes/session.php");
?>

<form action = "about.php" method = POST>
    <textarea id = "about" name = "about" rows = "30" cols = "80" wrap = "hard">
    Additional information
    Note: This program was formerly named Interactive Multimedia.
    Creative innovation and problem solving typify all interactive multimedia courses at Sheridan.
    Students acquire valuable experience by working in small, collaborative groups using agile development to manage a complete project through all phases — needs analysis, problem solving, rapid prototyping, user experience design and development.
    Classes are small and intimate, ensuring plenty of direct student-instructor interaction. There's no better place to prepare for an interactive media career. Come see why Sheridan is widely recognized as the best.
    Successful graduates may find employment with multimedia and web development companies; advertising agencies and new media companies; corporate environments (including creative, technical, marketing and training divisions); the increasingly important freelance market; education and government agencies; installation projects and the entertainment industry.
    Sample employers include:
    Rangle.IO
    Shaw Communications
    IBM Interactive
    Leo Burnett
    Taxi
    Blast Radius
    Epiculture
    Critical Mass
    McCann Canada
    Jam3
    TVOntario
    Stitch Media and Jam3 are industry regarded and award-winning media companies whose founders and principals are graduates of Sheridan's Interactive Media Management (formerly Interactive Multimedia) program.
    Interactive Media Management program courses are held at the Trafalgar Road Campus in Oakville, Ontario.
    </textarea>
    <input type = "submit">
</form>

<?php
// include("includes/footer.php");
?>
