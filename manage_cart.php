<?php

    session_start();
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(isset($_POST['Add_To_Cart'])){
            echo $_POST['Item_name'];
            if(isset($_SESSION['cart'])){

                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_name'=>$_POST['Item_name'], 'Price'=>$_POST['price'], 'Quantity'=>1 );
                print_r( $_SESSION['cart']);

            }else{
                $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'], 'Price'=>$_POST['price'], 'Quantity'=>1 );
                print_r($_SESSION['cart']);
            }
        }
    }



?>