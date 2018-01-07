<?php require_once '../core/init.php';
  $search_term = $_GET[ "term" ];
  // var_dump($search_term);
  // die();
  // $search_term = trim($search_term, "'");
  $query = "SELECT title FROM products WHERE title LIKE '{$search_term}%'";
  $select = $db->query($query);
  $select_query = $select->fetchAll(PDO::FETCH_ASSOC);
  $result = array();
   //var_dump($select_query);exit;
  // die();
  foreach ($select_query as $value) {
    $result[] =  $value['title'];
  }
  echo json_encode( $result );
// }



?>
