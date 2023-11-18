<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>User Information</h1>

    <?php
 
    $jsonString = file_get_contents('../../data/managerUsers.json');
    $users = json_decode($jsonString, true);

  
    if ($users) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th></tr>';

       
        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['name'] . '</td>';
            echo '<td>' . $user['email'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No user information available.</p>';
    }
    ?>
</body>
</html>