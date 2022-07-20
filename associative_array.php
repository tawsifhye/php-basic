<style>
    body{
        display: flex;
        justify-content: space-around;
    }
 div{
    border: 2px solid red;
    height: fit-content;
    padding: 1em;
    border-radius: 5px;
 }
 h2{
    margin-top: 0;
 }
</style>

<body>
<?php
$information = array(
    ['first name' => 'Gloria', 'last name' => 'Reeves', 'zip' => '67439', 'dob' => '10/18/1985'],
    ['first name' => 'Graham', 'last name' => 'Bonner', 'zip' => '90727', 'dob' => '12/07/1983'],
    ['first name' => 'Warren', 'last name' => 'Wheeler', 'zip' => '99134', 'dob' => '10/18/1985'],
    ['first name' => 'Julia', 'last name' => 'Haupt', 'zip' => '67439', 'dob' => '10/18/1985'],
    ['first name' => 'Julias', 'last name' => 'Agens', 'zip' => '67439', 'dob' => '10/18/1985'],
    ['first name' => 'Gloria', 'last name' => 'Reeves', 'zip' => '67439', 'dob' => '10/18/1985'],
);

for ($i = 0; $i < sizeof($information); $i++) {
    echo "<div>";

    foreach ($information[$i] as $key => $info) {
        $uppercase_key = ucfirst($key);
        $lowercase_key = ucfirst($info);
        if (strpos($key, 'name')) {
            echo "
       <h2>
       $uppercase_key: $lowercase_key
       </h2>
        ";
        } else {
            echo "
            <p>$key: $info</p>
            ";
        }

    }
    echo "</div>";
}
?>

</body>

