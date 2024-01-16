<?php

/**
 * Product
 */
class Product
{
  protected $name;
  protected $price;
  protected $available = false;

  /**
   * __construct
   *
   * @param  mixed $_name
   * @param  mixed $_price
   * @param  mixed $_available
   * @param  mixed $_year
   * @return void
   */
  public function __construct(string $_name, string $_price, bool $_available)
  {
    $this->set_name($_name);
    $this->set_price($_price);
    $this->set_available($_available);
  }

  /**
   * set_name
   *
   * @param mixed $name
   * @return void
   */
  public function set_name($name)
  {
    $this->name = $name;
  }

  /**
   * get_name
   *
   * @return void
   */
  public function get_name()
  {
    return $this->name;
  }

  /**
   * set_price
   *
   * @param mixed $price
   * @return void
   */
  public function set_price($price)
  {
    $this->price = $price;
  }

  /**
   * get_price
   *
   * @return void
   */
  public function get_price()
  {
    return $this->price;
  }

  /**
   * set_available
   *
   * @param mixed $available
   * @return void
   */
  public function set_available($available)
  {
    $this->available = $available;
  }

  /**
   * get_available
   *
   * @return void
   */
  public function get_available()
  {
    return $this->available;
  }
}
