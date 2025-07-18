<?php
include 'header.php';
include 'hexagons.php';
include 'sidebar.php';
include 'courses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search - ECExchange</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <style>
    .main-content {
      flex: 1;
      padding: 20px;
      margin-left: 0;
      min-height: calc(100vh - 100px);
      overflow-y: auto;
      transition: 0.3s;
      z-index: 1000;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      color: white;
    }

    .main-content h2 {
      margin-bottom: 10px;
    }

    .main-content ul {
      list-style: none;
      padding: 0;
    }

    .main-content li {
      padding: 10px;
      margin-bottom: 8px;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 6px;
    }

    .main-content li a {
      color: #4CAF50;
      font-weight: bold;
      text-decoration: none;
    }

    .main-content li a:hover {
      text-decoration: underline;
      color: #66ff99;
    }

    .main-content p {
      font-size: 16px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="main-content">
  <h2>Search Results</h2>
  <hr style="margin-bottom: 20px;">

  <?php
    if (isset($_GET['q']) && !empty(trim($_GET['q']))) {
      $query = strtolower(trim($_GET['q']));

      $searchItems = [];

      foreach ($coursesBySemester as $semester => $courses) {
        foreach ($courses as $course) {
          $searchItems[$course] = '#';
        }
      }
      //placeholder: 

      foreach ($optionalCourses as $category => $courses) {
        foreach ($courses as $course) {
          $searchItems[$course] = '#';
        }
      }

      $results = [];

      foreach ($searchItems as $title => $link) {
        if (str_contains(strtolower($title), $query)) {
          $results[$title] = $link;
        }
      }

      if (count($results) > 0) {
        echo "<ul>";
        foreach ($results as $title => $link) {
          echo "<li><a href='$link'>$title</a></li>";
        }
        echo "</ul>";
      } else {
        echo "<p>No results found for <strong>$query</strong>.</p>";
      }
    } else {
      echo "<p>Please enter a search query.</p>";
    }
  ?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>