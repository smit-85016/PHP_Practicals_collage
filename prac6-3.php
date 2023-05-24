<h1>216090307039</h1> 
<hr>
<?php
date_default_timezone_set('UTC');

$currentDateTime = new DateTime();

$timeZones = array(
    'America/New_York',
    'Europe/London',
    'Asia/Kolkata',
    'Australia/Sydney'
);

foreach ($timeZones as $timeZone) {

    $currentDateTime->setTimezone(new DateTimeZone($timeZone));

    $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');

    echo "Time zone: " . $timeZone . "<br>";
    echo "Date and time: " . $formattedDateTime . "<br><br>";
}
?>