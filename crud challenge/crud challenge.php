<?php
include "database.php";
?>
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
    <main style="width: 900px; margin: 20px auto;">
                <h4>Overzicht studenten die te laat waren</h4>
        <table class="table">
            <thead>
            <tr>
                <th>Student nummer</th>
                <th>Naam student</th>
                <th>Klas</th>
                <th>Minuten te laat</th>
                <th>Reden te laat</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $sql="select * from `studenten`";
                    $result=mysqli_query($connect,$sql);
                    if ($result){
                    while($row=mysqli_fetch_assoc($result)){
                    $naam_student=$row['naam_student'];
                    $klas=$row['klas'];
                    $aantal_minuten=$row['aantal_minuten'];
                    $reden_student=$row['reden_student'];
                    $student_nummer=$row['student_nummer'];

                
                    echo '<tr>
                    <td>' . $student_nummer . '</td>
                    <td>' . $naam_student . '</td>
                    <td>' . $klas . '</td>
                    <td>' . $aantal_minuten . '</td>
                    <td>' . $reden_student . '</td>
                    <td>
                    
                        <button class="btn btn-danger"><a onclick="return ConfirmDelete()" href="verwijder.php?verwijder_student='.$student_nummer.'" style="color:white">Verwijder</a></button>
                        <button class="btn btn-primary"><a href="update.php?update_student='.$student_nummer.'" style="color:white">Update</a></button>
                    </td>
                    </tr>';
                    }
                }        
              

                ?>
                
            </tbody>
        </table>
        
        <br>
        <button class="btn btn-success"><a href="nieuw.php" style="color:white">Weer eentje te laat!</a></button> 
        
    </main>
</body>
</html>
 <script type="text/javascript">
      function ConfirmDelete(){
            return confirm("Wilt u deze student verwijderen?");
      }
  </script>