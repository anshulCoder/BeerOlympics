<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)file:///C:/Users/user1/Desktop/Emails/welcome-email.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Bus Registered</title>
</head>

<body>
    <p>Dear <?php echo trim($mailData['busName']);?>,</p>
    <p>You have booked <?php echo $mailData['busSeats'];?> of seats on the Doolally Wagon for the Doolally Beer Olympics 2017.<br><br>

        Passenger Details:<br>
        Name: <?php echo trim($mailData['busName']);?><br>
        Number of seats: <?php echo trim($mailData['busSeats']);?><br><br>
        Date: Saturday, May 20, 2017<br>
        Departure time & Place: 6.30 am, Doolally Taproom, Bandra<br>
        Arrival time & Place: 11 am, <a href="https://goo.gl/maps/xwHcAcJm9KN2" target="_blank">1st Brewhouse, Corinthians, Pune</a><br><br>
        The Doolally Beer Olympics starts at 11 am and gets over by 6 pm. The return journey on the Doolally Wagon will be scheduled soon after. The return journey details are as follows.<br><br>

        Date: Saturday, May 20 (same day)<br>
        Departure time & Place: 8 pm, 1st Brewhouse, Corinthians, Pune<br>
        Arrival time & Place: 12 midnight, Doolally Taproom, Bandra<br><br>

        I will be your point of contact if you have any queries regarding the Doolally Wagon.<br><br>

        Thanks,<br>
        Belinda, Doolally<br>
        Ph: 9930415379
    </p>

</body>
</html>