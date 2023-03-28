<?php include('partials-front/stmenu.php'); ?>
<?php 
if(isset($_GET['food_id']))
{
    $food_id = $_GET['food_id'];
    $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
    $res = mysqli_query($conn, $sql);
    // $count = mysqli_num_rows($res);
    $count = 1;

    // if($count==1)
    // {
    //     //WE Have DAta
    //     //GEt the Data from Database
    //     // $row = mysqli_fetch_assoc($res);

    //     // $title = $row['title'];
    //     // $price = $row['price'];
    //     // $image_name = $row['image_name'];
    // }
    // else
    //     {
    //         //Food not Availabe
    //         //REdirect to Home Page
    //         header('location:'.SITEURL);
    //     }
}
else
{
    //Redirect to homepage
    header('location:'.SITEURL);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Quantity</th>
                            <th style="text-align:center;" width="5%">Remove</th>

                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                            while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $count++; ?></th>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['image_name']; ?></td>
                            <td></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>