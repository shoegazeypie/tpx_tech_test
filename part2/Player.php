<?php

/**
 * The Player class.
 */
class Player {

  protected $hearts;
  protected $location;
  const MAX_HEARTS = 3;

  /**
   * @param int $hearts
   * @param Room $location
   */
  public function __construct(Room $location, $hearts = self::MAX_HEARTS) {
    $this->hearts = $hearts;
    $this->location = $location;
  }

  /**
   * @return int
   */
  public function getHearts() {
    return $this->hearts;
  }

  /**
   * @param int $hearts
   */
  public function setHearts($hearts) {
    $this->hearts = $hearts;
  }

  /**
   *
   */
  public function loseHearts($injury) {
    $this->hearts = $this->hearts - $injury;
  }

  /**
   * @return Room
   */
  public function getLocation() {
    return $this->location;
  }

  /**
   * @param Room $location
   */
  public function setLocation($location) {
    $this->location = $location;
  }

  public function showHearts() {
    $heart_string = '';
    for ($h = 0; $h < self::MAX_HEARTS; $h++) {
      if ($h < $this->hearts) {
        $heart_string .= "\u{2665}";
      }
      else {
        $heart_string .= "\u{2661}";
      }
    }
    return $heart_string . ' ';
  }

}
