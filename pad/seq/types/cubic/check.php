<?php

  function padSeqCheckCubic ( $f, $n ) {

    if ( file_exists ( 'seq/types/cubic/bool.php' ) )
      return padSeqBoolCubic ( $n );

    if ( file_exists ( 'seq/types/cubic/generated.php' ) ) 
      return in_array ( $n, PADcubic );

    if ( file_exists ( 'seq/types/cubic/fixed.php' ) ) {
      $fixed = include 'seq/types/cubic/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq cubic, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>