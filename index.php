<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  
    <?php

     function add_one_to_x($x) {
       echo $x + 1;
     }
      
     function adding_to_the_added($x, $added) {
       echo $x ." is added to, ". $added;
     }

     adding_to_the_added(6, "Muskrats");
    ?> 

  </body>
</html>  
