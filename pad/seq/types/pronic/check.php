<?php

  function padSeqCheckPronic ( $f, $n ) {

    if ( file_exists ( 'seq/types/pronic/bool.php' ) )
      return padSeqBoolPronic ( $n );

    if ( file_exists ( 'seq/types/pronic/generated.php' ) ) 
      return in_array ( $n, PADpronic );

    if ( file_exists ( 'seq/types/pronic/fixed.php' ) ) {
      $fixed = include 'seq/types/pronic/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq pronic, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>