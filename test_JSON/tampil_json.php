<?php  
 $sumber = 'bRDrSul/hqnlRwNnTFrz952iIVDs07UTG5RuacIp6vTIcP+YBadKr9jlihT9DoYV';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Jumlah data user ada ".count($data)." orang</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>
 <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }
 </style>
</head>
<body>
 <table border="1">
  <tr>
   <th>No</th>
   <th>Nama</th>
   <th>Jenis Lomba</th>
   <th>Juara</th>
   <th>Nama</th>
   <th>Sekolah</th>
   <th>ID</th> 
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['nama']."</td>";
    print "<td>".$data[$a]['phone']."</td>";
    print "<td>".$data[$a]['email']."</td>";
    print "<td>".$data[$a]['address']."</td>";
    print "<td>".$data[$a]['groupId']."</td>";
    print "<td>".$data[$a]['userId']."</td>";
    print "</tr>";
   }

   echo "sumber :".$sumber;
   echo "\nkonten :".$konten;
   echo "\ndata :".$data;
  ?>
 </table>
</body>
</html>
