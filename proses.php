<?php 
    if(isset($_POST['submit'])  ){
        echo "<h3 style=text-align:center>Septian Hadi Prakoso 10918001 MI-1 </h3>";
        echo "<h2 style=text-align:center>NOTA </h2>";
          $pembeli=$_POST['pembeli'];
          $statusmember=$_POST['statusmember'];
          $barang=$_POST['barang'];
          $harga=$_POST['harga'];
          $jumlah=$_POST['jumlah'];
          $subtotal=$harga*$jumlah;
          if($statusmember=='member')
          $diskon=0.1*$subtotal;
          else if ($statusmember=='nonmember' && $jumlah >= 12)
          $diskon=0.1*$subtotal;
          else
          $diskon=0;
          $total=$subtotal-$diskon;  
          echo "<br>";
            echo "<table width=400 border=1 align=center>
                <tr>
                    <td colspan=4>Pembeli : ".$pembeli."</td>    
                </tr>
                <tr>
                    <td colspan=4>Status Member : ".$statusmember."</td> 
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>Subtotal</td>
                </tr>
                <tr>
                    <td>".$barang."</td>
                    <td>".$harga."</td>
                    <td>".$jumlah."</td>
                    <td>".$subtotal."</td>
                </tr>
                <tr>
                    <td colspan=3>Diskon</td>
                    <td>".$diskon."</td>
                </tr>
                <tr>
                    <td colspan=3>Total</td>
                    <td>".$total."</td>
                </tr>
            </table>";
    }
?>