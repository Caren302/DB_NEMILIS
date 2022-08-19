<?php
  include'conn.php';
  if(ISSET($_POST['search'])){
    $date1 = date("Y-m-d", strtotime($_POST['fecha']));
    $date2 = date("Y-m-d", strtotime($_POST['fecha']));
    $query=mysqli_query($conn, "SELECT * FROM `inventario` WHERE `salidas` BETWEEN 'fecha' AND 'fecha'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
      while($fetch=mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $fetch['id']?></td>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['nombre']?></td>
    <td><?php echo $fetch['presentacion']?></td>
    <td><?php echo $fetch['categoria']?></td>
    <td><?php echo $fetch['lote']?></td>
    <td><?php echo $fetch['sector']?></td>
    <td><?php echo $fetch['cantidad']?></td>
  </tr>
<?php
      }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $query=mysqli_query($conn, "SELECT * FROM `salidas`") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
   <tr>
    <td><?php echo $fetch['id']?></td>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['nombre']?></td>
    <td><?php echo $fetch['presentacion']?></td>
    <td><?php echo $fetch['categoria']?></td>
    <td><?php echo $fetch['lote']?></td>
    <td><?php echo $fetch['sector']?></td>
    <td>
<?php
    }
  }
?>