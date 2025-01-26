<?php
            $conn=mysqli_connect('localhost','root','','cinevibe');
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $mobile=$_POST['phoneno'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $theaters=$_POST['theaters'];
            $adjustment=$_POST['adjustment'];
            $time=$_POST['time'];
            $seats=$_POST['seats'];
            $payment=$_POST['payment'];
            
            echo $fname;
            echo $lname;
            echo $mobile;
            echo $email;
            echo $address;
            echo $gender;
            echo $theaters;
            echo $adjustment;
            echo $time;
            echo $seats;
            echo $payment;
            
            //$query=mysqli_query($conn,"insert into * from ticket_reservation where mno='1'");
            //$res=mysqli_fetch_array($query);
            ?>