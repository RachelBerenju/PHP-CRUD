<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 12/06/2019
 * Time: 10:01
 */

//Connect to the Db
$conn = mysqli_connect('localhost', 'root', '', 'may_syst');

//Check if the connection was successful
if (!$conn){
    echo "Connection failed";
}else{
    //Proceed by deleting
    //Start by checking if the delete has been clicked

    if (isset($_GET['id_yangu'])){
     $receive_id = $_GET['id_yangu'];

     //Create the delete query
        $deletequery = "DELETE FROM majina WHERE id=$receive_id";

        //Complete by finally deleting

        $delete = mysqli_query($conn,$deletequery);

        //Check if deleting was successful

        if (!$delete){
            echo 'Deleting failed';
        }else{
            echo 'Record deleted successfully';
            header('location:viewusers.php');
        }
    }
}

?>