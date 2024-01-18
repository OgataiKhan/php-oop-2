<?php

class Category
{
  private $name;
  private $icon;

  public function __construct($_name, $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
}
