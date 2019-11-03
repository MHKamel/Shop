<?php












class CategoryControl {

  public function create($conn , $catName){
      $catName = $_POST['cat_name'];
      $data = ['name'=>$catName];
      $newCategory = new Category;
      $addCat = $newCategory->create($conn,$data);
  }

  public function read($conn , $categoryID){
  $category = new Category;
  $oneCat = $category->read($conn , $categoryID);
  $oneCategory = $oneCat->fetch_assoc();
  return $oneCategory;
  }

  public function update($conn , $categoryID , $catName){
  $category = new category;
  $updateCategory = $category -> edit($conn , $categoryID , $catName);
  }

  public function delete($conn , $categoryID){
    $category = new Category;
    $deleteCategory = $category->delete($conn , $categoryID);
  }
}