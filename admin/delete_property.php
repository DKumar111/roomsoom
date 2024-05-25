<?php
if(isset($_GET['delete_property'])){
    $delete_property = $_GET['delete_property'];
    
    $delete_property_query = "DELETE FROM `properties` WHERE s_id = $delete_property";
    $result_property_delete = mysqli_query($conn, $delete_property_query);
    if($result_property_delete){
        echo "<script>alert('Property has been deleted successfully')</script>";
        echo "<script>window.open('admin_index.php?show_all','_self')</script>";
    }
}

?>