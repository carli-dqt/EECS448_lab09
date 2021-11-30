<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hoodie = $_POST["hoodie"];
    $skirt = $_POST["skirt"];
    $cardigan = $_POST["cardigan"];
    $pants = $_POST["cardigan"];
    $shipping = $_POST["shipping"];

    if($shipping == "Free 7 day"){
        $shippingCost = 0;
    } else if($shipping == "$50.00 overnight"){
        $shippingCost = 50;
    } else if($shipping == "$5.00 three day"){
        $shippingCost = 5;
    }

    $totalCost = ($hoodie * 27) + ($skirt * 18) + ($cardigan * 34) + ($pants * 21) + $shippingCost;

    echo "<h1>Welcome Back " . $username . "! </h1><br>";
    echo "<h2>password: " . $password . "</h2><br>";

    $receipt = '<table border="1" cellspacing="0" cellpadding="4"><tr>';
    $receipt .= '<tr><td></td><td>QUantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>';
    $receipt .= '<tr><td>Relaxed-fit Hoodie</td><td>' . $hoodie . '</td><td>$27.00</td><td>$' . $hoodie * 27 . '</td></tr>';
    $receipt .= '<tr><td>Calf-length Skirt</td><td>' . $skirt . '</td><td>$18.00</td><td>$' . $skirt * 18 . '</td></tr>';
    $receipt .= '<tr><td>Long Cardigan with Tie Belt</td><td>' . $cardigan . '</td><td>$34.00</td><td>$' . $cardigan * 34 . '</td></tr>';
    $receipt .= '<tr><td>Skinny Fit Cargo Pants</td><td>' . $pants . '</td><td>$21.00</td><td>$' . $pants * 21 . '</td></tr>';
    $receipt .= '<tr><td>Shipping</td><td>' . $shipping . '</td><td>$' . $shippingCost . '</td></tr>';
    $receipt .= '<tr><td>Total Cost</td><td>' . $totalCost . '</td></tr>';

    echo $receipt;
   



?>