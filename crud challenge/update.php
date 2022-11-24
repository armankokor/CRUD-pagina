
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>CRUD challenge</title>
</head>

<body>
    <main style="width: 600px; margin: 20px auto;">
        <h4 style="text-align:center;">Update informatie student</h4>

        <form class="cursusform" method="post">
            <div class="form-group">
                <label for="naam_student">Naam student</label>
                <input type="text" class="form-control" id="naam_student" name="naam_student" required>
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>
                <input type="text" class="form-control" id="klas" name="klas" required>
            </div>
            <div class="form-group">
                <label for="aantal_minuten">Aantal minuten te laat</label>
                <input type="text" class="form-control" id="aantal_minuten" name="aantal_minuten" required>


            </div>
            <div class="form-group">
                <label for="reden_student">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="reden_student" name="reden_student"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="button" >Update</button>
        </form>
    </main>

</body>

</html>
<?php
include 'database.php';
$student_nummer=$_GET['update_student'];
if(isset($_POST['button'])){
    $naam_student=$_POST['naam_student'];
    $klas=$_POST['klas'];
    $aantal_minuten=$_POST['aantal_minuten'];
    $reden_student=$_POST['reden_student'];



    $sql="UPDATE `studenten` set student_nummer='" . $student_nummer . "', naam_student='" . $naam_student . "', klas='" . $klas . "', aantal_minuten='" . $aantal_minuten . "', reden_student='" . $reden_student . "' where student_nummer='" . $student_nummer."'";
     var_dump($sql);
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:crud challenge.php');
    }
    else{
        die(mysqli_error($connect));
    }
}
?>