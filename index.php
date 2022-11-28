<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n1'];
    for ($a = 1; $a <= $n; $a++) {
        for ($b = 1; $b <= $a; $b++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>
<form method="post">
    <label>number:</label><br/>
    <input type="number" name="n1"/>
    <input type="submit" name="submit" value="run"/>
</form>