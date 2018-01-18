     <?php 
                    // create curl resource
                    $url = "127.0.0.1:1777/user/get";
                    $ch = curl_init();
                    
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    // $output contains the output json
                    $result = curl_exec($ch);
                    // close curl resource to free up system resources 
                    curl_close($ch);
                    $refine_array = json_decode($result, true);
                    foreach ($refine_array as $value) 
                    {
                        // echo $value['userId'];
                        // echo "<br />";
   for($a=0; $a < count($value); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$value[$a]['name']."</td>";
    // print "<td>".$value[$a]['jenis']."</td>";
    // print "<td>".$value[$a]['juara']."</td>";
    // print "<td>".$value[$a]['nama']."</td>";
    // print "<td>".$value[$a]['sekolah']."</td>";
    // print "<td>".$value[$a]['id']."</td>";
    print "</tr>";
   }
                    }
//                     <?php   
echo $result;
//   ?>