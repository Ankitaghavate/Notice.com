<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notice Board</title>
 
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }
    .container {
      position: relative;
      text-align: center;
      color: red;
    }
    .background-image {
      width: 900px;
      height: 600px;
    }
    .content {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .options {
      margin-top: 0px;
    }
    .options a {
      text-decoration: none;
      padding: 10px 20px;
      margin: 0 10px;
      color: #fff;
      background-color: red;
      border-radius: 5px;
    }
    .options a:hover {
      background-color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="n1.jpg" alt="Background Image" class="background-image">
    <div class="content">
      <h1> Welcome to Online Notice Board </h1>
      <div class="options">
        <a href="http://localhost/Notice/sign_up.php">Sign up</a>
        <a href="http://localhost/Notice/add_notice.php">Add Notice</a>
      </div>
 </div>
  </div>
</body>
</html> 

