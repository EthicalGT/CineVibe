<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
    <body>
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        ?>
<nav>
        <!--logo--------------->
        <a href="index.html" class="logo">
            <img src="img/logo.png"/>
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
            <li><a href="bolly.php">Web Series</a></li>
            <li><a href="ticket_booking/index.php">Book Ticket</a></li>
        </ul>
    </nav>
   
   
    <!--movies---------------------------->
    <div class="bg">
    </div>
    </div>
    <div class="movies-heading">
        <h2>Latest Movies</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
            <?php
            $conn=mysqli_connect('localhost','root','','cinevibe');
            $query=mysqli_query($conn,"select * from hollywood where mno='1'");
            $res=mysqli_fetch_array($query);
            $movie=$res['mpath'];
            $img=$res['mimg'];
            ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
           
            <a href="hollywood/avatar 2.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">  
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='2'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?> 
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
          
            <a href="hollywood/age of ultron.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='3'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
           
            <a href="hollywood/infinity war.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='4'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="hollywood/batman vs superman.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='5'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            
            <a href="hollywood/wakanda forever.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
        <div class="movies-img">
            <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='6'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
           
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
         
            <a href="hollywood/blade 2.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-7------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
            <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='7'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="hollywood/captain america first avenger.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
            <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='8'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="hollywood/captain america winter soldier.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
          <!--box-9------------------------>
          <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
            <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from hollywood where mno='9'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="hollywood/iron man.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
    </section>
<!--btns--------------->
    <div class="btns">
        <a href="#">Previous</a>
        <a href="#">Next</a>
    </div>
    <!--footer------------------>
    <footer>
        <p>Cinevibe.com</p>
        <p></p>
    </footer>
    </body>
    </html>