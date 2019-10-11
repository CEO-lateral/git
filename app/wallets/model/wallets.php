<?php
$hostname = "localhost";
$username = "k_login";
$password = "k_Hy89s0";
$databaseName = "wallets";
$connect = mysqli_connect($hostname, $username, $password, $databaseName); 
$query = "SELECT * FROM `wallets`";
$result1 = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src ="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
        <script >
     /*   $(document).ready(function(){ 
            $('#example').DataTable();
        });*/
        </script>
    </head>
    <body>
        <table id="example" class="display" cellspacing="0" width="100%"> 
        <thead> 
            <tr>
                <th>id</th>
                <th>id_user</th>
                <th>amount</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            <?php 
			$resultprov = mysql_query("select * from wallets");
while ($row = mysql_fetch_array($resultprov, MYSQL_ASSOC)):;
?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    </body>
</html>