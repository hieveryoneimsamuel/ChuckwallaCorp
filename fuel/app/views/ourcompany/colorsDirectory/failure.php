<body>
    

    <h1>ChuckwallaCorp Colors page</h1>

    
    <form method='GET'> 
        <p><em>Whoops! Bad input that time - Let's try this again shall we...</em><br></p>
        <p style="text-decoration: line-through">Ask for num rows/cols here: </p>
        <p style='color: red; text-decoration: underline;'><b><em>Ok, no more playing around, just enter a number of rows/columns between 1-26 here:</em></b></p>
        <input type="number" class="val" name="val1">
        

        <p style="text-decoration: line-through">Ask for num of colors here:</p>
        <p style='color: red; text-decoration: underline;'><b><em>Ok, no more playing around, just enter a number of colors between 1-10 here:</em></b></p>
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


