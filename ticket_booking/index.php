<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cinevibe-Ticket Booking</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <div class="outlet">
<div class="container">
  <div class="form-part">
    <h2>Movie Ticket Reservation</h2>
<form method="POST">

    <div class="form-inputs">
      <div class="sqr-input">
        <div class="text-input margin-bottom-zero">
          <div class="sqr-input">
            <div class="text-input">
              <label for="fname">First Name</label>
              <input type="text" name="fname" id="fname" >
            </div>
            <div class="text-input">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" id="lnaem">
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="text-input">
          <label for="phone">Mobile/Land line</label>
          <input type="text" name="phoneno" id="phone">
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="text-input">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
      </div>


      <div class="text-input">
        <label for="address">Address Line</label>
        <input type="text" name="address" id="address">
      </div>


      <div class="radio-button">
        <label>Gender</label>
        <ul>
          <li>
            <input type="radio" name="gender" value="Male" /><span>Male</span>
          </li>
          <li>
            <input type="radio" name="gender" value="Female"/><span>Female</span>
          </li>
        </ul>
      </div>

      <div class="text-input">
        <label for="Theatres">Theatres</label>
        <select name="theaters" id="country">
            <option value="" selected>--- Choose your nearby Theatre ---</option>
            <option value="Nathganga">Nathaganga</option>
            <option value="Laxmi">Laxmi</option>
            <option value="Indrayani">Indrayani</option>
            <option value="Chitralaya">Chitralaya</option>
        </select>
        <label for="sitting adjustment">Seat Adjustment</label>
        <select name="adjustment" id="country" required>
            <option value="" selected>--- Choose your seat type ---</option>
            <option value="120">Balcony(Price :&#8377;120)</option>
            <option value="70">Normal(Price :&#8377;70)</option>
            <option value="100">Corner(Price :&#8377;100)</option>
            <option value="90">Frontside(Price :&#8377;90)</option>
        </select>
        <label for="country">Time :</label>
        <select name="time" id="country">
            <option value="0" selected>--- Select Time Period ---</option>
            <option value="12PM">12PM TO 3PM</option>
            <option value="3PM">3PM TO 6PM</option>
            <option value="6PM">6PM TO 9PM</option>
            <option value="9PM">9PM TO 12PM</option>
        </select>
        <label for="country">Seats</label>
        <select name="seats" id="country">
            <option value="0" selected>--- Choose seats(Max 4) ---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
      </div>

      <div class="sqr-radio-input">
        <div class="radio-button">
          <label>Payment Method :</label>
          <ul>
            <li>
              <input type="radio" name="payment" value="cash" onclick="hide();"/><span>Cash</span>
            </li>
            <li>
              <input type="radio" name="payment" value="UPI" onclick="show();"/><span>UPI</span>
            </li>
          </ul>
        </div>
        
        <div class="clearfix"></div>
      </div>


      <div class="text-input">
        <div class="UPI" id="UPI">
        <label for="message">UPI :</label>
        <div class="img"><img src="../img/QR.png"></div>
      </div>
      </div>


      <div class="check-boxes">
        <ul>
          <li>
            <input type="checkbox" name="terms" required/> <span>I accept terms and conditions</span>
          </li>
        </ul>
      </div>
    
    </div>
<div class="btn"><input type="submit" name="sbmt-btn"></div>
</form>
  </div>

</div>
</div>
<script>
  function show(){
    document.getElementById("UPI").style.display="block";
  }
  function hide(){
    document.getElementById("UPI").style.display="none";
  }
  </script>
  
</body>
</html>
<?php
if($_POST['sbmt-btn']){
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
            
            $query=mysqli_query($conn,"insert into ticket_reservation values('','$fname','$lname',
            '$mobile','$email','$address','$gender','$theaters','$adjustment','$time','$seats','$payment')");
            if($query){
              echo"<script>alert('Ticket Reserved Successfully..!');</script>";
            }
            else{
              echo"<script>alert('Unable to process your request at this moment..!');</script>";
            }
            //$res=mysqli_fetch_array($query);
}
            ?>