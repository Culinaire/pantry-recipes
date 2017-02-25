<?php

namespace App\Bistro\Support;

class Model
{

  protected $attributes = [];

  public function __set($key, $value)
  {
    $this->attributes[$key] = $value;
  }

  public function __get($key)
  {
    $atts = $this->attributes;
    
    if( array_key_exists( $key, $this->attributes ) ) {
      return $this->attributes[$key];
    }

    return null;
  }
}