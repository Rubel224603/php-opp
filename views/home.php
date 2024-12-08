<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php opp with </title>
</head>
<body>
    
    <ul>
        <li><a href="web.php?page=home">Home</a></li>
        <li><a href="web.php?page=about">About</a></li>
        <li><a href="web.php?page=contact">Contact</a></li>
        <li><a href="web.php?page=contact">portfolio</a></li>
    </ul>

<h1>This is home page</h1>
  
    <table border = "1" width="700" style="border-collapse:collapse">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobaile</th>
           
        </tr>
        <?php foreach( $students as $student) { ?>
           
        
        <tr>
            <td><?php echo $student['name']?></td>
            <td><?php echo $student['email']?></td>
            <td><?php echo $student['number']?></td>
           
        </tr>
        <?php }?>
       
    </table>
</body>
</html>