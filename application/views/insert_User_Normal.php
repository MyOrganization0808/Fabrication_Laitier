<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title> insert@User_Normal</title>
    </head>
    <body>
        <h1>Insertion d'un utilisateur normal</h1>


        <form class="form-horizontal" action="<?php echo base_url(); ?>Ctrl_User_Normal/insert_Ctrl_Non_Valider" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">Votre nom </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="nom" name="nom_User_Normal">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Votre email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="email" name="email_User_Normal">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Votre mot de passe</label>
                    <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Password" name="mdp_User_Normal">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit"  class="btn btn-primary"> Inserer </button>
                </div>
            </div>
        </form>

        
    </body>
</html>