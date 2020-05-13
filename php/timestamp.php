<?php
  // Generate timestamp.
  $data = date('d/m/Y H:i:s');
  
  // Send data to the client.
  header('Content-Type: text/plain; charset=utf-8');
  header('Cache-control: no-store, no-cache, must-revalidate');
  header('Pragma: no-cache');
  header('HTTP/1.1 200 OK');
  echo $data;
  exit;
?>
