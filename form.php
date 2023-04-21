<?php
include "function.php";
?>
<?php
$databe = new quary();
//----------------------------------<Insert Data>--------------------------
if (isset($_POST['submit'])) {
    $databe->insert($_POST);
}

//----------------------------------<Update Data>--------------------------
if (isset($_POST['update'])) {
    $databe->updateRecord($_POST);
}


//----------------------------------<Delete Users Data>--------------------------
if (isset($_GET['deleteid'])) {
    $delid = $_GET['deleteid'];
    $databe->deletedata($delid);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert User:</title>
</head>

<body>
    <div class="container">
        <div class="container mt-4 text-center">
            <h2>Insert New User Here:</h2>
        </div>

        <!-- //----------------------------------<Local form for edit to user data>-------------------------- -->
        <?php
        if (isset($_GET['editid'])) {
            $editid = $_GET['editid'];
            $myrecord = $databe->displayRecordByid($editid);
        ?>
            <!-- ------------------------------------------------------Update Form------------------------------------------------------- -->
            <div class="container">
                <form method="POST" action="#" class="form-horizontal col-md-6 col-md-offset-3" enctype="multipart/form-data">

                    <!------------------------------------------------NAME------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name:-</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $myrecord['name']; ?>" placeholder="Enter your Name">
                    </div>
                    <!-- ----------------------------------------------Email------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email:-</label>
                        <input type="email" name="email" value="<?php echo $myrecord['email']; ?>" class="form-control" id="email" placeholder="Enter your Email-Address">
                    </div>
                    <!-- ----------------------------------------------Phone------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone:-</label>
                        <input type="number" name="phone" value="<?php echo $myrecord['phone']; ?>" class="form-control" id="phone" placeholder="Enter your Number">
                    </div>
                    <!-- ----------------------------------------------City------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">City:-</label>
                        <select name="city" value="<?php echo $myrecord['city']; ?>" class="form-control" id="city">
                            <option> DELHI </option>
                            <option> NOIDA </option>
                            <option> GHAZIABAD </option>
                            <option> MEERUT </option>
                            <option> DELHI NCR </option>
                        </select>
                    </div>
                    <!----------------------------------------------- Button------------------------------------------------->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-2"><br>
                            <input type="hidden" name="hid" value="<?php echo $myrecord['id']; ?>">
                            <button type="submit" name="update" value="update" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php
        } else {
        ?>
            <!-- --------------------------------------Edit form closed--------------------------------------- -->

            <!-- --------------------------------------origneal form ----------------------------------------- -->
            <div class="container mt-3">
                <form method="POST" action="#" class="form-horizontal col-md-6 col-md-offset-3 ml-4" enctype="multipart/form-data">

                    <!-- ----------------------------------------------NAME------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Name:-</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                    </div>
                    <!-- ----------------------------------------------Email------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email:-</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email-Address">
                    </div>
                    <!-- ----------------------------------------------Phone------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Phone:-</label>
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your Number">
                    </div>
                    <!-- ----------------------------------------------City------------------------------------------------- -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">City:-</label>
                        <select name="city" class="form-control" id="city">
                            <option> DELHI </option>
                            <option> NOIDA </option>
                            <option> GHAZIABAD </option>
                            <option> MEERUT </option>
                            <option> DELHI NCR </option>
                        </select>
                    </div>
                    <!----------------------------------------------- Button------------------------------------------------->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                    </div>
                </form>
        <?php 
        } //else closed--  
        ?>
            </div>
    </div>
</body>

</html>