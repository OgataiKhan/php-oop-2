<?php

/**
 * Product
 */
class Product
{
  protected $name;
  protected $price;
  protected $available = false;
  protected $img = "no-img.jpg";
  protected $designed_for;

  public function __construct(string $_name, int $_price, bool $_available, string $_img, string $_designed_for)
  {
    $this->set_name($_name);
    $this->set_price($_price);
    $this->set_available($_available);
    $this->set_img($_img);
    $this->set_designed_for($_designed_for);
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

  /**
   * set_img
   *
   * @param mixed $img
   * @return void
   */
  public function set_img($img)
  {
    $this->img = $img;
  }

  /**
   * get_img
   *
   * @return void
   */
  public function get_img()
  {
    return $this->img;
  }

    /**
   * set_designed_for
   *
   * @param mixed $designed_for
   * @return void
   */
  public function set_designed_for($designed_for)
  {
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


