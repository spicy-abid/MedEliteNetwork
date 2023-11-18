<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    

    <?php
 
    $jsonString = file_get_contents('../../data/doctorCategories.json');
    $category = json_decode($jsonString, true);

  
    if ($category) {
        echo '<table>';
        echo '<tr><th>List of Category Name</th></tr>';

       
        foreach ($category as $category) {
            echo '<tr>';
            echo '<td>' . $category['categoryName'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No  information available.</p>';
    }
    // <h2>Add category</h2>
    

    ?>
    </body>
    </html>