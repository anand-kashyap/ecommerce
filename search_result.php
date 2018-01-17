<?php include 'includes/header.php'; ?>
<?php include 'func.php'; ?>
<div class="container">
  <div class="row">
      <h2 class="text-center">Search results</h2>
<?php
    if(isset($_POST['keywords'])) {
      $keywords = $db->quote(htmlentities(trim($_POST['keywords'])));
      $keywords = trim($keywords,"'");
      // var_dump($keywords);
      // die();
      $errors = array();
      if (empty($keywords)) {
        $errors[] = '<h4>Please enter a search term</h4>';
      } else if (strlen($keywords) < 3) {
        $errors[] = '<h4>search term must be three or more characters.</h4>';
      }
      else if (search_results($keywords, $db) === false) {
        $errors[] = '<h4>No results found for "'.$keywords.'"</h4>';
      }

      if (empty($errors)) {
        //search
        $result = search_results($keywords, $db);
        $results_num = count($result);
        if ($results_num == 1) {
          echo "<h4><strong>".$results_num."</strong> result found for \"".$keywords."\"</h4>";
        } else {
          echo "<h4><strong>".$results_num."</strong> results found for \"".$keywords."\"</h4>";
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
    </div>
</div>
<?php include 'includes/footer.php'; ?>
