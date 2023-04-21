<?php
include 'function.php';

$databe = new quary();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="text-bg-success mt-3">
            <h2 class="text-center">Display Record Of User's</h2>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col=12">
                    <a href="form.php">
                        <button type="submit" class="btn btn-outline-success">
                            Add User
                            <i class='fas fa-user-tie' style='font-size:20px'></i>
                        </button></a>
                </div>
            </div>
        </div>

       
        <?php
            //----------------------------------<Alert Massages>--------------------------


            //----------------------------------<Insert Data massage>--------------------------
            if (isset($_GET['msg']) and $_GET['msg'] == 'ins') {
                echo    '<div class="alert alert-success" role="alert">
                            Data Insert Successfully.......!!
                    </div>';
            }
            // -- -------------------------------Delete Massage for User..----------------------- 
            if (isset($_GET['msg']) and $_GET['msg'] == 'del') {
            echo '<div class="alert alert-danger" role="alert">
                                  Data Deleted Successfully....!!
                          </div>';
            }
            //----------------------------------<Update Massages Data>--------------------------
            if (isset($_GET['msg']) and $_GET['msg'] == 'ups') {
                echo '<div class="alert alert-success" role="alert">
                                  Data Updated Successfully....!!
                          </div>';
            }
        ?>
        <table class="table table-bordered">
            <tr class="bg-success text-center">
                <th> S.No </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> City </th>
                <th> Action</th>
            </tr>
            <?php
            $data = $databe->getdata();
            $sno = 1;
            foreach ($data as $value) {
            ?>
                <tr class="text-center">
                    <td> <?php echo $sno++; ?></td>
                    <td> <?php echo $value['name']; ?></td>
                    <td> <?php echo $value['email']; ?></td>
                    <td> <?php echo $value['phone']; ?></td>
                    <td> <?php echo $value['city']; ?></td>
                    <td>
                        <!-- Edit Button -->
                        <a href="form.php?editid=<?php echo $value['id']; ?>" class="btn btn-success">
                            Edit
                            <i class='fa fa-edit' style='font-size:18px'></i>
                        </a>


                        <!-- Delete Button -->
                        <a href="form.php?deleteid=<?php echo $value['id']; ?>" class="btn btn-danger">
                            Delete
                            <i class='fas fa-trash' style='font-size:18px'></i>
                        </a>
                    </td>
                </tr>
            <?php
            } //foreach closed//
            ?>
        </table>
</body>

</html>