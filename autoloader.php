<?php
function autoload($className)
{
  require($_SERVER["DOCUMENT_ROOT"]."/hotelmanagement/includes/".$className.'.php');
}

spl_autoload_register('autoload');
?>
