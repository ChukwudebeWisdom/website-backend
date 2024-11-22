<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
    <tr>
        <th>STATES</th>
        <th>CAPITAL</th>
    </tr>

    
    <?php
   
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
function printStatesAndCapital() {
    $statesAndCapitals = 
    array(
        'Abia'=>'Umuahia',
        'Adamawa'=>'Yola',
        'Akwa-ibom'=>'Uyo',
        'Anambara'=>'Awka',
        'Bauchi'=>'Bauchi',
        'Bayelsa'=>'Yenegoa',
        'Benue'=>'Makurdi',
        'Borno'=>'Maiduguri',
        'Cross-River'=>'Calabar',
        'Delta'=>'Asaba',
        'Ebonyi'=>'Abakaliki',
        'Edo'=>'Benin',
        'Ekiti'=>'Ado-Ekiti',
        'Gombe'=>'Gombe',
        'Imo'=>'Owerri',
        'Jigawa'=>'Dutse',
        'Kaduna'=>'Kaduna',
        'Kastina'=>'Kastina',
        'Kebbi'=>'Birnin Kebbi',
        'Kogi'=>'Lokoja',
        'Kwara'=>'Ilorin',
        'Lagos'=>'Ikeja',
        'Nasarawa'=>'Lafia',
        'Niger'=>'Minna',
        'Ogun'=>'Abeokuta',
        'Ondo'=>'Akure',
        'Osun'=>'Osogbo',
        'Oyo'=>'Ibadan',
        'Plateau'=>'Jos',
        'Rivers'=>'Port Harcourt',
        'Sokoto'=>'Sokoto',
        'Taraba'=>'Jalingo',
        'Yobe'=>'Damaturu',
        'Yobe'=>'Damaturu',
        'Zamfara'=>'Gusau',
        'Federal Capital Territory'=>'Abuja',
    );

    foreach($statesAndCapitals as $key => $value){
        echo "
        <tr>
            <td>$key</td>
            <td>$value</td>
    </tr>
    ";
    };
    if(count($statesAndCapitals) > 0){
    }else {
        echo "
            <tr>
                <td>no states</td>
                <td>no states</td>
    </tr>
    ";
    }
}
?>