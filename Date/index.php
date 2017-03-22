<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />

</head>
<body>

<h3>
<?php
echo 'Aujourd\'hui, nous sommes le: '.date(d.'/'.m.'/'.Y);
echo '<hr>';
echo 'Aujourd\'hui, nous sommes le: '.date(d.'-'.m.'-'.y);
echo '<hr>';
setlocale(LC_TIME, 'fr_FR.UTF8');
echo 'Aujourd\'hui, nous sommes le: '.strftime("%A %e %B %Y");
echo '<hr>';
echo 'Timestamp du jour: '.strtotime("now");
echo '<hr>';
echo 'Timestamp du mardi 2 août 2016 à 15h00: '.strtotime("02 August 2016 15 hours");
echo '<hr>';
$d1 = new DateTime("16-05-2016"); 
$d2 = new DateTime(); 
$interval = $d1 -> diff($d2) -> days;
echo 'Depuis le 16 mai 2016, il s\'est passé: '.$interval.' jours';
echo '<hr>';
$nbr = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo 'En février 2016, il y avait: '.$nbr.' jours';
echo '<hr>';
$date = new DateTime();
$newDate = $date -> add(new DateInterval('P20D')) -> format('d-m-Y');
echo 'Dans 20 jours, nous serons le: '.$newDate;
echo '<hr>';
$date = new DateTime();
$oldDate = $date -> sub(new DateInterval('P22D')) -> format('d-m-Y');
echo 'Il y a 22 jours, nous étions le: '.$oldDate;
echo '<hr>';

?>
</h3>



</body>
</html>