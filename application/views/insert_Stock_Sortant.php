<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <link href= "<?php echo js_loader("js"); ?>" rel="stylesheet"> 


        <title>Prise@Stock</title>
    </head>
    <body>
        <h1>Prises de matieres premieres</h1>
        

        <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_Stock_Sortant/insert_Stock_Sortant" method="post">
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Matieres premieres</label>
                    <div class="col-sm-10">
                        <select name="id_Matiere_1er" id="pet-select"  onchange="Visible('champs1')">
                        <?php for($j = 0;$j<count($matiere_premiere) ; $j++ ){  ?>
                            <option value="<?php echo $matiere_premiere[$j]->getId_Matiere_1er();  ?>"><?php echo $matiere_premiere[$j]->getNom_Matiere_1er();  ?></option>
                        <?php }  ?>
                        </select>    
                    </div>
                </div>


            
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
