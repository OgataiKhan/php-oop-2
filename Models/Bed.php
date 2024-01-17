<?php

require_once __DIR__ . '/../Models/Product.php';

/**
 * Bed
 */
class Bed extends Product
{
  private $size;

  /**
   * __construct
   *
   * @param  mixed $_name
   * @param  mixed $_price
   * @param  mixed $_available
   * @param  mixed $_size
   * @return void
   */
  public function __construct(string $_name, string $_price, bool $_available, string $_img, string $_designed_for, string $_size)
  {
    parent::__construct($_name, $_price, $_available, $_img, $_designed_for);
    $this->set_size($_size);
  }

  /**
   * set_size
   *
   * @param mixed $size
   * @return void
   */
  public function set_size($size)
  {
    $this->size = $size;
  }

  /**
   * get_size
   *
   * @return void
   */
  public function get_size()
  {
    return $this->size;
  }
}
