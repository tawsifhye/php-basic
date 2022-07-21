<?php

//Magic constant
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

//Create Directory
// mkdir('test');

//Rename Directory
// rename('test', 'test2');

//Delete Directory
// rmdir('test2');

//Read files and folder inside directory
// echo file_get_contents('lorem.txt');

//Read files from json api

$userJSON = file_get_contents('https://jsonplaceholder.typicode.com/users');

// echo $userJSON;

$users = json_decode($userJSON);

foreach ($users as $key => $user) {
    echo '<div>';
    echo "
    <h2>$user->name</h2>
    <h3>Email: $user->email </h3>
    ";
    echo '</div>';
}
