<?php session_start();

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
    $id = $_GET['id_produkt'];
    $product_name = $_GET['jmeno_produktu'];
    $quantity = $_GET['quantity'];
    $price = $_GET['cena'];

    $product_arr = array(
        'id_produkt'=>$id,
        'jmeno_produktu'=>$product_name,
        'quantity'=>$quantity,
        'cena'=>$price,
    );

    if(!empty($_SESSION['cart']))
    {
        $product_ids = array_column($_SESSION['cart'], 'id');
        if(in_array($id, $product_ids))
        {
            foreach($_SESSION['cart'] as $key => $val)
            {
                if($_SESSION['cart'][$key]['id']==$id)
                {
                    $_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $quantity;
                }

            }

        }
        else
        {
            $_SESSION['cart'][] = $product_arr;
        }
    }
    else
    {
        $_SESSION['cart'][] = $product_arr;
    }
    header("location:kosik.php");

}
if($action_type=='remove_item')
{
    $index = $_GET['index'];
    if(isset($_SESSION['cart']))
    {
        unset($_SESSION['cart'][$index]);
        header("location:main.php");
    }

}


?>