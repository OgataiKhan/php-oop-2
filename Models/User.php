<?php

require_once __DIR__ . '/../Models/CreditCard.php';

/**
 * User
 */
class User
{
  protected $discount;
  protected $credit_card;

  /**
   * __construct
   *
   * @param  mixed $_discount
   * @param  mixed $_credit_card
   * @return void
   */
  public function __construct(CreditCard $_credit_card = null)
  {
    $this->set_discount();
    $this->credit_card = $_credit_card;
  }

  /**
   * set_discount
   *
   * @return void
   */
  public function set_discount()
  {
    $this->discount = 0;
  }

  /**
   * get_discount
   *
   */
  public function get_discount()
  {
    return $this->discount;
  }
  
  /**
   * get_credit_card
   *
   * @return void
   */
  public function get_credit_card()
  {
    if ($this->credit_card !== null) {
      if ($this->credit_card->get_expiration_year() < 2024) {
        return "Expired";
      } else {
        return $this->credit_card;
      }
    }
    return null;
  }
}
