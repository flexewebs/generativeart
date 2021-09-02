<?php include("functions.php");?>
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
    $colors = array("#C90C0C", "#171504", "#FFCE1F"); // Red, black, yellow
    //$colors = array("#384085", "#04A7D0", "#A6D2C8", "#F8EDE0", "#FEF6E3", "#FFCBBF"); // Mixed pallette
    //$colors = array("#405CD6", "#4D81DA", "#5BA8E1", "#65C3E5", "#6ACDEB"); // All blue
    //$colors = array("#0C0727", "#F7BB13", "#EE5698", "#7EC064", "#D2ACDC", "#FBA305", "#E14699", "#36A86C", "#DE5111", "#CF297B", "#E85A23", "#C0221A", "#002970", "#E89915", "#FE5FB0"); // Van Gogh Starry Night colour picks

    // Number of slots
    $slots = 100; 
    $slotsInRow = 10;

    for($i=0; $i<$slots; $i++) {         
        ?>
        <div class="slot" style="background: <?php echo $colors[rand(0,count($colors))];?>">
            <?php echo makeBlob($colors[rand(0,count($colors))]);?>
        </div>
        <?php
    } 
    ?>
    </div>
</body>

</html>