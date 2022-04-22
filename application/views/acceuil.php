<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <link href= "<?php echo js_loader("js"); ?>" rel="stylesheet"> 

        <title>Acceuil@com</title>
    </head>
    <body>
        <h1>En attente de validation ...</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-8"><br><br>
                    
                <a href="<?php echo base_url(); ?>Ctrl_Stock_Entrant/lien_Vers_Insert_Stock_Entrant"  class="btn btn-info"> Achats de matieres premieres</a>
                <a href="<?php echo base_url(); ?>Ctrl_Stock_Sortant/lien_Vers_Insert_Stock_Sortant"  class="btn btn-info"> Prise des matieres premieres</a>
                <a href="<?php echo base_url(); ?>Ctrl_Produit_Fabrique/lien_vers_insert_Produit_Fabrique"  class="btn btn-info"> Fabriquer des produits</a>

            </div>
            </div>
        </div>
    </body>
</html>