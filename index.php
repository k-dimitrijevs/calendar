<?php

use Spatie\CalendarLinks\Link;

require_once 'vendor/autoload.php';

if (isset($_POST['submit']))
{
    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create($_POST['title'], $from, $to)
        ->description($_POST['desc']);

    echo "<a href='" . $link->google() . "' target='_blank'>CLICK HERE</a>";
}

?>

<form method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="from">Date From:</label><br>
    <input type="text" id="from" name="from"><br>

    <label for="to">Date To:</label><br>
    <input type="text" id="to" name="to"><br>

    <label for="desc">Description:</label><br>
    <input type="text" id="desc" name="desc"><br><br>


    <input type="submit" name="submit" value="Submit">
</form>
