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
                            <td><button type="button" id="btnRestock" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#restockModal">Restock</button></td>
                            </tr>';
                }
                ?>
            </tbody>
        </table>
        <!-- Modal Restock-->
        <div class="modal fade" id="restockModal" tabindex="-1" role="dialog" aria-labelledby="restockModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="restockModalLabel">Restock</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Restock text
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Save & Close</button>
                    </div>
                </div>
            </div>
        </div>


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
                                <td><button type="button" id="btnShowIngredients" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#showIngredientsModal">Show Ingredients</button></td>
                                <td><input type="submit" name="makeRecipe" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#makeRecipeModal" value="Make Recipe"></td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
        <!-- Modal Show Ingredients-->
        <div class="modal fade" id="showIngredientsModal" tabindex="-1" role="dialog" aria-labelledby="showIngredientsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showIngredientsModalLabel">Show Ingredients</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Show Ingredients text
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Make Recipe-->
        <div class="modal fade" id="makeRecipeModal" tabindex="-1" role="dialog" aria-labelledby="makeRecipeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="makeRecipeModalLabel">Make Recipe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Recipe Made. Enjoy! :)</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
