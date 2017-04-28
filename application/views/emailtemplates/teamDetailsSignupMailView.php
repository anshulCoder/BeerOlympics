<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)file:///C:/Users/user1/Desktop/Emails/welcome-email.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Team Registered</title>
</head>

<body>
    <p>Team Registration Details: </p>
    <table border="0" style="border-collapse:collapse;">
        <tbody>
        <?php
        $isCapDone = false;
        $count = 1;
        foreach($mailData as $key => $row)
        {
            if($isCapDone == false)
            {
                $isCapDone = true;
                ?>
                <tr>
                    <td width="208">Captain Name: </td>
                    <td><?php echo $row['capName'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Age: </td>
                    <td><?php echo $row['capAge'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Email: </td>
                    <td><?php echo $row['capEmail'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Mobile: </td>
                    <td><?php echo $row['capMob'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain City: </td>
                    <td><?php echo $row['capCity'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Zip: </td>
                    <td><?php echo $row['capZip'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Tshirt: </td>
                    <td><?php echo $row['capTshirt'];?></td>
                </tr>
                <tr>
                    <td width="208">Captain Bus Status: </td>
                    <td>
                        <?php
                            if($row['ifBusRequiredCap'] == '1')
                            {
                                echo 'Booked';
                            }
                            else
                            {
                                echo 'Not Booked';
                            }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td width="208" style="color:#000;font-weight:bolder">Athlete <?php echo $count;?> Details:</td>
            </tr>
            <tr>
                <td width="208">Name: </td>
                <td><?php echo $row['athleteName'];?></td>
            </tr>
            <tr>
                <td width="208">Age: </td>
                <td><?php echo $row['athleteAge'];?></td>
            </tr>
            <tr>
                <td width="208">Tshirt: </td>
                <td><?php echo $row['athleteTshirt'];?></td>
            </tr>
            <tr>
                <td width="208">Bus Status: </td>
                <td>
                    <?php
                    if($row['ifBusRequiredAthlete'] == '1')
                    {
                        echo 'Booked';
                    }
                    else
                    {
                        echo 'Not Booked';
                    }
                    ?>
                </td>
            </tr>
            <?php
            $count++;
        }
        ?>
        </tbody>
    </table>

</body>
</html>