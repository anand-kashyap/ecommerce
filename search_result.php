<?php include 'includes/header.php'; ?>
<?php include 'func.php'; ?>
<h2>Search results</h2>
<?php
    if(isset($_POST['keywords'])) {
      $keywords = $db->quote(htmlentities(trim($_POST['keywords'])));
      // $key = $db->prepare(":keywords");
      // $key->execute(['keywords' => $keywords]);
      $keywords = trim($keywords,"'");
      // var_dump($keywords);
      // die();
      $errors = array();
      // $errors[] = $key[0];
      // echo strlen($errors[0]);
      if (empty($keywords)) {
        $errors[] = 'enter a search term';
      } else if (strlen($keywords) < 3) {
        $errors[] = 'search term must be three or more characters';
      }
      else if (search_results($keywords, $db) === false) {
        $errors[] = 'No results found for <strong>'.$keywords.'</strong>';
      }

      if (empty($errors)) {
        //search
        $result = search_results($keywords, $db);
        $results_num = count($result);
        if ($results_num == 1) {
          echo "<strong>".$results_num."</strong> result found";
        } else {
          echo "<strong>".$results_num."</strong> results found";
        }

        foreach ($result as $res) {
            ?>
            <h2><?=$res['title'];?></h2>
            <img src="<?=$res['image'];?>" alt="<?=$res['title'];?>">
            <p><?=$res['list_price'];?></p>
            <p><strong><?=$res['price'];?></strong></p>

            <?php
        }
      }
      else {
        foreach ($errors as $error) {
          echo $error.'<br>';
        }
      }


    }
    ?>

<?php include 'includes/footer.php'; ?>
