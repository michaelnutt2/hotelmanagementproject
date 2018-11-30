<?php
function autoload($className)
{
  require("includes/".$className.'.php');
}

spl_autoload_register('autoload');
?>
