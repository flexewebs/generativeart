<?php include("functions.php");?>
<html>

<head>
    <title>Funky squares</title>
    <meta http-equiv="refresh" content="10"/>
    <style>
        * { margin: 0; padding: 0; }
        @keyframes fadeIn {
            0% {opacity:0.7;}
            50% {opacity:1;}
            100% {opacity:0.7;}
        }
        .artCanvas { float: left; width: 100vw; height: 100vh; background: #16161d; animation: fadeIn 10s; -webkit-animation: fadeIn 10s; -moz-animation: fadeIn 10s; -o-animation: fadeIn 10s; -ms-animation: fadeIn 10s; }
        .slot { float: left; width: 10vh; height: 10vh; margin: 0; padding: 0; }         
        .circle { border-radius: 50%; }
    </style>
</head>

<body>
    <div class="artCanvas">
        <a href="index.php?scheme=<?php echo $_GET['scheme'];?>&circles=<?php echo $_GET['circles'];?>">
            <?php 
                // Colour schemes to paint with
                $colourSchemes = array (0 => array("#C90C0C", "#171504"), // Red, black 
                                        1 => array("#C90C0C", "#171504", "#FFCE1F"), // Red, black, yellow
                                        2 => array("#C90C0C", "#171504", "#FFCE1F", "#FFF"), // Red, black, yellow, white
                                        3 => array("#384085", "#04A7D0", "#A6D2C8", "#F8EDE0", "#FEF6E3", "#FFCBBF"), // Mixed pallette                            
                                        4 => array("#405CD6", "#4D81DA", "#5BA8E1", "#65C3E5", "#6ACDEB"), // All blue
                                        5 => array("#0C0727", "#F7BB13", "#EE5698", "#7EC064", "#D2ACDC", "#FBA305", "#E14699", "#36A86C", "#DE5111", "#CF297B", "#E85A23", "#C0221A", "#002970", "#E89915", "#FE5FB0"),
                                        6 => array("#1D1E3B", "#DB9471", "#42BFD3", "#2256A1", "#207DC7"),    
                                        7 => array("#25251C", "#E1BE57", "#256FB0", "#50B2A3", "#CC3A0A"),                                    
                                    );

                // Colour schemes to use 
                if(isset($_GET['scheme'])) { 
                    if($_GET['scheme']<0) { 
                        $scheme = 0;    
                    }
                    $scheme = $_GET['scheme'];
                }
                else 
                { 
                    $scheme = 0;
                }    

                // Number of slots
                $slots = 190; 

                // Total number of colours 
                $totalColours = count($colourSchemes[$scheme])-1;

                // Generate the art canvas slots 
                for($i=1; $i<$slots+1; $i++) {   
                            
                    // Set &circles=1 in the URL to enable squares and circles 
                    if(isset($_GET['circles']) && $_GET['circles']==1) {
                        // Decide to create slot as square or a circle
                        if($i%2==0) { $circle = "circle"; }
                        else { $circle = ""; }
                    }

                    // Assign slot and blob colour
                    $squareColour = $colourSchemes[$scheme][rand(0,$totalColours)];
                    $blobColour = $colourSchemes[$scheme][rand(0,$totalColours)];

                    // Make sure blob is of a different colour from square
                    if($squareColour==$blobColour) {            
                        while($squareColour==$blobColour) {
                            $blobColour = $colourSchemes[$scheme][rand(0,$totalColours)];                
                        }
                    }
                    ?>
                    <div class="slot <?php echo $circle;?>" style="background: <?php echo $squareColour;?>">
                        <?php echo makeBlob($blobColour);?>
                    </div>
                    <?php
                } 
            ?>
        </a>
    </div>
</body>

</html>