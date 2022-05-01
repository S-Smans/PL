<?php
include_once "./interface/product-type.php";

class Dvd implements ProductType
{
  function Attributes()
  {
    echo '<label for="price">Price ($)</label>';
    echo '<input type="text" id="price" name="price" size="30">';
  }
}
