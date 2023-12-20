<?php

/**
 * The Room class.
 */
class Room {
  protected $intro;
  protected $question;
  protected $answers;

  /**
   * @param $intro
   * @param $question
   * @param $answers
   */
  public function __construct($intro, $question, $answers) {
    $this->intro    = $intro;
    $this->question = $question;
    $this->answers  = $answers;

  }//end __construct()

  /**
   * Output the room dialogue and parse actions.
   *
   * @return int
   *   The injury total that occurred in the room.
   */
  public function playRoom() {
    // Output intro and question text to user.
    echo $this->intro . "\n";
    echo $this->question . "\n";

    // Give options to user.
    foreach ($this->answers as $index => $answer_obj) {
      echo ($index + 1) . '  : ' . $answer_obj['answer'] . "\n";
    }

    // Get option number.
    $option = readline('> ');

    try {
      if (isset($this->answers[$option - 1])) {
        // Show option response.
        echo $this->answers[$option - 1]['response'] . "\n\n";
      }
      else {
        echo 'Please choose a valid numerical option';
        die();
      }
    }
    catch (Error $e) {
      echo 'Please choose a valid numerical option';
      die();
    }

    // Return any injury amount encountered.
    return $this->answers[$option - 1]['injury'];

  }//end playRoom()

}//end class
