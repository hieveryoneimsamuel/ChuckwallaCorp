<body>

    <form method='GET'> 
        <p>Generate a Color Table by Entering the Following:<br></p>
        <p>Enter Number of Rows/Columns:</p>
        <input type="number" placeholder="# 1-26" class="val" name="val1" min=1 max=26 required>
        <br>
        <p>Enter Number of Colors:</p>
        <input type="number" placeholder="# 1-X" class="val" name="val2" min=1 required>
        <?php echo "<p>Size of Colors Database: " . $colorcount . " (Enter an Integer Less Than or Equal to it)</p>"; ?>
        </p>
        <br>
        <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    
    <?php
    if(isset($_GET["val1"])){
        if($_GET["val1"] <1 || $_GET["val1"] > 26){
            $_GET["val1"] = null;
        
        }
        echo "<p>Number of Rows/Columns: </p>" . $_GET["val1"]. "<br>";

        
    }

    if(isset($_GET["val2"])){
        if($_GET["val2"] <1 || $_GET["val2"] > 10){
           $_GET["val2"] = null;
        }
        echo "<p>Number of Colors: </p>" . $_GET["val2"] . "<br>";
    }

    ?>

    
    

</body>


