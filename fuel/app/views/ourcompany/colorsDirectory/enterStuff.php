<body>
    

    <h1>ChuckwallaCorp Colors page</h1>

    
    <form method='GET'> 
        <p>FRESH START:<br></p>
        <p>Ask for num rows/cols here:</p>
        <input type="number" class="val" name="val1">
        <br>
        <p>Ask for num of colors here:</p>
        <input type="number" class="val" name="val2">
        
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


