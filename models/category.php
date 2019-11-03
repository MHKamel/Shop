<?php












class Category {
  private $id; // auto incremenet
  private $name;
  // public $desciption;

  public function setName($inputName){
    // write validation rules
    if(isset($inputName)){
      $this->name = $inputName; 
    }
    else{
      echo 'wrong inputs or empty';
      die();
    }
    // set value to $name attribute
    
  }
  public function getName(){
    return $this->name;
  }

  public function list($conn){
    $listCategorysStmt = 'SELECT * FROM category';
    $allCategorys = $conn->query($listCategorysStmt);
    return $allCategorys;
  }

  public function create($conn , $categoryData){
    // $catName = $categoryData['name'];
    $this->setName($categoryData['name']);
    $catName = $this->getName();
    $addCategorysStmt = "INSERT INTO category VALUES (NULL, '$catName')";
    $addCategory = $conn->query($addCategorysStmt);

  }

  public static function read($conn , $categoryID){
    $CategorysStmt = 'SELECT * FROM category WHERE id ='.$categoryID;
    $oneCategory = $conn->query($CategorysStmt);
    return $oneCategory;
  }

  public static function delete($conn , $categoryID){
    $CategorysStmt = 'DELETE FROM category WHERE id ='.$categoryID;
    $deleteCategory = $conn->query($CategorysStmt);
    return $deleteCategory;
  }

  public function edit($conn , $catName , $categoryID){
    $updateCategoryStmt = "UPDATE category SET name = '$catName' WHERE category.id = $categoryID";
    $updateCategory = $conn->query($updateCategoryStmt);
    return $updateCategory;
  }

  // End of (f);
}

