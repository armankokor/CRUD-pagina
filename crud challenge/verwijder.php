<?php

        include 'database.php';
        if(isset($_GET['verwijder_student'])){
        $student_nummer=$_GET['verwijder_student'];

        $sql="delete from `studenten` where student_nummer='" . $_GET['verwijder_student'] . "'";
        $result=mysqli_query($connect,$sql);
        if($result){
        header('location:crud challenge.php');            
        }
        else{
            die(mysqli_error($connect));
        }            
        }
    
        ?>