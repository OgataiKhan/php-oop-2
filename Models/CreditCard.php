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
    $this->set_number($_number);
    $this->set_expiration_year($_expiration_year);
  }
  
    /**
   * set_number
   *
   * @param  mixed $number
   * @return void
   */
  public function set_number($number)
  {
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
