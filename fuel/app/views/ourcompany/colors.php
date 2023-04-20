<body>
    <h1>ChuckwallaCorp Colors page</h1>

    
    <form method='GET'> 
        <p>Enter number of Rows/Columns:</p>
        <input type="number" class="val" name="val1" min=1 max=26 required>
        

        <p>Enter Number of Colors:</p>
        <input type="number" class="val" name="val2" min=1 max=10 required>
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

        $namesColors = array("RED", "ORANGE", "YELLOW", "GREEN", "BLUE", "PURPLE", "GREY", "BROWN", "BLACK", "TEAL");
        for($x=0; $x < $_GET['val2']; $x++){
            echo "<tr>
                <td class='col-one'>
                    <select id='row$namesColors[$x]' class='mySelectElements'>";
                        for($i=0; $i <10; $i++){
                            if($i==$x){
                                echo "<option value='$namesColors[$i]' selected> $namesColors[$i] </option>";
                                continue;
                            }
                            echo "<option value='$namesColors[$i]'> $namesColors[$i] </option>";
                            
                        }

                
                    echo "</select>
                </td>
                <td class='col-two'>COL2</td>";
                
        }
        echo "
            </table";
        
        echo "<br><br>";


        $alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        echo "<table class='square-table'>
            <caption>Square table below:</caption>
            <th>";
            for($i=0; $i< $_GET['val1']; $i++){
                echo "<td>$alphabet[$i]</td>";
            }
            echo "</th>";

        for($x=0; $x < $_GET['val1']; $x++){
            echo "<tr>
                    <td>$x</td>";
                for($y=0; $y < $_GET['val1']; $y++){
                    echo "<td>$x,$x </td>";
                }
                
            echo "</tr>";
        }
        echo "</table";
    }
    ?>
    
    <br>
    
    
    <div id="printview">
    <?php
    if(isset($_GET["val1"])&&isset($_GET["val2"])){
        echo "<button onclick=\"generatePrintview()\">Print View</button>";
    }
    ?>
    </div>
    

</body>
