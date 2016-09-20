<?php
  $date = "2016-01-14";

  function date_formatter($date){
    //if date not year-month-day -- return ""

    else {
    $date = strtotime($date);
    $format = date('l, F jS Y',$date);
    return $format;
    }
  }

  echo date_formatter($date);
?>
