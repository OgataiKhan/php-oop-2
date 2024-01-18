<?php

require_once __DIR__ . '/../Models/User.php';

class RegisteredUser extends User {
  private $username;

  public function __construct(string $_username, $_creditCard = null) {
      parent::__construct($_creditCard);
      $this->set_username($_username);
  }
  
  /**
   * set_username
   *
   * @param  mixed $username
   * @return void
   */
  public function set_username($username)
  {
    if (!is_string($username) || empty($username)) {
      throw new Exception("Username must be a non-empty string.");
    }
    $this->username = $username;
  }

  /**
   * get_username
   *
   * @return void
   */
  public function get_username()
  {
    return $this->username;
  }
  
  /**
   * set_discount
   *
   * @return void
   */
  public function set_discount()
  {
    $this->discount = 20;
  }
}