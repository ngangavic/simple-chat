<?php
  require_once( "config.php" );
  require_once( "chatClass.php" );
  $id = intval( $_GET[ 'lastTimeID' ] );
  $jsonData = chatClass::getRestChatLines( $id );
  print $jsonData;
?>