<form>
    Name: <input type="text" name="person" />
    <input type="submit" name="submit_btn"/>
</form>

<?php
    if (isset($_GET['submit_btn'])){
        $person = "Hello, " . $_GET['person'] . "!";
        echo "$person";
    }