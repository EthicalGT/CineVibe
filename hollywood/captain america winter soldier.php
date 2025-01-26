<?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='8'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
 ?>
<html>
<head>
<link rel="stylesheet" href="../style.css"/>
</head>
    <body>
        
<nav class="bolly">

        <!--logo--------------->
        <a href="index.html" class="logo">
            <img src="../img/logo.png"/>
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
        <li><a href="index.php">Home</a></li>
            <li><a href="bolly.php">Bollywood</a></li>
            <li><a href="holly.php">Hollywood</a></li>
            <li><a href="holly.php">Web Series</a></li>
            <li><a href="ticket_booking/index.php">Book Ticket</a></li>
        </ul>
       
    </nav>
    <div class="movie-block">
            <div class="flexbox">
                <div class="movie-left">
        
    </div>
    
    <div class="m-details">
        <center>
    <video width="320" height="240" controls><source src="../<?php echo $movie; ?>" 
            type="video/mp4"></video></center>
            <h2>---Movie Details---</h2>
                <p>Movie: <span> <?php echo $res['mname'];?></span></p>
                <p>Actors: <span><?php echo $res['mactors']; ?></span></p>
                <p>Language: <span>Hindi</span></p>
                <p>Release: <span><?php echo $res['mrelease']; ?></span></p>
                <p>Quality: <span><?php echo $res['mquality']; ?></span></p>
                <p>Rating: <span><?php echo $res['mrating']; ?></span></p>
                <desc><h3>Movie Storyline:</h3>
                <?php echo $res['mstory']; ?></desc>
<desc><h3>Movie Description:</h3>
<?php echo $res['mdesc']; ?>
</desc>
<div class="btn">
<a href="../<?php echo $movie; ?>" Download><button>Download 720p</button></a>
    </div>
</div>
    <div class="movie-right">
    </div>
</div>
<footer class="ftr">
<p>Cinevibe.com</p>
<p>&copy; Cinevibe 2023</p>
</footer>
</body>
</html>        

    