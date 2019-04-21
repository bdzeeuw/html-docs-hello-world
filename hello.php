<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <p>Hello World</p>
     <?php
/* gets the data from a URL */
    function get_data($url) {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    $returned_content = get_data('https://kibana.k8s.vestas-poc.demo.sentia.net/api/status');
    $bla = 'bla';
    print $returned_content;
    print $bla;
    ?>
 </body>
</html>

