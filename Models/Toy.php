<?php

require_once __DIR__ . '/../Models/Product.php';

/**
 * Toy
 */
class Toy extends Product
{
  private $material;

  /**
   * __construct
   *
   * @param  mixed $_name
   * @param  mixed $_price
   * @param  mixed $_available
   * @param  mixed $_material
   * @return void
   */
  public function __construct(string $_name, string $_price, bool $_available, string $_img, string $_designed_for, string $_material)
  {
    try {
      parent::__construct($_name, $_price, $_available, $_img, $_designed_for);
      $this->set_material($_material);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  /**
   * set_material
   *
   * @param  mixed $material
   * @return void
   */
  public function set_material($material)
  {
    if (!is_string($material) || empty($material)) {
      throw new Exception("Material must be a non-empty string.");
    }
    $this->material = $material;
  }

  /**
   * get_material
   *
   * @return string
   */
  public function get_material()
  {
    return $this->material;
  }
}
