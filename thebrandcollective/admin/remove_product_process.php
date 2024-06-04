<?php

include('../database/database.php');


if(isset($_POST['product_id'])) {
  $product_id = $_POST['product_id'];

  $sql = "DELETE FROM products WHERE product_id = '$product_id'";

  if ($conn->query($sql) === TRUE) {
      echo "Product removed successfully";
  } else {
      echo "Error removing product: " . $conn->error;
  }
} else {
  echo "Product ID not provided.";
}

$conn->close();

?>