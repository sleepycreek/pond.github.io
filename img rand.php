<?php
  $bg = array('pixels1.gif', 'pixels3.gif', 'pixels5.gif', 'pixels9.gif', 'pixels12.gif' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>