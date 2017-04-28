<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)file:///C:/Users/user1/Desktop/Emails/welcome-email.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Team Registered</title>
</head>

<body>
    <p>Dear <?php echo trim($mailData['capName']);?>,</p>
    <p>Woohoo! We have registered your team "<?php echo trim($mailData['teamName']);?>" to participate in the Doolally Beer Olympics 2017!<br><br>
        Your team comprises of <?php echo trim($mailData['capName']);?>, <?php echo implode(', ',$mailData['athleteNames']);?><br><br>

        <?php
            if($mailData['busCount'] > 0)
            {
                ?>
        You have also booked <?php echo $mailData['busCount'];?> of seats on the Doolally Wagon. You will receive an email from us with details on pick up points, departure time and point of contact.<br><br>
                <?php
            }
        ?>

        The address of the venue (with a Google Maps link) and the other basic details of the event are as below:<br><br>
        Venue: <a href="https://goo.gl/maps/xwHcAcJm9KN2" target="_blank">1st Brewhouse, Corinthians Resort and Club, NIBM Annexe, Mohmmadwadi, Pune</a><br>
        Date/Time: <a href="<?php echo $calendar_url;?>" target="_blank">Saturday, 20th May 2017/ 11 am - 7 pm</a><br><br>
        Do reach the event venue with your team well before 11 am to register yourselves and collect your game kits!<br><br>

        Also it goes without saying that all athletes must provide proper ID confirming that they are of legal drinking age in order to participate.<br><br>

        Please carry this acknowledgement or show it to us on your phone to collect your teams kit at the venue.<br><br>

        The games are divided into two parts - Eliminations and Finals. The elimination rounds will run from 11 am to 3 pm and the finals will run from 4 pm to 6 pm.<br><br>

        (Pro Tip - Please make sure that your team completes the eliminations of all the games well before the cut-off time of 3 pm...A breather before the finals helps! A lot!!).<br><br>

        In case you have any questions/queries please don't hesitate to write to me at this mail address or you can reach me at 9920087855.<br><br>

        See you at the games!<br><br>

        Warm Regards!<br>
        Priyanka, Doolally
    </p>

</body>
</html>