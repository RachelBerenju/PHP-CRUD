<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 11/06/2019
 * Time: 10:03
 */


if (isset($_GET['btn_save'])){
    $inputedName = $_GET['x'];
    $inputedEmail = $_GET['y'];
    $inputedPassword = $_GET['z'];

    //To save data, connect to the DB
    $conn = mysqli_connect('localhost', 'root', '', 'may_syst');


    //check if the connection was successful

    if (!$conn){
        echo 'Connection failed';
    }else{
        //Proceed to save data to the DB
        //Start by creating the insert query

        $insertQuery = "INSERT INTO `majina`(`ID`, `Jina`, `Arafa`, `Siri`) VALUES (null ,'$inputedName','$inputedEmail','$inputedPassword')";


        //Check if the Insert query is correct
        if (!$insertQuery){
            echo 'Error on the insert query';
        }else {
            //Proceed to finally write the data to your DB
            $ingiza = mysqli_query($conn, $insertQuery);
            //Check if the data was saved successfully

            if (!$ingiza){
                echo 'Saving failed';
            }else{
                echo 'Saved successfully';
               header('location:saveuser.php');
               echo '<a href="saveuser.php">Add more people</a>';
            }
        }
    }
}
?>