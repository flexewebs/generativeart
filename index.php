<?php include("functions.php");?>
<html>

<head>
    <title>Funky squares</title>
    <style>
        * { margin: 0; padding: 0; }
        .artCanvas { float: left; width: 100vw; height: 100vh; }
        .slot { float: left; width: 10vh; height: 10vh; margin: 0; padding: 0; }         
        .circle { border-radius: 50%; }
    </style>
</head>

<body>
    <div class="artCanvas">
    <?php 
    
    // Colours to use 
    //$colors = array("#C90C0C", "#171504"); // Red, black
    //$colors = array("#C90C0C", "#171504", "#FFCE1F"); // Red, black, yellow
    //$colors = array("#C90C0C", "#171504", "#FFCE1F", "#FFF"); // Red, black, yellow, white
    //$colors = array("#384085", "#04A7D0", "#A6D2C8", "#F8EDE0", "#FEF6E3", "#FFCBBF"); // Mixed pallette
    //$colors = array("#405CD6", "#4D81DA", "#5BA8E1", "#65C3E5", "#6ACDEB"); // All blue
    $colors = array("#0C0727", "#F7BB13", "#EE5698", "#7EC064", "#D2ACDC", "#FBA305", "#E14699", "#36A86C", "#DE5111", "#CF297B", "#E85A23", "#C0221A", "#002970", "#E89915", "#FE5FB0"); // Van Gogh Starry Night colour picks

    // Number of slots
    $slots = 190; 
    $slotsInRow = 10;
    $totalColours = count($colors)-1;

    

    for($i=1; $i<$slots+1; $i++) {   
                
        if($i%2==0) {
            $circle = "circle";
        }
        else { 
            $circle = "";
        }

        $squareColour = $colors[rand(0,$totalColours)];
        $blobColour = $colors[rand(0,$totalColours)];

        // Make blob a different colour from square
        if($squareColour==$blobColour) {            
            while($squareColour==$blobColour) {
                $blobColour = $colors[rand(0,$totalColours)];                
            }
        }
        ?>
        <div class="slot <?php echo $circle;?>" style="background: <?php echo $squareColour;?>">
            <?php echo makeBlob($blobColour);?>
        </div>
        <?php
    } 
    ?>
    </div>
</body>

</html>