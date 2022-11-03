<?php


    $host='localhost';
    $dbName='kitchen-app';
    $user='hannah';
    $pass='insecure';


    //DSN - data source name (string with associated data structure to describe db connection source)
    $dsn= 'mysql:host=' . $host . ';dbname=' . $dbName;
    $pdo= new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


    $stmt_get_ingredients = $pdo->query('SELECT * FROM ingredients');

    while($row = $stmt_get_ingredients->fetch()) {
        echo $row->food . '<br>';
    }

    //prepared statements
    //serach ingredients by quantity
    $search_qty = 1000;

    $sql_get_ingredients_by_qty = 'SELECT * FROM ingredients WHERE qty = ?';
    $stmt_get_ingredients_by_qty = $pdo->prepare($sql_get_ingredients_by_qty);
    $stmt_get_ingredients_by_qty->execute([$search_qty]);
    $searched_by_qty = $stmt_get_ingredients_by_qty->fetchAll();

    print_r($searched_by_qty);

    foreach($searched_by_qty as $food) {
        echo $food->food . '<br>';
    }



    //set new ingredient quantity and update is_low
    $new_qty = 300;
    $update_food = 'mince';
    $new_is_low = 'yes';

    $sql_set_ingredients = "UPDATE ingredients SET qty = ?, is_low = ? WHERE food = ?";
    $stmt_set_ingredients = $pdo->prepare($sql_set_ingredients);
    $stmt_set_ingredients->execute([$new_qty, $new_is_low, $update_food]);






    //Assoc array
    // while($row = $stmt_get_ingredients-> fetch(PDO::FETCH_ASSOC)){
    //     echo $row['qty'] . '<br>' . ['qty'] . '<br>' . ['measurement'] . '<br>';
    // }