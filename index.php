<?php

$students = [
    [
        'Name','Age', 'Salary','Serial No'
    ],
    [
        'Rahim','35', '3000',1
    ],
    [
        'Korim','44', '4000',2
    ],
    [
        'Rakibb','23', '5000',3
    ],
    [
        'Sakib','56', '6000',4
    ],
    [
        'Samira','45','7000',5
    ],
    [
        'Tamil','56','8000',6
    ],
    [
        'Tinaya','67','9000',7
    ],
];
for( $row = 0; $row < count($students); $row++){
    echo "<p>Number of row $row</p>";

    for($col = 0; $col < count($students[$row]); $col++){
        echo "<li>" .$students[$row][$col]. "</li>";
    }
}



?>