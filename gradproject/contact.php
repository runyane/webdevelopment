<!doctype html>
<html lang="en">
  <!--
  Name: E. Runyan
  Date: Feb. 2, 2026
  Course: IS_LT 4355-7355
  Description: Web Design and Development
-->

  <!-- Head section -->

  <head>
    <!-- Meta data for charset and responsive viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website title -->
    <title>Runyan Personal Portfolio: Contact Me</title>

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

  <body>
  <?php include 'header.php'; ?>
    
  <section id="contact-page">
    <div class="contact-title">
      <h1>Contact Me</h1>
      <p>For more information</p>
    </div>
    <form>
      <fieldset class="contact-info">
        <legend>Contact Information</legend>
      <label class="user-info">Title:
      <select name="title" id="user-title" required>
        <option value="">Dr.</option>
        <option value="Mr." selected>Mr.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Ms.">Ms.</option>
        <option value="Ms.">Ms.</option>
      </select></label>
 
      <label class="user-info">Name:
      <input type="text" name="name" id="user-name" placeholder="First, Last Name" required></label>
      
      <label class="user-info">Email:
      <input type="email" name="email" id="email" placeholder="example@email.com" required></label>
    </fieldset>
    <fieldset class="contact-type">
      <legend>Comment or Question</legend>

      <p>Type of contact:</p>
      
      <label class="message-type">Comment: <input type="checkbox" name="commentbtn" id="commentbtn" required></label>
      
      <label class="message-type">Question: <input type="checkbox" name="question" id="question" required></label>

    </fieldset>
    <fieldset class="message-field">
      <label class="user-info">Message:
      <textarea name="message" id="user-message" cols="20" rows="10" required placeholder="Add message"></textarea></label>
    </fieldset>
      <button type="submit">Submit</button>
    </form>
  </section>

  <?php include 'footer.php'; ?>
  </body>
</html>
