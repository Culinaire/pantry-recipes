<?php

namespace App\Bistro\Ingredient;

use App\Bistro\Support\Model as BistroModel;

class Ingredient extends BistroModel
{
  public function __construct($input)
  { 
    if( array_key_exists('qty', $input)) {
      $this->qty = $input['qty'];
    }

    if( array_key_exists('uom', $input)) {
      $this->uom = $input['uom'];
    }

    if( array_key_exists('item', $input)) {
      $this->item = $input['item'];
    }

    if( array_key_exists('modifier', $input)) {
      $this->modifier = $input['modifier'];
    }   
  }
}