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
        <form action="index.php?controller=employees&action=alta" method="get" class="col-lg-5 mx-auto" >
            <h3>Add user</h3>
            <hr/>
            Name: <input type="text" name="Name" class="form-control"/>

            Surname: <input type="text" name="Surname" class="form-control"/>
            <input type="text"class="d-none form-control" name="controller" value="employees" />
            <input type="text" class="d-none form-control" name="action" value="alta" />
            Email: <input type="text" name="email" class="form-control"/>
            phone: <input type="text" name="phone" class="form-control"/>
            <input type="submit" value="Send" class="btn btn-success"/>
        </form>
        <div class="col-lg-5 mx-auto">
            <h3>Users</h3>
            <hr/>
        </div>
        <section class="col-lg-5 mx-auto" style="height:400px;overflow-y:scroll;">
            <?php foreach($datos["employees"] as $employee) {?>
                <?php echo $employee["id"]; ?> -
                <?php echo $employee["Name"]; ?> -
                <?php echo $employee["email"]; ?> -
                <?php echo $employee["phone"]; ?>
                <div class="right">
                    <a href="index.php?controller=employees&action=detalle&id=<?php echo $employee['id']; ?>" class="btn btn-info">Detalles</a>
                </div>
                <hr/>
            <?php } ?>
            <a href="index.php?controller=employees&action=logOut" class="btn btn-info">Log out</a>
        </section>
    </body>
</html>