<?php

  function padSeqCheckPowerful ( $f, $n ) {

    if ( file_exists ( 'seq/types/powerful/bool.php' ) )
      return padSeqBoolPowerful ( $n );

    if ( file_exists ( 'seq/types/powerful/generated.php' ) ) 
      return in_array ( $n, PADpowerful );

    if ( file_exists ( 'seq/types/powerful/fixed.php' ) ) {
      $fixed = include 'seq/types/powerful/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq powerful, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>