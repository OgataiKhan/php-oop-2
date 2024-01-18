<?php

require_once __DIR__ . '/../Traits/Name.php';

/**
 * Product
 */
class Product
{
  use Name;

  // protected $name;
  protected $price;
  protected $available = false;
  protected $img = "no-img.jpg";
  protected $designed_for;

  public function __construct(string $_name, float $_price, bool $_available, string $_img, string $_designed_for)
  {
    $this->set_name($_name);
    $this->set_price($_price);
    $this->set_available($_available);
    $this->set_img($_img);
    $this->set_designed_for($_designed_for);
  }

  /**
   * set_price
   *
   * @param  mixed $price
   * @return void
   */
  public function set_price($price)
  {
    if (!is_numeric($price) || $price < 0) {
      throw new Exception("Price must be a non-negative number.");
    }
    $this->price = $price;
  }

  /**
   * get_price
   *
   * @return float
   */
  public function get_price()
  {
    return $this->price;
  }

  /**
   * set_available
   *
   * @param  mixed $available
   * @return void
   */
  public function set_available($available)
  {
    if (!is_bool($available)) {
      throw new Exception("Availability must be a boolean.");
    }
    $this->available = $available;
  }

  /**
   * get_available
   *
   * @return bool
   */
  public function get_available()
  {
    return $this->available;
  }

  /**
   * set_img
   *
   * @param  mixed $img
   * @return void
   */
  public function set_img($img)
  {
    if (!is_string($img) || empty($img)) {
      throw new Exception("Image path must be a non-empty string.");
    }
    $this->img = $img;
  }

  /**
   * get_img
   *
   * @return string
   */
  public function get_img()
  {
    return $this->img;
  }
  
  /**
   * set_designed_for
   *
   * @param  mixed $designed_for
   * @return void
   */
  public function set_designed_for($designed_for)
  {
    if (!is_string($designed_for) || empty($designed_for)) {
      throw new Exception("Must be a non-empty string.");
    }
    $this->designed_for = $designed_for;
  }

  /**
   * get_designed_for
   *
   * @return void
   */
  public function get_designed_for()
  {
    return $this->designed_for;
  }
}
