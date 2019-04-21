<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <p>Hello World</p>
     <?php
    $homepage = file_get_contents('https://kibana.k8s.vestas-poc.demo.sentia.net/api/status');
    echo $homepage;
    ?>
 </body>
</html>

