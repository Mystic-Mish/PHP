<?php

  $num = readline("Enter the number: ");
  echo "Multiplication table of ",$num," is\n\n";     
  for ($i = 1; $i <= 10; $i++) {
    echo "\t", $num, " x ", $i, " = ", $num * $i, "\n";
  }
  
?>