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
        <form action="index.php?controller=employees&action=check" method="get" class="col-lg-5 mx-auto">
            <?php 
                if(!empty($_GET['error'])){ ?>
                        <h6><?php echo $_GET['error']; ?></h6>
                <?php 
                }
            ?>
            <h3>Login Page</h3>
            <hr/>
            UserName: <input type="text" name="name" class="form-control"/>
            Password: <input type="password" name="password" class="form-control"/>
            <input type="text"class="d-none form-control" name="controller" value="employees" />
            <input type="text" class="d-none form-control" name="action" value="check" />
            <input type="submit" value="Login" class="btn btn-success"/>
        </form>
        
    </body>
</html>