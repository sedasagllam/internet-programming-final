<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
      body { 
  font-family: Verdana; 
  font-size: 12px; 
  color: #444; 
} 
 
 
.container { 
  width: 700px; 
  margin: 150px auto; 
  background-color: #eee; 
  overflow: hidden; 
  padding: 15px; 
} 
 
  #main { 
    width: 490px; 
    float: left; 
  } 
 
  #sidebar { 
    width: 200px; 
    float: left; 
  }
  </style>
  
</head>





<table id="customers">
  <tr>
    <th>Ad Soyad </th>
    <th>Telefon</th>
    <th>E-mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>
  
      <?php
      session_start();
         if ($_SESSION["user"]== "") 
     {
       echo"<script>window.location.href='cikis.php'</script>";
     }

     else
     {
       include("baglanti.php");

    $sec="select * from iletisim";
    $sonuc=$baglan-> query($sec);

    if ($sonuc->num_rows>0) 
    {
      
      while ($cek=$sonuc->fetch_assoc()) 
      {
        echo " 
            <tr>
              <td>".$cek['adsoyad']."</td>
              <td>".$cek['telefon']."</td>
              <td>".$cek['email']."</td>
              <td>".$cek['konu']."</td>
              <td>".$cek['mesaj']."</td>
           </tr>
        ";
      }

    }
    else
    {

       echo "Kullanıcı Adınız :" .$_SESSION['user']."<br>";

       echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";

      echo "Veritabanında kayıtlı hiçbir veri bulunmamıştır";
    }



     }


   

?>


</table>

</body>
</html>