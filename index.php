<html>

<head>
    <title>Funky squares</title>
    <style>
        .artCanvas { float: left; width: 500px; height: 500px; }
        .slot { float: left; width: 50px; height: 50px; margin: 0; padding: 0; }         
    </style>
</head>

<body>
    <div class="artCanvas">
    <?php 
    
    // Colours to use 
    $colors = array("#0C0727", "#F7BB13", "#EE5698", "#7EC064", "#D2ACDC", "#FBA305", "#E14699", "#36A86C", "#DE5111", "#CF297B", "#E85A23", "#C0221A", "#002970", "#E89915", "#FE5FB0");

    // Number of slots
    $slots = 100; 
    $slotsInRow = 10;

    for($i=0; $i<$slots; $i++) {         
        ?>
        <div class="slot">
            <img src="blob/<?php echo rand(1, 13);?>.svg" style="fill: <?php echo $colors[rand(0,14)];?> !important; background: <?php echo $colors[rand(0,14)];?>;" />
        </div>
        <?php
    } 
    ?>
    </div>
</body>

</html>