
<?php
session_start();

if (!array_key_exists("c_id", $_COOKIE)) {
  echo "<script> window.location = 'register.php' </script>";
}
include 'includes/header.php';
 

$id = $_SESSION['c_id'];
   $query = "SELECT * FROM `customer` where c_id=$id";
   $result = $link->query($query);
    if ($result->num_rows > 0){
                             
    $row = $result->fetch_assoc();
                               
                                    $getname= $row['c_name'];
                                    $getaddress= $row['c_address'];
                                    $getnumber=$row['c_number'];
                                    $getcity=$row['city'];
                                    $getcountry=$row['country'];
                                    $getzipCode=$row['zipCode'];
                                
                                
                            }else{
                                echo "<p class='lead'><em>No records were found.</em></p>";
                            }
                        

                    // Close connection
                

if(isset($_POST['submit']))
{     
 $id = $_SESSION['c_id'];
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $city = $_POST['city'];
 $country = $_POST['country'];
 $zip = $_POST['zip'];

  $query = "UPDATE `customer` SET `c_name`='$name',`c_number`='$phone',`c_address`='$address',`city`='$city',`country`='$country',`zipCode`=$zip WHERE `c_id` = $id";

 if (mysqli_query($link, $query)) {
  echo "<script>alert('Checked Out Succesfully');</script>";
} else {

  echo "Error: " . $query ."
  " . mysqli_error($link);
}
mysqli_close($link);
}
?>
<br>

<!-- Start Banner Area -->
<section>
        <h3 style="margin-left:150px; font-weight:bold;">Checkout</h3>
</section><br>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
  <div class="container">
<div class="billing_details">
  <div class="row">
    <form style="align-items: center;" method="POST" enctype="multipart/form-data" action="#" class="was-validated">
      <div class="row">
        <div class="col-xl-6">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user"></i>&nbsp; Your Name </span>
          </div>
          <input name="name" class="form-control" placeholder="Enter Your Name" type="text" required="" value="<?php echo $getname?>">
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
      </div> 
      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-phone"></i> &nbsp; Phone# </span>
      </div>
      <input name="phone" class="form-control" placeholder="0300.." type="tel" pattern="^\d{11}$" required="" value="<?php echo $getnumber?>"><small>Format:03001234567</small>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
  </div> 
<div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-address-book"></i> &nbsp; Address</span>
  </div>
  <input name="address" class="form-control" placeholder="Address" type="text" required="" value="<?php echo $getaddress?>">
  <div class="valid-feedback">Valid.</div>
  <div class="invalid-feedback">Please fill out this field.</div>
</div> 
<div class="form-group input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">City</span>
</div>
<input name="city" class="form-control" placeholder="city" type="text" required="" value="<?php echo $getcity?>">
<div class="valid-feedback">Valid.</div>
<div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Country</span>
</div>
<input name="country" class="form-control" placeholder="Country" type="text" required="" value="<?php echo $getcountry?>">
<div class="valid-feedback">Valid.</div>
<div class="invalid-feedback">Please fill out this field.</div>
</div>
<div class="form-group input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Zip Code</span>
</div>
<input name="zip" class="form-control" placeholder="1234" type="tel" required="" value="<?php echo $getzipCode?>">
<div class="valid-feedback">Valid.</div>
<div class="invalid-feedback">Please fill out this field.</div>
</div>

</div>
</form>
<div class="col-lg-1"></div>
<div class="col-lg-5">
    <div class="order_box" style="background-color: #d4d1cb;  border-radius: 5px; padding: 10px;">
      <h2>Your Order</h2>
      <p>Order Total Amount</p><br>
      <p>52$</p>
      <div class="creat_account">
        <input type="checkbox" id="f-option4" name="selector">
        <label for="f-option4">I’ve read and accept the </label>
        <a href="#">terms & conditions*</a>
    </div>
    
</div>
</div>

<div class="w-size25">
  <!-- Button -->
  <input type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" name="submit" value="submit">
</div>
</div>
</div>
</div>
</section>
<br><br>
<!--================End Checkout Area =================-->
<?php include 'includes/footer.php';?>



