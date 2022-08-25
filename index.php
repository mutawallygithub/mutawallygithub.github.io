<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link href="bootstrap.min.css" rel="stylesheet">
   <style>
   body{
     padding:10px 15px;
   }
   </style>
   <title>Backup / Export Database</title>
</head>
<body>
   <h1>Backup / Export Database</h1>
   <div>
     <p>Proses backup atau restore database mysql.</p>
     <p>Silahkan klik tombol backup untuk mengunduh file .sql hasil backup dari database</p>
     <p><a href="backup.php" class="btn btn-primary">Backup Database <span class="glyphicon glyphicon-save"></span></a></p>
   </div>
   <form action="backup.php" method="post">
     <input type="submit" name="submit" value="Backup Database" class="btn btn-default btn-sm">
   </form>
</body>
</html>