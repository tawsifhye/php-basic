<link rel="stylesheet" href="style.css" type="text/css">

<?php
$information = array(
    array('Gloria', 'Reeves', 67439, '10/18/1985'),
    array('Graham', 'Bonner', 90727, '12/07/1983'),
    array('Warren', 'Wheeler', 99134, '11/11/1984'),
    array('Zena', 'Hale', 19803, '06/17/1987'),
    array('Julia', 'Haupt', 24116, '03/15/1991'),
    array('Julias', 'Agens', 241166, '03/15/1998'),
);
echo "<div class='table_container'>";
echo '<table>';
echo "
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>ZIP</th>
    <th>Birthday</th>
    </tr>
    ";

for ($row = 0; $row < sizeof($information); $row++) {
    echo "<tr class='table_data'>";
    for ($col = 0; $col < sizeof($information[$col]); $col++) {
        echo '<td>' . $information[$row][$col] . '</td>';
    }
    echo "</tr>";
}
echo '</table>';
echo "</div>";
?>