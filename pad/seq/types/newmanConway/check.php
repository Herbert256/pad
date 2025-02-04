<?php

  function padSeqCheckNewmanConway ( $f, $n ) {

    if ( file_exists ( 'seq/types/newmanConway/bool.php' ) )
      return padSeqBoolNewmanConway ( $n );

    if ( file_exists ( 'seq/types/newmanConway/generated.php' ) ) 
      return in_array ( $n, PADnewmanConway );

    if ( file_exists ( 'seq/types/newmanConway/fixed.php' ) ) {
      $fixed = include 'seq/types/newmanConway/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq newmanConway, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>