<?php

  function padSeqCheckModulo ( $f, $n ) {

    if ( file_exists ( 'seq/types/modulo/bool.php' ) )
      return padSeqBoolModulo ( $n );

    if ( file_exists ( 'seq/types/modulo/generated.php' ) ) 
      return in_array ( $n, PADmodulo );

    if ( file_exists ( 'seq/types/modulo/fixed.php' ) ) {
      $fixed = include 'seq/types/modulo/fixed.php';
      return in_array ( $n, $fixed );

    }

    $text = padCode ( "{seq modulo, from=$f, stop=$n, try=$n}{\$seq},{/seq}" );
    $arr  = explode ( ',', $text );

    return in_array ( $n, $arr );

  }

?>