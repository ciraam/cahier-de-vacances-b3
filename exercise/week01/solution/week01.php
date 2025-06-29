<?php

// echo "<p>".print_r(file("submarine.txt"))."</p>";

$commands = file("submarine.txt");
// print_r($commands);
// for($i = 0; $i < $commands; $i++) {
//     print_r(explode(" ", $commands[$i]));
//     echo $i;
// }
foreach($commands as $command) {
    print_r(explode(" ", $command));
}