<?php

$commands = file("submarine.txt");
$horizontal = 0;
$depth = 0;

 try {
    foreach($commands as $command) {
        $part = explode(" ", $command);
        switch($part[0]) {
            case "forward":
                $horizontal += $part[1];
                break;
            case "down":
                $depth += $part[1];
                break;
            case "up":
                $depth -= $part[1];
                break;
        }
    }
    echo "Access Coordinate: ".$horizontal * $depth;

 } catch (Exception $e) {
    echo "Error: ".  $e -> getMessage()."\n";
 }