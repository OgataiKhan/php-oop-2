<?php

trait Name
{
  protected $name;

  /**
   * set_name
   *
   * @param  mixed $name
   * @return void
   * @throws Exception if the name is not a valid string.
   */
  public function set_name($name)
  {
    if (!is_string($name) || empty($name)) {
      throw new Exception("Name provided is not valid.");
    }
    $this->name = $name;
  }

  /**
   * get_name
   *
   * @return string
   * @throws Exception if the name has not been set.
   */
  public function get_name()
  {
    if ($this->name === null) {
      throw new Exception("Name has not been set.");
    }
    return $this->name;
  }
}
