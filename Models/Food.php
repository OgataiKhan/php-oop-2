<?php

/**
 * Food
 */
class Food extends Product {
  private $expiration_date;
    
  /**
   * __construct
   *
   * @param  mixed $_name
   * @param  mixed $_price
   * @param  mixed $_available
   * @param  mixed $_expiration_date
   * @return void
   */
  public function __construct(string $_name, string $_price, bool $_available, string $_img, string $_designed_for, string $_expiration_date)
  {
    parent::__construct($_name, $_price, $_available, $_img, $_designed_for);
    $this->set_expiration_date($_expiration_date);
    
  }

  /**
   * set_expiration_date
   *
   * @param mixed $expiration_date
   * @return void
   */
  public function set_expiration_date($expiration_date)
  {
    $this->expiration_date = $expiration_date;
  }

  /**
   * get_expiration_date
   *
   * @return void
   */
  public function get_expiration_date()
  {
    return $this->expiration_date;
  }
}