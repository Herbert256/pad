<?php

  function padSeqCheckLoop ( $f, $n ) {

    if ( file_exists ( 'seq/types/loop/bool.php' ) )
      return padSeqBoolLoop ( $n );

    if ( file_exists ( 'seq/types/loop/generated.php' ) ) 
      return in_array ( $n, PADloop );

    if ( file_exists ( 'seq/types/loop/fixed.php' ) ) {
      $fixed = include 'seq/types/loop/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq loop, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>