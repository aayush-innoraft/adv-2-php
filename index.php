<?php
include("./backend.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Automated email </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- form container  -->
  <div class="form-container">
    <!-- h2 in form container  -->
    <h2>User Info</h2>
    <!-- php to show if the message is send -->
    <!-- or an error occured   -->
    <?php if ($message): ?>
      <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    <!-- form  -->
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
      <!-- username input div  -->
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name" required>
      </div>
      <div class="form-group">
        <!-- email input div  --> 
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your email" required>
      </div>
      <!-- button to submit form  -->
      <button type="submit" name="btn">Submit</button>
    </form>
  </div>
</body>

</html>