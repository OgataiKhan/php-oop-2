<?php

trait Name {
  protected $name;
  
  /**
   * set_name
   *
   * @param  mixed $name
   * @return void
   */
  public function set_name($name)
  {
    $this->name = $name;
  }
  
  /**
   * get_name
   *
   * @return string
   */
  public function get_name()
  {
    return $this->name;
  }
}