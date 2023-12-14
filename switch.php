<form name="f1" method="POST" action="switch.php">
    Nilai &nbsp; : <input type="text" name="nilai" /><br/><br/>
    <input type="submit" value="Submit" />
</form> 

<?php 
    $nilai = $_POST['nilai'];
    switch ($nilai) {
        case 50;
            echo 'nilainya adalah 50';
            break;
        case 70;
            echo 'nilainya adalah 70';
            break;
        case 90;
            echo 'nilainya adalah 90';
            break;
        case 100;
            echo 'nilainya adalah 100';
            break;
        default;
            echo 'nilainya tidak ditemukan';
            break;
    }
?>