<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>Liste@Attente)</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><br><br>
                <h3>Liste des utilisateurs en attente </h3>
                    
                    <table class="table">
                        <thead class="thead-light">
                        <th>Nom </th>
                        <th>Email</th>
                        <th>Renouveller</th>

                        </thead>
                        <?php for($i = 0;$i<count($non_Valider) ; $i++ ){  ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $non_Valider[$i]->getNom_User_Normal();  ?></td>
                                <td><?php echo $non_Valider[$i]->getEmail_User_Normal();  ?></td>
                                <td>
                            <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_Super_User/insert_Ctrl_User_Normal?id_User_Non_Valider=<?php echo $non_Valider[$i]->getId_User_Normal(); ?>" method="post">
                                <input type="hidden" class="form-control" name="nom" value="<?php echo $non_Valider[$i]->getNom_User_Normal();  ?>">
                                <input type="hidden" class="form-control"  name="email" value="<?php echo $non_Valider[$i]->getEmail_User_Normal();  ?>">
                                <input type="hidden" class="form-control"  name="mdp" value="<?php echo $non_Valider[$i]->getMdp_User_Normal();  ?>">
                                <button type="submit"  class="btn btn-primary"> Valider </button> <br><br>

                            </form> 
                                <a href="<?php echo base_url(); ?>Ctrl_Super_User/delete_Ctrl_Non_Valider?id_User_Non_Valider=<?php echo $non_Valider[$i]->getId_User_Normal(); ?>" class="btn btn-info"> Annuler </a> </td>

                            </tr>
                        </tbody>

                        <?php }  ?>

                    </table>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8"><br><br>
                <h3>Liste des utilisateurs valider </h3>
                    
                    <table class="table">
                        <thead class="thead-light">
                        <th>Nom </th>
                        <th>Email</th>
                        <th>Renouveller</th>

                        </thead>
                        <?php for($i = 0;$i<count($user_Normal) ; $i++ ){  ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $user_Normal[$i]->getNom_User_Normal();  ?></td>
                                <td><?php echo $user_Normal[$i]->getEmail_User_Normal();  ?></td>
                                <td><a href="#" class="btn btn-info"> Modifier </a> 
                                <a href="<?php echo base_url(); ?>Ctrl_Super_User/delete_Ctrl_User_Normal?id_User_Normal=<?php echo $user_Normal[$i]->getId_User_Normal(); ?>" class="btn btn-info"> Supprimer </a> </td>

                            </tr>
                        </tbody>

                        <?php }  ?>

                    </table>
                    <br>

                    <a href="<?php echo base_url(); ?>Ctrl_View_Stock/getView_All" class="btn btn-info"> Liste des stocks </a>
                    <a href="<?php echo base_url(); ?>Ctrl_Super_User/deconnexion" class="btn btn-info"> Deconnexion </a>
               
                </div>
            </div>

        </div>  

        
    </body>
    <p>
        
    </p>

</html>