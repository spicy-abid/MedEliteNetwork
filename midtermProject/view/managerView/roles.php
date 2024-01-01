<!DOCTYPE html>


<body>
    <h1>List of Roles</h1>

    <?php

    $jsonString = file_get_contents('../../data/managerRoles.json');
    $users = json_decode($jsonString, true);


    if ($users) {
        echo '<table>';
        echo '<tr><th>Name</th><th>Email</th><th>Role</th></tr>';

        
        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['userId'] . '</td>';
            echo '<td>' . $user['email'] . '</td>';
            echo '<td>' . $user['role'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo "<a href="."homeManager.php".">Go back</a>";
    } else {
        echo '<p>No roles information available.</p>';
    }
    ?>
</body>
</html>