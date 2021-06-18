<?php
    declare(strict_types = 1);
    /*  Afficher la date du jour + 20 jours.
    */
    setlocale( LC_TIME, 'fr-FR');
    $currentDate= new DateTime();
    // https://www.php.net/manual/en/dateinterval.format.php
    $futurDay1= date_add( $currentDate, date_interval_create_from_date_string('20 days')); // days, weeks
    var_dump($futurDay1);
    $timeStamp= date_timestamp_get($futurDay1);
    $futurDayFr1= strftime('%A %d %B %G', $timeStamp);
    // $date->add(new DateInterval('PT10H30S'));
    //    'PT10H30S' = Post Time 10 Hours 10 Seconds
    // $date->add(new DateInterval('P7Y5M4DT4H3M2S'));
    //    'P7Y5M4DT4H3M2S' = Post 7 Years 5 Months 4 Days Time 4 Hours 3 Minutes 2 Seconds
    $futurDay2= new DateTime();
    $futurDay2->add(new DateInterval('P20D'));
    $timeStamp2= date_timestamp_get($futurDay2);
    $futurDayFr2= strftime('%A %d %B %G', $timeStamp2);
    // methode 3
    $futurDay3= new DateTime();
    $timeStamp3= strtotime('+20 day', date_timestamp_get($futurDay3));
    $futurDayFr3= strftime('%A %d %B %G', $timeStamp3);
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 9.7 Date</title>
    </head>
    <body >
        <p>la date du jour + 20 jours {methode 1: date_timestamp_get()}: <?= $futurDayFr1 ?></p>
        <p>la date du jour + 20 jours {methode 2:} add: <?= $futurDayFr2 ?></p>
        <p>la date du jour + 20 jours {methode 3: strtotime()}: <?= $futurDayFr3 ?></p>
    </body>
</html>