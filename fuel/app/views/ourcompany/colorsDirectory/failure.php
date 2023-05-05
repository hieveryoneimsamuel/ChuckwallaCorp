<body>    
    <form method='GET'> 
        <p id="invalid"><strong>Invalid Input!</strong></p>
        
        <<p>Enter Number of Rows/Columns:</p>
        <input type="number" placeholder="# 1-26" class="val" name="val1" min=1 max=26 required>
        

        <p>Enter Number of Colors:</p>
        
        <input type="number" placeholder="# 1-<?php echo "".$colorcount."" ?>" class="val" name="val2" min=1 required>
        
        <br>
        <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    <?php


    if(isset($_GET["val1"]) && isset($_GET["val2"])){
        echo "<p>Are you sure you're entering input within the specified ranges?</p>";
        echo "<br>";
        
    }

    if(isset($_GET['val1']) && !isset($_GET['val2'])){
        echo "<p>Looks like the number of colors isn't set. Please try again.</p>";
    }


    if(!isset($_GET['val1']) && isset($_GET["val2"])){
        echo "<p>Looks like number of rows/columns isn't set. Please try agian.</p>";
    } 
    ?>
</body>
