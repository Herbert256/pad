<?php
// PHP code to generate first 'n' terms
// of the Moser-de Bruijn Sequence

// Function to generate nth term
// of Moser-de Bruijn Sequence
function gen($n)
{
  
  // S(0) = 0
  if ($n == 0)
    return 0;
  
  // S(1) = 1
  else if ($n == 1)
    return 1;
  
  // S(2 * n) = 4 * S(n)
  else if ($n % 2 == 0)
    return 4 * gen($n / 2);
  
  // S(2 * n + 1) = 4 * S(n) + 1
  else if ($n % 2 == 1)
    return 4 * gen($n / 2) + 1;
}

// Generating the first 'n' terms
// of Moser-de Bruijn Sequence
function moserDeBruijn($n)
{
  for ($i = 0; $i < $n; $i++)
    echo(gen($i) . " ");
  echo("\n");
}

// Driver Code
$n = 15;
echo("First " . $n . " terms of " .
"Moser-de Bruijn Sequence : \n");
echo(moserDeBruijn($n));

// This code is contributed by Ajit.
?>