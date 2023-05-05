<body>
    <form method='GET'> 
    <p id="success"><strong>SUCCESS!</strong></p>
    
    <p>Enter Number of Rows/Columns:</p>
    <input type="number" placeholder="# 1-26" class="val" name="val1" min=1 max=26 required>
    <br>
    <p>Enter Number of Colors:</p>
    <input type="number" placeholder="# 1-<?php echo "".$colorcount."" ?>" class="val" name="val2" min=1 required>
        
    <br><br>
    <button type="submit" name="numColsButton" id="btn-numColors"> Enter </button>
    </form> 

    

    <?php
    echo "<p>Number of Rows/Columns: </p>" . $_GET["val1"]. "<br>";

    echo "<p>Number of Colors: </p>" . $_GET["val2"] . "<br><br>";
    ?>


    <form method = "POST">  
        <input type="submit" value="Click to Add/Delete Colors" name = 'revisitdb'> </input>
    </form>

    <?php
    
    echo "<table class='colors' >
            <caption>Colors:</caption>";

    //$namesColors = array("RED", "ORANGE", "YELLOW", "GREEN", "BLUE", "PURPLE", "GREY", "BROWN", "BLACK", "TEAL");
    $namesColors = array();
    $hexValsColors = array();
    foreach($colorchoices as $somecolor){
        array_push($namesColors, $somecolor['text']);
        array_push($hexValsColors, $somecolor['hv']);
    }

    for($x=0; $x < $_GET['val2']; $x++){
        echo "<tr>

            <td class='col-one'>
            <input type='radio' name='current_color' value='$namesColors[$x]' ".($x==0?"checked":"").">
                <select onSelect={()=>{alert('vv')}} id='row$namesColors[$x]' class='mySelectElements'>";
                    $currentColor;
                    for($i=0; $i < $colorcount; $i++){
                        if($i==$x){
                            echo "<option value='$hexValsColors[$i]' selected> $namesColors[$i] </option>";
                            $currentColor = $namesColors[$i];
                            continue;
                        }
                        echo "<option value='$hexValsColors[$i]'> $namesColors[$i] </option>";
                        
                    }
                    

            
                echo "</select>
            </td>
            <td class='col-two'>

                
            </td>";
            echo "</tr>";
            
    }
    echo "
        </table>";
    
    echo "<br><br>";


    $alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    echo "<table class='square-table'>
        <br><br>
        <th>";
        for($i=0; $i< $_GET['val1']; $i++){
            echo "<td>$alphabet[$i]</td>";
        }
        echo "</th>";

    for($x=0; $x < $_GET['val2']; $x++){
        echo "<tr>
                <td>$x</td>";
            for($y=0; $y < $_GET['val1']; $y++){
                echo "<td id =$alphabet[$y]$x> </td>";
            }
            
        echo "</tr>";
    }
    echo "</table";
    
    ?>
    
    <br><br>
    

    <div id="printview">
    <?php
    if(isset($_GET["val1"])&&isset($_GET["val2"])){
        echo "<button onclick=\"generatePrintview()\">Print View</button>";
    }
    ?>
    </div>
</body>
