<?php
//main.php
//this is the home page for both public and login users
include("includes/header.php");
?>

<?php
session_start(); 
if (isset($_SESSION["userId"])){
?>

<link rel = "stylesheet" href = "./includes/style-header.css"/>
<link rel = "stylesheet" href = "./includes/style-main.css"/>
    <nav>
        <ul>
            <a href = "main.php">Home</a>
            <a href = "about.php">About</a>
            <a href = "contact-form.php">Contact</a>
            <a href = "404-No-Found.php">Profile</a>
            <a href = "logout.php">Logout</a>
        </ul>
    </nav>

    <h1>Welcome to Imm News Network</h1>

    <p>This is the place we you can collect valuble resources about the industries, the most up-to-date technologies and career informations.<br><br> 

    <iframe width="560" height="315" src="https://www.youtube.com/embed/PcY9_mCT2D8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
    <h2>Today's Featured Article</h2>

    <div id ="Hfont">
    <?php
    // connect
    include("includes/db-connect.php"); 
    
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `feature` = 1");

    // execute
    $stmt ->execute(); 

    // display results
    while($row = $stmt->fetch()){
        ?><p>
        <a href = "process-like.php?articleId=<?php echo($row["articleId"])?>">Like</a>
        <a href = "process-unlike.php?articleId=<?php echo($row["articleId"])?>">Unlike</a><br>
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        ?><br><?php
        echo $row['title'];
        ?><br><?php
        echo $row['author'];
        ?><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a><br>
        <br><?php
    }   
    ?>
    </div>

    <div class = "box">
    <h3>Industry</h3>
    <?php
    // connect
    include("includes/db-connect.php"); 
    
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId < 3");

    // execute
    $stmt ->execute(); 

    // display results
    while($row = $stmt->fetch()) { 
        ?><p>
        <a href = "process-like.php?articleId=<?php echo($row["articleId"])?>">Like</a>
        <a href = "process-unlike.php?articleId=<?php echo($row["articleId"])?>">Unlike</a><br>
        <img src ="<?php echo $row['img']?>"><br><br>  
        <?php
        echo $row['title'];
        ?><br><?php
        echo $row['author'];
        ?><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }   
    ?>
    </div>

    <h3>Technical</h3>
    <?php
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId < 5 AND articleId > 2");
    // execute
    $stmt ->execute(); 

    while($row = $stmt->fetch()) { 
        ?><p>
        <a href = "process-like.php?articleId=<?php echo($row["articleId"])?>">Like</a>
        <a href = "process-unlike.php?articleId=<?php echo($row["articleId"])?>">Unlike</a><br>
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        echo $row['title'];
        ?><p id ="Tbox"><?php
        echo $row['author'];
        ?><p><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }  
    ?>
    </div>

    <h3>career</h3>
    <?php
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId > 4");
    // execute
    $stmt ->execute(); 
    while($row = $stmt->fetch()) { 
        ?><p>
        <a href = "process-like.php?articleId=<?php echo($row["articleId"])?>">Like</a>
        <a href = "process-unlike.php?articleId=<?php echo($row["articleId"])?>">Unlike</a><br>
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        echo $row['title'];
        ?><p id ="Cbox"><?php
        echo $row['author'];
        ?><p><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }  
    ?>

<?php
}else{
?>
    <nav>
        <ul>
            <a href = "main.php">Home</a>
            <a href = "about.php">About</a>
            <a href = "contact-form.php">Contact</a>
            <a href = "register.php">Register</a>
            <a href = "login.php">Login</a>
        </ul>
    </nav>

    <link rel = "stylesheet" href = "./includes/style-main.css"/>
    <link rel = "stylesheet" href = "./includes/style-header.css"/>

    <h1>Welcome to Imm News Network</h1>
    <p>This is the place we you can collect valuble resources about the industries, the most up-to-date technologies and career informations.<br><br> 

    <iframe width="560" height="315" src="https://www.youtube.com/embed/PcY9_mCT2D8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <h2>Today's Featured Article</h2>
    
    <div id ="Hfont">
    <?php
    // connect
    include("includes/db-connect.php"); 
    
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE `feature` = 1");

    // execute
    $stmt ->execute(); 

    // display results
    while($row = $stmt->fetch()) { 
        ?><p>   
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        ?><br><?php
        echo $row['title'];
        ?><br><?php
        echo $row['author'];
        ?><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }   
    ?>
    </div>

    <div class = "box">
    <h3>Industry</h3>
    <?php
    // connect
    include("includes/db-connect.php"); 
    
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId < 3");

    // execute
    $stmt ->execute(); 

    // display results
    while($row = $stmt->fetch()) { 
        ?><p>
        <img src ="<?php echo $row['img']?>"><br><br>  
        <?php
        echo $row['title'];
        ?><br><?php
        echo $row['author'];
        ?><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }   
    ?>
    </div>

    <div class = "box">
    <h3>Technical</h3>
    <?php
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId < 5 AND articleId > 2");
    // execute
    $stmt ->execute(); 

    while($row = $stmt->fetch()) { 
        ?><p>
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        echo $row['title'];
        ?><p id ="Tbox"><?php
        echo $row['author'];
        ?><p><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }  
    ?>
    </div>

    <div class = "box">
    <h3>career</h3>
    <?php
    // prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` WHERE articleId > 4");
    // execute
    $stmt ->execute(); 
    while($row = $stmt->fetch()) { 
        ?><p>
        <img src ="<?php echo $row['img']?>"><br><br>
        <?php
        echo $row['title'];
        ?><p id = "Cbox"><?php
        echo $row['author'];
        ?><p><br><?php
        echo $row['preview'];
        ?><br><?php
        echo $row['likes']." likes";
        ?><br>
        <a href ="<?php echo $row['link']?>">Click to see the full page</a>
        <br><?php
    }  
    ?>
    </div>
<?php
}
?>

<table>
    <tr>
        <th>Visitor</th>
        <th>Time</th>
    </tr>
    <tr>
        <td>betaTester</td>
        <td>2021/11/01</td>
    </tr>   
</table>

<?php
include("includes/footer.php");
?>
