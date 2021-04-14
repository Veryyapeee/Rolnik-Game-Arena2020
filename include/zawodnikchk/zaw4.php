<?php
        $team = $_SESSION['druzyna'];
        $tabela = $_SESSION['tabela'];
        require "include/connect.php";
        $sql = "SELECT * FROM $tabela WHERE nr_zawodnika=4 AND team_name='$team'";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "DUPA";
        }else{
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            $rows = mysqli_stmt_num_rows($stmt);
            if($rows==1){
                echo "<div class='zawbtn'><button id='btn_jest'>Edytuj dane</button></div>";
            }else{
                echo "<div class='zawbtn'><button id='btn_nie'>Dodaj zawodnika</button></div>";
                }
        }

?>