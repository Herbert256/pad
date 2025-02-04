<?php

  function padSeqCheckList ( $f, $n ) {

    if ( file_exists ( 'seq/types/list/bool.php' ) )
      return padSeqBoolList ( $n );

    if ( file_exists ( 'seq/types/list/generated.php' ) ) 
      return in_array ( $n, PADlist );

    if ( file_exists ( 'seq/types/list/fixed.php' ) ) {
      $fixed = include 'seq/types/list/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq list, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>