<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <link href= "<?php echo js_loader("js"); ?>" rel="stylesheet"> 


        <title>Fabrication@Produit</title>
    </head>
    <body>
        <h1>Fabrication de produits</h1>
        

        <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_Stock_Entrant/insert_Stock_Entrant" method="post">
                
                <div class="form-group">
                <label class="col-sm-2 control-label">Nom du produit</label>
                <div class="col-sm-10">
                    <select name="id_Matiere_1er" id="pet-select"  onchange="Visible('champs1')">
                        <option value="#">...</option>
                    
                        <?php for($j = 0;$j<count($fabrique) ; $j++ ){  ?>   
                        <option value="<?php echo $fabrique[$j]->getNom_Produit_Fabrique();  ?>"><?php echo $fabrique[$j]->getNom_Produit_Fabrique();  ?></option>
                    <?php }  ?>
                    </select>    
                </div>
            </div>

            <input type="hidden"  name="lait" value="<?php echo $matiere_premiere->getId_Matiere_1er();  ?>=1"> 
            <input type="hidden"  name="sucre" value=""> 
            <input type="hidden"  name="parfum" value=""> 
            <input type="hidden"  name="conservateur" value=""> 
            <input type="hidden"  name="colorant" value=""> 
            <input type="hidden"  name="fruit" value=""> 

            
            <div style="visibility:hidden" id="champs1">

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Quantite</label>
                        <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="kg" name="quantite"> 
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit"  class="btn btn-primary"> Inserer </button>
                    </div>
                </div>
            </div>
        </form>
        <a href="<?php echo base_url(); ?>Ctrl_Super_User/deconnexion" class="btn btn-info"> Deconnexion </a>
        <p></p>

        
    </body>
    </html>

















    

    
    <script type="text/javascript">
        
        function Visible(champs)
        {
          var Obj = document.getElementById(champs);
          if (Obj.style.visibility == 'hidden')
            {
                Obj.style.visibility = 'visible';
            }
          else
            {
                Obj.style.visibility = 'hidden';
            }
        }
      
      </script>
