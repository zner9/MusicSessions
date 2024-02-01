<form action="" method="POST">
    <select name="bac">
        <option name="1">1</option>
        <option name="2">2</option>
        <option name="3">3</option>
        <option name="4">4</option>
        <option name="5">5</option>
        <option name="6">6</option>
    </select>
    <input type="submit" />
</form>

<?php
    if(isset($_POST['bac']))
        echo $_POST['bac'];
?>