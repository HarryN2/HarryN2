<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
             <!--   <a href="#" title="Logo">
                    <img src="images/ordersta.png" alt="Restaurant Logo" class="img-responsive">
                </a>
-->
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <!-- <a href=" <?//php echo SITEURL; ?>">Home</a> -->
                        <a href="dashboard.php">Home</a>

                    </li>
                    <li>
                        <!-- <a href="<?//php echo SITEURL; ?>#">Categories</a> -->
                        <a href="#">Categories</a>

                    </li>
                   <!--
                    <li>
                        <!-- <a href="<?php// echo SITEURL; ?>#">Foods</a>
                        <a href="#">Food</a>

                    </li>
                    -->
                    <li>
                        <!-- <a href="<?php //echo SITEURL; ?>#">Cart</a> -->
                        <a href="#">Order</a>

                    </li>
                    
                    <li>
                        <!-- <a href="<?php //echo SITEURL; ?>#">logout</a> -->
                        <a href="logout.php">Logout</a>

                    </li>

                    
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->