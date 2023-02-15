<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Example PHP+PDO+POO+MVC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="view/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="view/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        <div class="col-lg-7 mr-auto">
            <form action="index.php?controller=employees&action=actualizar" method="get" class="col-lg-5 mx-auto">
                <h3>User detail</h3>
                <hr/>
                
                <input type="hidden" name="id" value="<?php echo $datos["employee"]['id'] ?>"/>
                Name: <input type="text" name="Name" value="<?php echo $datos["employee"]['Name'] ?>" class="form-control"/>
                Surname: <input type="text" name="Surname" value="<?php echo $datos['employee']['Surname'] ?>" class="form-control"/>
                Email: <input type="text" name="email" value="<?php echo $datos['employee']['email'] ?>" class="form-control"/>
                phone: <input type="text" name="phone" value="<?php echo$datos['employee']['phone'] ?>" class="form-control"/>
                <input type="submit" value="Send" class="btn btn-success"/>
                <input type="text"class="d-none form-control" name="controller" value="employees" />
                <input type="text" class="d-none form-control" name="action" value="actualizar" />
                <a href="index.php" class="btn btn-info">Return</a>
            </form>
            
        </div>
    </body>
</html>