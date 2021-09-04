<?php 
// Creates an SVG blob
function makeBlob($color, $width=200, $height=200) { 
    $blobPosition = array(70, 90, 110);
    $totalPositions = count($blobPosition)-1;
    $startingPosition = rand(0,$totalPositions);    
    ?>    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 <?php echo $width;?> <?php echo $height;?>">
    <path 
        fill="<?php echo $color;?>" 
        d="M57.8,-40C72.4,-27.7,80,-3.9,75.6,17.9C71.1,39.6,54.5,59.2,35.5,65C16.4,70.9,-5.1,63,-20.2,51.9C-35.4,40.8,-44.3,26.5,-47.2,11.4C-50.2,-3.7,-47.3,-19.5,-38.4,-30.5C-29.6,-41.4,-14.8,-47.4,3.4,-50.1C21.6,-52.9,43.2,-52.2,57.8,-40Z" 
        transform="translate(<?php echo rand($blobPosition[$startingPosition], $blobPosition[$startingPosition]);?> <?php echo rand($blobPosition[$startingPosition], $blobPosition[$startingPosition]);?>)" />
    </svg>
    <?php
} 
?>