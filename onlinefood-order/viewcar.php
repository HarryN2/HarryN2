
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
    <!--<link rel="stylesheet" href="css/style.css">-->
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
  <!--  <center>
        <a href="dashboard.php" class="btn btn-warning col-leg-2">Home</a>
        <a href="viewcar.php" class="btn btn-warning col-leg-2">cart</a>
</center>-->
<br>
<br>
<h2 align="center">Your Cart Products</h2>
<table class="table">
                <thead>
                    <tr>
                        <td>Sno</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sno = 1;
                        $t = 0;
                        foreach($_SESSION as $product){
                            $p = 0;
                            $q = 0;
                            echo "<form action='editCart.php' method='POST'>";
                            echo "<tr>";
                                echo "<td>".$sno++."</td>";
                                foreach($product as $key => $value){
                                    if($key == 0){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                    }else if($key == 1){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                        $p = $value;
                                    }else if($key == 2){
                                        echo "<td><input type='text' name='pro$key' value='".$value."' class='form-control'></td>";
                                        $q = $value;
                                    }
                                }
                                $t = $p * $q;
                                echo "<td>".$t."</td>";
                                echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
                                echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>