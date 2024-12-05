<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        // Variables to hold personal details
        $name = "Muhammad Zainurain bin Mohd Zain";
        $matricNumber = "AI220235";
        $course = "Computer Science";
        $yearOfStudy = "Year 3";
        $address = "53 Jalan Asli 10 Taman Pasir Putih 81700 Pasir Gudang";
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
