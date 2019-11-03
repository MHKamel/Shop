












<?php

  include 'database/conn.php'; 
  include 'database/category/list.php';
  include 'database/product/list.php';

  $sqlStatment = "SELECT * FROM category WHERE id=2";
  $cate = $conn->query($sqlStatment);
  $fetch = $cate->fetch_assoc();
  echo '<pre>';
  print_r($fetch);
  echo '</pre>';



// while($productData = $allProducts->fetch_assoc()){
//     echo $productData['id'];
//     echo '<br>';
//     echo $productData['name'];
//     echo '<br>';
//     echo $productData['price'];
//     echo '<br> category ID : ';
//     echo $productData['category_id'];
//     echo '<br>';
    
//     // for($cat = $data){
      
//     // }
//   echo '<br>';
//   echo '<br>';

//   }

      // while($productData = $allProducts->fetch_assoc()){
      //   $i++;
      //   echo $productData['id'];
      //   echo '<br>';
      //   echo $productData['name'];
      //   echo '<br>';
      //   echo $productData['price'];
      //   echo '<br> category ID : ';
      //   echo $productData['category_id'];



      // //   $productNum = $productData['category_id'];
      // // foreach($catPro as ){
      // //   if($productNum == $catPro['id']){
      // //     echo $catPro['name'];
      // //       break;
      // //       }
      // //     }
      //     echo '<br><br>';
      //   }
  ?>