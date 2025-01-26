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
            $query=mysqli_query($conn,"select * from bollywood where mno='1'");
            $res=mysqli_fetch_array($query);
            $movie=$res['mpath'];
            $img=$res['mimg'];
            ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
           
            <a href="bollywood/adipurush.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='2'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            
            <a href="bollywood/bholaa.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='3'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
           
            <a href="bollywood/bhediya.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='4'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
           
            <a href="bollywood/brahmastra.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='5'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            
            <a href="bollywood/bloody daddy.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
        <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='6'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
            
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
         
            <a href="bollywood/brothers.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-7------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='7'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="bollywood/kedarnath.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='8'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="bollywood/ek villain returns.php">
            <?php echo $res['mname'];?>
            </a>
        </div>
          <!--box-9------------------------>
          <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
        <?php
        $conn=mysqli_connect('localhost','root','','cinevibe');
        $query=mysqli_query($conn,"select * from bollywood where mno='5'");
        $res=mysqli_fetch_array($query);
        $movie=$res['mpath'];
        $img=$res['mimg'];
        ?>
                <div class="quality">720p</div>
                <img src="<?php echo $img; ?>">
            </div>
            <!--text--------->
            <a href="bollywood/brothers.php">
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