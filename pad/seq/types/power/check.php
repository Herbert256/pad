<?php

  function padSeqCheckPower ( $f, $n ) {

    if ( file_exists ( 'seq/types/power/bool.php' ) )
      return padSeqBoolPower ( $n );

    if ( file_exists ( 'seq/types/power/generated.php' ) ) 
      return in_array ( $n, PADpower );

    if ( file_exists ( 'seq/types/power/fixed.php' ) ) {
      $fixed = include 'seq/types/power/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq power, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>