<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href= "<?php echo css_loader("bootstrap.min"); ?>" rel="stylesheet"> 
        <title>index@Start</title>
    </head>
    <body>
    <div class="container">
            <div class="row">
                <div class="col-md-8"><br><br>

                <a  href="<?php echo base_url(); ?>Ctrl_Super_User/lien_Login" class="btn btn-info"> Super utilisateur</a>                    
                <a href="<?php echo base_url(); ?>Ctrl_User_Normal/login_Lien_Page"  class="btn btn-info"> Utilisateur Normal</a>
                <!-- <a  href="<?php echo base_url(); ?>Ctrl_Non_Valider/getNon_Valider_All" class="btn btn-info"> Liste</a> -->
                </div>
            </div>
        </div>

        
    </body>
</html>
