<?php

require_once __DIR__ . '/../Models/Product.php';

/**
 * Food
 */
class Food extends Product
{
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
    try {
      parent::__construct($_name, $_price, $_available, $_img, $_designed_for);
      $this->set_expiration_date($_expiration_date);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  /**
   * set_expiration_date
   *
   * @param  mixed $expiration_date
   * @return void
   */
  public function set_expiration_date($expiration_date)
  {
    if (!is_string($expiration_date) || empty($expiration_date)) {
      throw new Exception("Expiration date must be a non-empty string.");
    }
    $this->expiration_date = $expiration_date;
  }

  /**
   * get_expiration_date
   *
   * @return string
   */
  public function get_expiration_date()
  {
    return $this->expiration_date;
  }
}
