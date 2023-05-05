<h3>Color Database Application</h3>
<p>The following colors are already in your 'customcolors' database:</p>
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
    <input type='submit' value='Delete Selected Color(s)' name='delete'>
</form>

<form method="POST">
    <span>Color Name: </span>
    <input type="text" name="color-text" required></input>
    <span>Color Hex Value: </span>
    <input type="text" name="color-hex" required></input>
    <input type="submit" value="Add New Color" name='add'></input>
</form>


<br><br>
<form method="POST">
    <button type="submit" name="finishedbutton" id="finished-button">Next Step</button>
</form>