<h3>Welcome to the Colors Page!</h3>
<p>This is the Color Database App</p>
<br><br>
<p>The following colors are already in the 'customcolors' database:</p>
<p>(Add or delete as you like)</p>
<br>

<form method="POST">
<?php
foreach($colorchoices as $somecolor){
    $text = $somecolor['text'];
    $hecks = $somecolor['hv'];
    $id = $somecolor['id'];
    echo "<input type='checkbox' value='$id' name='colorchoicecheck[]'>";
    echo "&nbsp;";
    echo "<label>" . $text . "&nbsp&nbsp&nbsp&nbsp(Hex value: " . $hecks . ")" . "</label><br>";
}
?>

    <br>
    <input type='submit' value='Delete selected color(s)' name='delete'>
</form>

<form method="POST">
    <span>Color name: </span>
    <input type="text" name="color-text" required></input>
    <span>Color hex value: </span>
    <input type="text" name="color-hex" required></input>
    <input type="submit" value="Add new color" name='add'></input>
</form>


<br><br>
<form method="POST">
    
    <button type="submit" name="finishedbutton" id="finished-button">Click for the next step</button>
</form>

