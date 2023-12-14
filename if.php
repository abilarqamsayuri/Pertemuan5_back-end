<form name="f1" method="POST" action="if.php">
    <!-- Nama : <input type="text" name="nama" /><br/><br/> -->
    Nilai &nbsp; : <input type="text" name="nilai" /><br/><br/>
    <input type="submit" value="Submit" />
</form> 

<?php 
    $nilai = $_POST['nilai'];
    if ($nilai <= 60){
        echo 'nilai cukup';
    }
    elseif ($nilai <= 75){
        echo 'nilai baik';
    }
    elseif ($nilai >= 85){
        echo 'nilai sangat baik';
    }
    else {
        echo 'nilai kurang';
    }
?>

<br><br>
<!-- <a href='form.php'>Back</a> -->