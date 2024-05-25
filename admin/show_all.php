<h1 class="w-100 d-flex justify-content-center pb-4 text-decoration-underline  ">All Properties</h1>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">S. No.</th>
      <th scope="col">City</th>
      <th scope="col">Locality</th>
      <th scope="col">Property Type</th>
      <th scope="col">Twin Sharing Price</th>
      <th scope="col">Solo Room Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $get_property = "SELECT * FROM `properties`";
    $result = mysqli_query($conn, $get_property);
    $number = 0;
    while($row = mysqli_fetch_assoc($result)){
        $property_id = $row['s_id'];
        $city = $row['city'];
        $locality = $row['locality'];
        $propery_type = $row['property_type'];
        $twin_sharing_price = $row['twin_sharing_price'];
        $solo_room_price = $row['solo_room_price'];
        $number++;
    ?>
    <tr>
      <th scope="row"><?php  echo  $number  ?></th>
      <td><?php  echo  $city  ?></td>
      <td><?php  echo $locality;  ?></td>
      <td><?php  echo $propery_type  ?></td>
      <td><?php  echo $twin_sharing_price  ?></td>
      <td><?php  echo $solo_room_price  ?></td>
      <td><a href='admin_index.php?edit_property=<?php echo $property_id ?>'>Edit</a></td>
      <td><a href='admin_index.php?delete_property=<?php echo $property_id ?>'>Delete</a></td>
      
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>