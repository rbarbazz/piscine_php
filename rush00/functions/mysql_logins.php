<?php
$logindb = "install";
$passworddb = "install";

function check_query($db, $insert)
{
    if (!mysqli_query($db, $insert))
        die("Error description: " . mysqli_error($db));
}
?>