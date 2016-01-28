<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <!-- Datatable -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
        <!--My CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!-- Bootstrap display-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>Entrer une nouvelle donnée dans le tableau:</h3>
                    <input id="data_value" type="text">
                    <input id="data_validate" type="button" value="Valider">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
            
        <?php
            //Array creation
            $games = ["Super Mario 64",
                    "The legend of Zelda - Ocarina of Time", 
                    "DodonPachi", 
                    "Spyro The Dragon",
                    "Counter-Strike - Global Offensive"];
            //Echo first part of the DataTable
            echo '<div class="col-md-10"><table id="game_table" class="display">';
            echo '<thead>'
                    . '<tr>'
                            . '<th>#</th>'
                            . '<th>Nom du jeu</th>'
                    . '</tr>'
                . '</thead>'
                . '<tbody id="game_table_body">';
            //Generating content of DataTable
            for($i = 0; $i < count($games); $i++){
                echo '<tr><td>'.($i+1).'</td>'.'<td>'.$games[$i].'</td></tr>';
            }
            //Closing DataTable
            echo '</tbody></table></div>';
        ?>
        <!-- Closing bootstrap divs -->
                </div>
            </div>
        </div>
        
        
        
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <!--Jquery UI -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Datatable JS -->
        <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
        <!-- My JS -->
        <script src="js/main.js"></script>
    </body>
</html>
