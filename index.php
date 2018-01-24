<?php 
    @$arus = $_GET['arus'];
    @$hambatan = $_GET['hambatan'];
    @$tegangan = $arus * $hambatan;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>Menghitung Tegangan</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Nilai Arus</td>
                    <td>=</td>
                    <td><input type="text" name="arus" value="<?php echo $arus; ?>"/>ampere<br/></td>
                </tr>
                <tr>
                    <td>Nilai Hambatan</td>
                    <td>=</td>
                    <td><input type="text" name="hambatan" value="<?php echo $hambatan; ?>"/>ohm<br/></td>
                </tr>              
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Nilai Tegangan = ".$tegangan." volt";
            ?>
        </form>
    </body>
</hmtl>