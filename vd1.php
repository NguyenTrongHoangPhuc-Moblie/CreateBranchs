<?php 
    $n = 10;
?>
<html>
    <body>
        <h1>
            Tinh cong cac so tu 1 den <?php echo $n ?>
        </h1>
        <?php 
            $tong = 0;
            for ($i = 0; $i < $n; $i++) {
                $tong = $tong + $i;
            }
        ?>
        <h2>Tong cac so hang tu 1 den <?php echo $n ?> = <?php echo $tong ?> </h2>
    </body>
</html>