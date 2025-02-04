<?php

  function padSeqCheckHeptagonal ( $f, $n ) {

    if ( file_exists ( 'seq/types/heptagonal/bool.php' ) )
      return padSeqBoolHeptagonal ( $n );

    if ( file_exists ( 'seq/types/heptagonal/generated.php' ) ) 
      return in_array ( $n, PADheptagonal );

    if ( file_exists ( 'seq/types/heptagonal/fixed.php' ) ) {
      $fixed = include 'seq/types/heptagonal/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq heptagonal, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>