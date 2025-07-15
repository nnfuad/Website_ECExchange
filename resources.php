<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/styles.css">
  <title>Resources - ECExchange</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #1a1a1a;
      color: white;
      margin: 0;
      padding: 0;
    }

    .main-content {
      padding: 30px;
      max-width: 1200px;
      margin: auto;
    }

    h1 {
      text-align: center;
      font-size: 30px;
      margin-bottom: 40px;
    }

    .semester-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }

    .semester-box {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(5px);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      transition: 0.3s ease;
    }

    .semester-box:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.09);
    }

    .semester-box h2 {
      margin-bottom: 15px;
      font-size: 20px;
      color: #4CAF50;
      border-bottom: 1px solid #4CAF50;
      padding-bottom: 5px;
    }

    .semester-box ul {
      list-style: none;
      padding-left: 0;
    }

    .semester-box li {
      margin-bottom: 8px;
    }

    .semester-box a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: 0.2s;
    }

    .semester-box a:hover {
      color: #4CAF50;
      text-decoration: underline;
    }

    .optional-courses {
  background: rgba(255, 255, 255, 0.03);
  backdrop-filter: blur(4px);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 12px rgba(0,0,0,0.25);
  margin-top: 30px;
}

.optional-courses h3 {
  color: #ffc107;
  font-size: 22px;
  margin-bottom: 10px;
  border-bottom: 1px solid #ffc107;
  padding-bottom: 6px;
}

.optional-courses ul {
  list-style: none;
  padding-left: 0;
  margin-bottom: 20px;
}

.optional-courses li {
  margin-bottom: 8px;
}

.optional-courses a {
  color: white;
  text-decoration: none;
  font-weight: 500;
}

.optional-courses a:hover {
  text-decoration: underline;
  color: #ffc107;
}

    @media screen and (max-width: 768px) {
      .main-content {
        padding: 15px;
      }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'hexagons.php'; ?>
<?php include 'sidebar.php'; ?>

<div class="main-content">
  <h1>Explore Semester Resources</h1>
  <div class="semester-grid">

    <!-- Year/Semester Boxes -->
<?php
$coursesBySemester = [
    "1st Year Odd Semester" => [
        "Circuits and Systems-I (Theory)",
        "Circuits and Systems-I Sessional",
        "Computer Programming (Theory)",
        "Computer Programming Sessional",
        "Calculus and Ordinary Differential Equation",
        "Optics and Modern Physics (Theory)",
        "Optics and Modern Physics Sessional",
        "Technical English (Theory)",
        "Technical English Sessional",
        "Introduction to Computer System (Resource)"
    ],
    "1st Year Even Semester" => [
        "Circuits and Systems-II (Theory)",
        "Circuits and Systems-II Sessional",
        "Object Oriented Programming (Theory)",
        "Object Oriented Programming Sessional",
        "Analog Electronic Circuits-I (Theory)",
        "Analog Electronic Circuits Sessional",
        "Transform Methods, Statistics & Complex Variable",
        "Government, Sociology, Environment Protection & History of Independence",
        "Engineering Ethics (Sessional)"
    ],
    "2nd Year Odd Semester" => [
        "Data Structure & Algorithms (Theory)",
        "Data Structure & Algorithms Sessional",
        "Analog Electronic Circuits-II (Theory)",
        "Analog Electronic Circuits-II Sessional",
        "Digital Techniques (Theory)",
        "Digital Techniques Sessional",
        "Vector Analysis & Linear Algebra",
        "Inorganic and Physical Chemistry (Theory)",
        "Inorganic and Physical Chemistry Sessional",
        "Software Development Project-I (Project)"
    ],
    "2nd Year Even Semester" => [
        "Electrical Machine-1 (Theory)",
        "Electrical Machine-1 Sessional",
        "Numerical Methods & Discrete Mathematics (Theory)",
        "Numerical Methods & Discrete Mathematics Sessional",
        "Data Base Systems (Theory)",
        "Data Base Systems Sessional",
        "Co-ordinate Geometry & Partial Differential Equations",
        "Legal Issues, Industrial & Operational Management",
        "Electronic Shop Practice (Resource)"
    ],
    "3rd Year Odd Semester" => [
        "Electrical Machine-II (Theory)",
        "Electrical Machine-II Sessional",
        "Microprocessor, Assembly Language & Interfacing (Theory)",
        "Microprocessor, Assembly Language & Interfacing Sessional",
        "Software Engineering & Information System Design (Theory)",
        "Software Engineering & Information System Design Sessional",
        "Computer Architecture and Design",
        "Electromagnetic Fields & Waves",
        "Civil Engineering Drawing (Resource)",
        "Software Development Project-II (Project)"
    ],
    "3rd Year Even Semester" => [
        "Industrial Electronics (Theory)",
        "Industrial Electronics Sessional",
        "Communication Engineering (Theory)",
        "Communication Engineering Sessional",
        "Operating System (Theory)",
        "Operating System Sessional",
        "Basic Mechanical Engineering (Theory)",
        "Basic Mechanical Engineering Sessional",
        "Economics & Accountancy",
        "Electrical Services Design (Resource)"
    ],
    "4th Year Odd Semester" => [
        "Power System (Theory)",
        "Control Systems & Robotics (Theory)",
        "Control Systems & Robotics Sessional",
        "Digital Signal Processing (Theory)",
        "Digital Signal Processing Sessional",
        "Optional I (Theory)",
        "Optional I Sessional",
        "Optional II (Theory)",
        "Optional II Sessional",
        "Thesis/Project-I (Project)",
        "Industrial Training (Resource)",
        "Seminar (Resource)"
    ],
    "4th Year Even Semester" => [
        "Power Station, Switchgear & Protection (Theory)",
        "Computer Networks (Theory)",
        "Computer Networks Sessional",
        "Digital Image Processing (Theory)",
        "Digital Image Processing Sessional",
        "Optional III (Theory)",
        "Optional III Sessional",
        "Optional IV (Theory)",
        "Optional IV Sessional",
        "Thesis/Project-II (Project)"
    ]
];

// Optional courses (from your 4th year image)
$optionalCourses = [
    "Optional IT Courses" => [
        "Digital Communication",
        "Antennas & Propagations",
        "Radio & Satellite Communication",
        "Radio & TV Engineering",
        "Fiber Optic Communication",
        "Biomedical Engineering"
    ],
    "Optional III/IV Courses" => [
        "VLSI Design",
        "Network Planning",
        "Wireless Networks",
        "Artificial Intelligence",
        "Human Computer Interaction"
    ]
];

  // Display cards
  foreach ($coursesBySemester as $semester => $courses) {
    echo "<div class='semester-box'>";
    echo "<h2>$semester</h2>";
    echo "<ul>";
    foreach ($courses as $course) {
      echo "<li><a href='#'>$course</a></li>";
    }
    echo "</ul>";
    echo "</div>";
  }

  // Display optional courses separately
echo "<div class='optional-courses'>";
foreach ($optionalCourses as $category => $courses) {
    echo "<h3>$category</h3>";
    echo "<ul>";
    foreach ($courses as $course) {
        echo "<li><a href='#'>$course</a></li>";
    }
    echo "</ul>";
}
echo "</div>";
?>

    <!-- Extra Sections -->
    <div class="semester-box">
      <h2>Research Papers</h2>
      <ul>
        <li><a href="#">ECE Journals</a></li>
        <li><a href="#">Student Research</a></li>
      </ul>
    </div>

    <div class="semester-box">
      <h2>Software</h2>
      <ul>
        <li><a href="#">Project Repositories</a></li>
        <li><a href="#">Simulation Tools</a></li>
      </ul>
    </div>

    <div class="semester-box">
      <h2>Miscellaneous</h2>
      <ul>
        <li><a href="#">Class Notes</a></li>
        <li><a href="#">Reference Materials</a></li>
        <li><a href="#">Recorded Lectures</a></li>
      </ul>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>