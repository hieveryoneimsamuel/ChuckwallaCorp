<body>    
    <form method='GET'> 
        <p id="invalid"><strong>Invalid input!</strong></p>
        
        <p>Insert number of rows/cols here (minimum: 1, maximum: 26): </p>
        <input type="number" class="val" name="val1">
        

        <p>Insert number of colors here (minimum: 1):</p>
        <input type="number" class="val" name="val2">
        
        <br>
        <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    <?php


    if(isset($_GET["val1"]) && isset($_GET["val2"])){
        echo "<p>Are you sure you're entering input within the specified ranges?</p>";
        echo "<br>";
        
    }

    if(isset($_GET['val1']) && !isset($_GET['val2'])){
        echo "<p>Looks like num of colors isn't set. Please try again.</p>";
    }


    if(!isset($_GET['val1']) && isset($_GET["val2"])){
        echo "<p>Looks like number of rows/columns isn't set. Please try agian.</p>";
    } 
    ?>
</body>
