<?php include 'header.php';
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <style>
        .card{
            background-color:black;
            color:white;
        }
        .card img{
            opacity: .8;
        }

        .card img:hover{
            opacity: 1;
        }
        .btn:hover{
            background-color:powderblue;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
           
            <div class="col-lg-3">
                <form action="manage_cart.php" mathod="POST" >
                    <div class="card" >
                        <img src="bag_1.jpg" >
                        <div class="card-body text-center ">
                            <h5 class="card-title">Bag 1</h5>
                            <p class="card-text">Price: BD. 550/-</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="bag 1" >
                            <input type="hidden" name="price" value="550" >
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" mathod="POST">
                    <div class="card" >
                        <img src="bag_2.jpg" >
                        <div class="card-body text-center ">
                            <h5 class="card-title">Bag 2</h5>
                            <p class="card-text">Price: BD. 600/-</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="bag 2" >
                            <input type="hidden" name="price" value="600" >
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-lg-3">
                <form action="manage_cart.php" mathod="POST">
                    <div class="card" >
                        <img src="bag_3.png" >
                        <div class="card-body text-center ">
                            <h5 class="card-title">Bag 3</h5>
                            <p class="card-text">Price: BD. 650/-</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="bag 3" >
                            <input type="hidden" name="price" value="650" >
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" mathod="POST">
                    <div class="card" >
                        <img src="bag_4.jpg" >
                        <div class="card-body text-center ">
                            <h5 class="card-title">Bag 1</h5>
                            <p class="card-text">Price: BD. 750/-</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="bag 4" >
                            <input type="hidden" name="price" value="750" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>