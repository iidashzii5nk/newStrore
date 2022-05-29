
    <?php
    try {
        $con = new PDO('mysql:host=localhost; dbname=registro', 'root', '');
        
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Conectado';
    } catch (Exception $e) {
        die('Error' . $e->getMessage());
    }
    ?>

