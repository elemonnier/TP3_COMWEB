<?php
  // Generate error.
  switch (random_int(1, 6))
  {
    case 1:
        header('HTTP/1.1 400 Bad Request');
        exit;
    case 2:
        header('HTTP/1.1 401 Unauthorized');
        exit;
    case 3:
        header('HTTP/1.1 403 Forbidden');
        exit;
    case 4:
        header('HTTP/1.1 404 Not Found');
        exit;
    case 5:
        header('HTTP/1.1 500 Internal Server Error');
        exit;
    case 6:
        header('HTTP/1.1 503 Service Unavailable');
        exit;
  }
?>