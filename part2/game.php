<?php

/**
 * @file
 */

require_once 'Player.php';
require_once 'Room.php';
require_once 'setup.php';

// The room array setup is in a separate file for readability.
global $rooms;
$current_room = 0;
$player       = new Player($rooms[$current_room]);

echo "Welcome!\n";

while ($player->getHearts() > 0) {
  // Show the player's current life.
  echo $player->showHearts();

  // Show the current room options and get answer.
  $injury = $player->getLocation()->playRoom();

  // Apply any injuries from the room.
  $player->loseHearts($injury);

  // If we're in the final room finish the game!
  if ($current_room + 1 == count($rooms)) {
    break;
  }

  // If the next room exists move the player to it.
  if (isset($rooms[$current_room + 1])) {
    $current_room++;
    $player->setLocation($rooms[$current_room]);
  }
}

// Output an ending message for success or failure.
if ($player->getHearts() > 0) {
  echo "\nCONGRATULATIONS YOU SURVIVED!\n";
}
else {
  echo "\nDEATH\n";
}
