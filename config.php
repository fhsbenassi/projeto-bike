<?php

/** caminho absoluto para a pasta do sistema **/
define('ABSOLUTE', dirname(__FILE__));
  
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
  define('BASEURL', '/crud-bootstrap-php/');