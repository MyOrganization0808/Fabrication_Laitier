<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>Liste@Stock</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><br><br>
                <h3>Liste des Stocks </h3>
                    
                <table class="table">
                        <thead class="thead-light">
                        <th>Nom de matieres premieres</th>
                        <!-- <th>quantites entrants</th>
                        <th>quantites sortants</th> -->
                        <th>quantites restants</th>
                        </thead>
                        <?php for($i = 0;$i<count($data) ; $i++ ){  ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $data[$i]->getNom_Matiere_1er();  ?></td>
                                
                                <td><?php echo $data[$i]->getQuantite_Restant();  ?></td>
                            </tr>
                        </tbody>

                        <?php }  ?>

                    </table>
                    <br>
                    <a href="<?php echo base_url(); ?>Ctrl_Super_User/deconnexion"     class="btn btn-info"> Deconnexion </a>
                </div>
            </div>
        </div>  

        
    </body>
</html>