<?php

/**
* @author JABirchall
* @version 1.0
* @category Utilities
* @package Arma3Array
* @copyright 2016 - 2017 Freedom Roleplay
*/

final class Arma3Array {

  /**
  * @var string $original
  * @property string $original
  */
  private $original;

  /**
  * @method __construct(string $armaArray)
  */

  public function __construct($armaArray)
  {
    $this->original = $armaArray;
    $this->convert();
  }

  /**
  * @method void convert()
  */

  final private function convert()
  {
    $json = str_ireplace('"', '', $this->original);
    $json = str_ireplace('`', '"', $json);
    $array = json_decode($json, true);

    foreach ($array as $value) {
      foreach ($value as $key => $value) {
        $this->{!$key ? $value : $lastValue} = !$key ? null : $value;
        $lastValue = !$key ? $value : $lastValue;
      }
    }
  }

  /**
  * @method string __toString()
  * @return string Returns a json encoded string of the Arma Array
  */

  final public function __toString()
  {
    return json_encode($this, true);
  }

  /**
  * @method mixed|null __get(string $name)
  * @return mixed|null Returns a stored value
  */

  final public function __get($name)
  {
    return $this->{$name};
  }

  /**
  * @method void __set(string $name)
  */

  final public function __set($name, $value)
  {
    $this->{$name} = $value;
  }

}
