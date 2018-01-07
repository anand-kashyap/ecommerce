<?php

function search_results($keywords, $db)
{
  $returned_results = array();
  $where = "";

  $keywords =  preg_split('/[\s]+/', $keywords);
  // print_r($keywords);
  // die();
  $total_keywords = count($keywords);

  foreach ($keywords as $key => $keyword)
    {
      $where .= "title LIKE '%$keyword%'";
        if ($key != ($total_keywords-1)) {
          $where .= " AND ";
        }
    }
  $results = "SELECT title, price, image, list_price FROM products WHERE {$where}";
  $results_query = $db->query($results);
  // var_dump($results_query->queryString);
  // die();
  $results_num = ($results_query->queryString) ? $results_query->rowCount() : 0 ;
  if ($results_num === 0) {
    return false;
  } else {
    $results_query = $results_query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results_query as $result) {
      $returned_results[] = array(
        'title' => $result['title'],
        'image' => $result['image'],
        'price'  => $result['price'],
        'list_price' =>  $result['list_price']
        );
      }

    return $returned_results;
  }
}

 ?>
