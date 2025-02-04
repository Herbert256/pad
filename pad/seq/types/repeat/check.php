<?php

  function padSeqCheckRepeat ( $f, $n ) {

    if ( file_exists ( 'seq/types/repeat/bool.php' ) )
      return padSeqBoolRepeat ( $n );

    if ( file_exists ( 'seq/types/repeat/generated.php' ) ) 
      return in_array ( $n, PADrepeat );

    if ( file_exists ( 'seq/types/repeat/fixed.php' ) ) {
      $fixed = include 'seq/types/repeat/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq repeat, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>