<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

    <a href="saveuser.php" class="btn btn-primary adlink">Add users</a>


        <table class="table table-hover table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            /**
             * Created by PhpStorm.
             * User: a
             * Date: 11/06/2019
             * Time: 11:04
             */
            //Connect to the Db
            $conn = mysqli_connect('localhost', 'root', '', 'may_syst');
            //Check if the connection is successful
            if (!$conn){
                echo 'Connection failed';
            }else{
                //Proceed to fetch data from the Db
                //Start by creating the select query
                $selectQuery = "SELECT * FROM majina";
                //Check if the select query is correct
                if (!$selectQuery){
                    echo 'Error on the select query';
                }else{
                    //Proceed to fetch data
                    $fetch = mysqli_query($conn, $selectQuery);
                    while ($row = mysqli_fetch_assoc($fetch)){
                        extract($row);
                        echo "<tr>
                                    <td>$Jina</td>
                                    <td>$Arafa</td>
                                    <td>
                                    
                                    <a href='delete.php?id_yangu=$ID' class='btn btn-danger'>Delete</a>
                                    
                                   

                                    
                                    
                                    </td>
                                    <td><a href='update.php?id_yetu=$ID&jina_yetu=$Jina&arafa_yetu=$Arafa&pass_yetu=$Siri' class='btn btn-primary'>Update</a></td>
                                </tr>";
                    }
                }
            }

            ?>
        </table>



</body>
</html>