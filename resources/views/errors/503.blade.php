<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Under Development</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
    }

    .container img {
      width: 180px;
      max-width: 80%;
      margin-bottom: 20px;
    }

    .text {
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }
  </style>
</head>

<body>

  <div class="container">
    <img id="logo" src="{{ asset('images/undraw_maintenance_4unj.svg') }}" alt="Logo">
    <div class="text" id="statusText">
      Website Under Development
    </div>
  </div>

  <script>
    // Vanilla JS
    document.addEventListener("DOMContentLoaded", () => {
      console.log("Page loaded");
    });
  </script>

</body>

</html>
