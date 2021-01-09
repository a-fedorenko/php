<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php require_once VIEWS.'/layouts/partials/site/_head.php';?>
    </head>
    <body>

        <div class="over"></div>
        <?php require_once VIEWS.'/layouts/partials/site/_nav.php';?>
        <?php require_once VIEWS.'/layouts/partials/site/_sidebar.php';?>

        <div class="container-head">
        
        </div>
        

        <div class="container">

        <?php include_once VIEWS.'/'.$template;?>

        </div>

        <?php require_once VIEWS.'/layouts/partials/site/_footer.php';?>
        <?php require_once VIEWS.'/layouts/partials/site/_modal.php';?>
        

        <script src="/assets/js/app.js">
        </script>
   
    
    </body>
</html>