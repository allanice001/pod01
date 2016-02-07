<?php
    function debug($data)
    {
      echo '<pre>'. print_r($data, true). '</pre>';
    }
    debug($_GET);
    echo "changes thrice";
?>
