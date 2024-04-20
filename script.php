<?php
if ($_POST["key"] && $_POST["steamid"] && $_POST["notetitle"] && $_POST["message"]) {
    $key = urldecode($_POST["key"]);
    $steamid = urldecode($_POST["steamid"]);
    $title = urldecode($_POST["notetitle"]);
    $message = urldecode($_POST["message"]);

    if ($key == "Th4t5my53cr3tC0d3!") {
        // Here you can do anything now, since the code is correct and everything else is provided, too.
        // For testing, let's just echo a success message
        echo "Alarm received from Steam ID: $steamid. Title: $title. Message: $message";
    } else {
        echo "Invalid key";
    }
} else {
    echo "Invalid request";
}
?>
