<?php

/**
 * @file
 * Set up an array of rooms.
 */

$rooms = [
  $room1 = new Room(
      'You are in a dungeon. A goblin stares at you menacingly',
      'The Goblin charges toward you, blade drawn. Do you:',
      [
        [
          'answer'   => 'Attack the goblin',
          'response' => "You parry the goblin's strike, and cleave it in two, but not before it nicks you with a hidden blade.",
          'injury'     => 1,
        ],
        [
          'answer'   => 'Run away',
          'response' => 'You sprint towards the nearest exit, outpacing the goblin easily',
          'injury'     => 0,
        ],
      ]
  ),
  $room2 = new Room(
      'You pass through the exit and run down a corridor…',
      'At the end of the corridor, you find two doors and must pass through one of them. Do you:',
      [
        [
          'answer'   => 'Go through the right hand door',
          'response' => 'You fall down a 3 meter drop on the other side, slightly injuring your ankle. You climb out of the hole and into an open courtyard.',
          'injury'     => 1,
        ],
        [
          'answer'   => 'Go through the left hand door',
          'response' => 'The door locks behind you and you are in an open courtyard.',
          'injury'     => 0,
        ],
      ]
  ),
  $room3 = new Room(
      'You see a table with food and drink',
      'You are tired, hungry and thirsty. Do you:',
      [
        [
          'answer'   => 'Eat, drink and rest',
          'response' => 'You recover from your injuries and you are ready to move to the next room',
          'injury'     => 0,
        ],
        [
          'answer'   => 'Ignore the table of refreshments, fearing poison and move on to the next room',
          'response' => 'Your injuries and fatigue cause you to fall into a bed of hemlock. You die. Horribly. Ouch!.',
          'injury'     => Player::MAX_HEARTS,
        ],
      ]
  ),
  $room4 = new Room(
      'You are now in a beer cellar. You are tempted to try the merchandise',
      'The barkeep offers you a beer. Do you:',
      [
        [
          'answer'   => 'Accept the offer',
          'response' => 'One beer is never enough and you get horribly drunk, in your haze, you stagger off.',
          'injury'     => 1,
        ],
        [
          'answer'   => 'Decline and ask for directions to the W.C.',
          'response' => 'You reach the W.C. and have a wash.',
          'injury'     => 0,
        ],
      ]
  ),
  $room5 = new Room(
      'You reach a library. You see the librarian, who is an orangutan, hanging around the desk.',
      'The librarian says \'OOOK?\' Do you:',
      [
        [
          'answer'   => 'Return the book you borrowed last time you were here and apologise for being late.',
          'response' => 'Your apology is accepted, so you live, but there is no excuse for your tardiness and you are fined 10 Splodges.',
          'injury'     => 1,
        ],
        [
          'answer'   => 'Borrow the book eagerly recommended by the librarian, as this is your first visit and you wish to impress',
          'response' => 'You put the book in your bag and walk towards the exit',
          'injury'     => 0,
        ],
      ]
  ),
];
