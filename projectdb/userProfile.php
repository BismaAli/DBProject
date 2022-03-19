<?php
session_start();
if (!array_key_exists("c_id", $_COOKIE)) {
    header("location: register.php");
}
   
    include 'includes/header.php';
    $id = $_SESSION['c_id'];
   $query = "SELECT * FROM `customer` where c_id = $id";
   $result = $link->query($query);
    if ($result->num_rows == 1){
                                $row = $result->fetch_assoc();
                                    $name= $row['c_name'];
                                    $email= $row['c_email'];
                                    $address= $row['c_address'];
                                    $number=$row['c_number'];
                                    $city=$row['city'];
                                    $country=$row['country'];
                                    $zipCode=$row['zipCode'];
                                
                                
                            }else{
                                echo "<p class='lead'><em>No records were found.</em></p>";
                            }
                        

                    // Close connection
                        $link->close();
?>

<div class="bg-secondary"><br>
    <div class="container emp-profile" 
    style="padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;">
    <form method="post">
        <div class="row">
<div class="col-md-8">
    <div class="profile-head">
        <h5 style="color: #333;">
          <?php echo $name?>
        </h5><br>
        <h6 style="font-weight: bold">About</h6>
    </div>
</div>
<div class="col-md-1">
</div>
<div class="col-md-3">
    <a href ='register.php?logout=1'><input class="btn btn-danger" value="Log Out" style="border: none;
    border-radius: 1.5rem;
    width: 100%;
    font-weight: 600;
    cursor: pointer;"></a>
</div>
</div>
<br>
    <div class="row">
        <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Name</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $name?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Email</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $email?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Phone</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $number?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Address</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $address?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Country</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $country?></p>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">City</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $city?></p>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <label style="font-weight: bold">Zip Code</label>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $zipCode?></p>
                    </div>
                </div>  
            </div>
        </div>
</form>      
</div>
<br>
</div><br>
<?php include 'includes/footer.php';?>