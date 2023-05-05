<body>
    

    <h1>ChuckwallaCorp Colors page</h1>

    
    <form method='GET'> 
        <p>To generate a color table, please enter the following:<br></p>
        <p>Number of rows/cols:  <input type="number" class="val" name="val1" min=1 max=26> </p
        <br>
        <p>Number of colors: <input type="number" class="val" name="val2">
        <?php echo "<p>Size of colors database: " . $colorcount . " (Please enter a integer less than or equal to it)</p>"; ?>
        </p>
        <br>
        <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    
    <?php
    if(isset($_GET["val1"])){
        if($_GET["val1"] <1 || $_GET["val1"] > 26){
            $_GET["val1"] = null;
        
        }
        echo "<p>Number of rows/cols: </p>" . $_GET["val1"]. "<br>";

        
    }

    if(isset($_GET["val2"])){
        if($_GET["val2"] <1 || $_GET["val2"] > 10){
           $_GET["val2"] = null;
        }
        echo "<p>Number of colors: </p>" . $_GET["val2"] . "<br>";
    }

    ?>

    
    

</body>
