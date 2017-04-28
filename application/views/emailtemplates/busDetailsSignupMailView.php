<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)file:///C:/Users/user1/Desktop/Emails/welcome-email.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Bus Registered</title>
</head>

<body>
    <p>Bus Registration Details: </p>
    <table border="0" style="border-collapse:collapse;">
        <tbody>
            <tr>
                <td width="208">Bus Booker Name: </td>
                <td><?php echo $mailData['busName'];?></td>
            </tr>
            <tr>
                <td width="208">Bus Booker Email: </td>
                <td><?php echo $mailData['busEmail'];?></td>
            </tr>
            <tr>
                <td width="208">Bus Booker Phone: </td>
                <td><?php echo $mailData['busPhone'];?></td>
            </tr>
            <tr>
                <td width="208">Number of Seats: </td>
                <td><?php echo $mailData['busSeats'];?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>