<?php

$test_form = false;

if(isset($_GET['nom'],$_GET['prenom'],$_GET['email_'],$_GET['phone_number'],$_GET['addresse'],$_GET['postal_code']) ){
    // echo 'Verifier le champs';
    if(!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['email_']) && !empty($_GET['phone_number']) && !empty($_GET['addresse']) && !empty($_GET['postal_code']) ){ 
        $test_form = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($test_form==true){
    ?>
    <table>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Telephone</td>
            <td>Addresse</td>
            <td>Code postal</td>
        </tr>
        <tr>
            <td><?php echo $_GET['nom'] ?></td>
            <td><?php echo $_GET['prenom'] ?></td>
            <td><?php echo $_GET['email_'] ?></td>
            <td><?php echo $_GET['phone_number'] ?></td>
            <td><?php echo $_GET['addresse'] ?></td>
            <td><?php echo $_GET['postal_code'] ?></td>
        </tr>
    </table>
    <?php
        }
    ?>
</body>
</html>