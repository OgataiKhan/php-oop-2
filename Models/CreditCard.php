<?php

/**
 * CreditCard
 */
class CreditCard
{
  private $number;
  private $expiration_year;

  /**
   * __construct
   *
   * @param  mixed $_number
   * @param  mixed $_expiration_year
   * @return void
   */
  public function __construct(int $_number, int $_expiration_year)
  {
    try {
      $this->set_number($_number);
      $this->set_expiration_year($_expiration_year);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  /**
   * set_number
   *
   * @param  mixed $number
   * @return void
   */
  public function set_number($number)
  {
    if (!is_numeric($number)) {
      throw new Exception("Card number must be numeric.");
    }
    $this->number = $number;
  }

  /**
   * get_number
   *
   * @return void
   */
  public function get_number()
  {
    return $this->number;
  }

  /**
   * set_expiration_year
   *
   * @param  mixed $expiration_year
   * @return void
   */
  public function set_expiration_year($expiration_year)
  {
    if (!is_numeric($expiration_year)) {
      throw new Exception("Expiration year must be numeric.");
    }
    $this->expiration_year = $expiration_year;
  }

  /**
   * get_expiration_year
   *
   * @return void
   */
  public function get_expiration_year()
  {
    return $this->expiration_year;
  }
}
