<body>
    <h1>ChuckwallaCorp Colors page</h1>

    
    <form method='GET'> 
        <p>Ask for num rows/cols here:</p>
        <input type="number" class="val" name="val1">
        

        <p>Ask for num of colors here:</p>
        <input type="number" class="val" name="val2">
        <br>
        <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    <?php
    if(isset($_GET["val1"])){
        if($_GET["val1"] <1 || $_GET["val1"] > 26){
            echo "<script> window.confirm('num of rows/cols must be between 1 and 26') </script>";
            $_GET["val1"] = null;
           
        }
        echo "<p>Number of rows/cols: </p>" . $_GET["val1"]. "<br>";

        
    }

    if(isset($_GET["val2"])){
        if($_GET["val2"] <1 || $_GET["val2"] > 10){
            echo "<script> window.confirm('num of colors must be between 1 and 10') </script>";
           $_GET["val2"] = null;
        }
        echo "<p>Number of colors: </p>" . $_GET["val2"] . "<br>";

        

        echo "<table class='colors' >
                <caption>Colors:</caption>";

        for($x=0; $x < $_GET['val2']; $x++){
            echo "<tr>
                <td>
                    <select name='colorchoice'>
                        <option value='red'>Red</option>
                        <option value='orange'>Orange</option>
                        <option value='yellow'>Yellow</option>
                        <option value='green'>Green</option>
                        <option value='blue'>Blue</option>
                        <option value='purple'>Purple</option>
                        <option value='grey'>Grey</option>
                        <option value='brown'>Brown</option>
                        <option value='black'>Black</option>
                        <option value='teal'>Teal</option>
                    </select>
                </td>
                <td>COL2</td>";
                
        }
        echo "
            </table";
    }
    ?>
    
    <br>
    

</body>
