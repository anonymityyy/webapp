$sql = "SELECT * from building";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }