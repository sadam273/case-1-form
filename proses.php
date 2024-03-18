<?php
    $fixedCost = $_POST['fc'];
    $variableCost = $_POST['vc'];
    $salesVolume = $_POST['sv'];

    $bep = $fixedCost/1-$variableCost/$salesVolume;
    echo "BEP adalah " . $bep;
?>