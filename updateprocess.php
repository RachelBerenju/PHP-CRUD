<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 12/06/2019
 * Time: 10:43
 */
if (isset($_POST['btn_update'])){
    $received_id = $_POST['x'];
    $received_name = $_POST['y'];
    $received_email = $_POST['z'];
    $received_password = $_POST['pwd'];

    //Connect to the Db
    $conn = mysqli_connect('localhost', 'root', '', 'may_syst');
    //Check if the connection is successful
    if (!$conn){
        echo "Connection failed";
    }else{
        //Proceed to update the Db
        //Start by creating the update query
        $updatequery = "UPDATE majina SET Jina='$received_name',Arafa='$received_email',Siri='$received_password' WHERE ID=$received_id";

        //Check if the query is correct
        if (!$updatequery){
            echo 'Error on the update query';
    }else{
            //Proceed to finally update
            $update = mysqli_query($conn,$updatequery);
            //Check if the update was successful
            if (!$update){
                echo 'Updating failed';
            }else{
                echo 'Record updated successfully';
                header('location:viewusers.php');
            }
        }
    }
}

?>