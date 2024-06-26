<h1 class="w-100 d-flex justify-content-center pb-4 text-decoration-underline  ">All Properties</h1>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">S. No.</th>
      <th scope="col">City</th>
      <th scope="col">Locality</th>
      <th scope="col">Property Type</th>
      <th scope="col">Two Sharing Price</th>
      <th scope="col">Rent Price</th>
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
        $two_sharing_price = $row['two_sharing_price'];
        $three_sharing_price = $row['three_sharing_price'];
        $rent_price = $row['rent_price'];
        $number++;
        echo "
          <tr>
      <th scope='row'> $number </th>
      <td> $city </td>
      <td>$locality; </td>
      <td>$propery_type </td>
      <td>$two_sharing_price </td>
      <td>$rent_price </td>
      <td><a href='admin_index.php?edit_property= $property_id '>Edit</a></td>
      <td><a href='admin_index.php?delete_property= $property_id '>Delete</a></td>
    </tr>
        ";
    }
    ?>
    
  </tbody>
</table>