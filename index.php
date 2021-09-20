<?php

use Spatie\CalendarLinks\Link;

require_once 'vendor/autoload.php';

if (isset($_POST['submit']))
{
    $calendar = $_POST['calendars'];
    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create($_POST['title'], $from, $to)
        ->description($_POST['desc']);

    echo "<a href='" . $link->$calendar() . "' target='_blank'>CLICK HERE</a>";
}

?>

<form method="post">
    <br><label for="calendars">Choose a calendar:</label><br>
    <select id="calendars" name="calendars">
        <option value="google">Google</option>
        <option value="yahoo">Yahoo</option>
        <option value="webOutlook">OutLook</option>
        <option value="ics">ICS</option>
    </select><br><br>

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
