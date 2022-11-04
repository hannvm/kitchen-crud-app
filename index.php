<?php require 'script.php'; ?>

<?php ?>


<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Kitchen App</title>
</head>
<body>

    <div class="container mb-3">

        <h1>Kitchen App</h1>


        <h3>Ingredients</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Food</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Measurement</th>
                    <th scope="col">Restock</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i =0; $i<= count($array_ingredients)-1; $i++) {
                    echo '
                        <tr>
                            <td>' . $array_ingredients[$i] -> id . '</td>
                            <td>' . $array_ingredients[$i] -> food . '</td>
                            <td>' . $array_ingredients[$i] -> qty . '</td>
                            <td>' . $array_ingredients[$i] -> measurement . '</td>
                            <td></td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>


        <h3>Recipes</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Recipe</th>
                    <th scope="col">Show Ingredients</th>
                    <th scope="col">Make Recipe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i =0; $i<= count($array_recipes)-1; $i++) {
                        echo '
                            <tr>
                                <td>' . $array_recipes[$i] -> id . '</td>
                                <td>' . $array_recipes[$i] -> recipe . '</td>
                                <td></td>
                                <td></td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>

    </div>
</body>
