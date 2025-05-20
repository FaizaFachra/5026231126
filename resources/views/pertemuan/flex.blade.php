<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Responsive Flexbox Website</title>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

body {
  background-color: #f8f9fa;
}

.header {
  background-color: #007bff;
  color: white;
  text-align: center;
  padding: 50px 20px;
}

.navbar {
  display: flex;
  justify-content: center;
  background-color: #333;
}

.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.container {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
}

.sidebar {
  flex: 25%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main-content {
  flex: 75%;
  background-color: white;
  padding: 20px;
}

.card {
  background-color: #ffffff;
  padding: 20px;
  margin: 10px 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.footer {
  text-align: center;
  padding: 20px;
  background-color: #ddd;
}

@media screen and (max-width: 768px) {
  .container {
    flex-direction: column;
  }
  .sidebar, .main-content {
    flex: 100%;
  }
}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>My Responsive Flexbox Website</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Contact</a>
</div>

<!-- Content -->
<div class="container">
  <div class="sidebar">
    <h2>About Me</h2>
    <p>Some text about me...</p>
    <div class="card">Image Placeholder</div>
    <div class="card">Another Image</div>
  </div>
  <div class="main-content">
    <h2>Main Content</h2>
    <p>This is a responsive layout using Flexbox.</p>
    <div class="card">Content Section 1</div>
    <div class="card">Content Section 2</div>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <p>Footer Section</p>
</div>

</body>
</html>
