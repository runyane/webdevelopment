<!doctype html>
<html lang="en">
  <!--
  Name: E. Runyan
  Date: Feb. 15, 2026
  Course: IS_LT 4355-7355
  Description: Web Design and Development
-->

  <!-- Head section -->

  <head>
    <!-- Meta data for charset and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website title -->
    <title>Professional Portfolio Homepage</title>

    <!-- Link to external CSS for styling -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">

    <link rel="shortcut icon" type="image/x-icon" href="media/images/favicon.ico">

    <!-- Custom font used here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet">
  </head>

  <!-- Body section content-->

  <body>

    <?php include 'header.php'; ?>

    <!-- Hero section with comment, quote, and background image -->
    <section class="hero">
      <h1>
        Runyan Educator <br>
        Portfolio
      </h1>

      <div class="tagline">
        <p>Education should be enjoyable and practical.</p>

        <a href="">Learn More</a>
      </div>
      <blockquote>
        “All of life is a constant education.” ― Eleanor Roosevelt, The Wisdom
        Of Eleanor Roosevelt
      </blockquote>
    </section>
    
  
    <?php include 'footer.php'; ?>

  </body>
</html>
