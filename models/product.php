<?php












class Product {
  private $id;
  public $name;
  public $photo;
  public $price;
  public $description;
  public $category_id;



  public function list($conn){
    $listProductsStmt = 'SELECT * FROM product';
    $allProducts = $conn->query($listProductsStmt);
    return $allProducts;
  }

  public function create($conn , $productName, $productPhoto, $productPrice, $productDesc, $productCategory){
    $addProductStmt = "INSERT INTO product VALUES (NULL, '$productName',
    '$productPhoto', '$productPrice', '$productDesc',
    '$productCategory')";
    $addProduct = $conn->query($addProductStmt);
    return $addProduct;
  }

  public function read($conn , $productId){
    $productStmt = 'SELECT * FROM product WHERE id ='.$productId;
    $oneProduct = $conn->query($productStmt);
    return $oneProduct;
  }

  public function edit($conn , $productId , $productName , $productPrice , $productDesc ){
    $updateProductStmt = "UPDATE `product` SET `name` = '$productName', `price` = '$productPrice',
    `description` = '$productDesc' WHERE `product`.`id` = $productId;";
    $updateProduct = $conn->query($updateProductStmt);
    return $updateProduct;
  }

  public function delete($conn , $productId){
    $productsStmt = 'DELETE FROM product WHERE id ='.$productId;
    $deleteProduct = $conn->query($productsStmt);
  }
}