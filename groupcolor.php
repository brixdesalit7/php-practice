<?php 
include('conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function groupByColor($fruits) {
    // declare empty array 
    $final_array = [];
    // loop through each element of $fruits
    foreach($fruits as $key=>$val) {
        // assign the key value to $final_array variable
        $final_array[$val][] = $key;
    }
    // return the value of $final_arry to function
    return $final_array;  
}

    $grouped = array("Ripe Mango"=>"Yellow", "Strawberry"=>"Red", "Lemon"=>"Yellow");

    print_r(groupByColor($grouped));





?>
</body>
</html>