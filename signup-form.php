<?php
include "header.php";
?>
<h2>Signup</h2>
    <form method="post" action="signup.php">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>

<div>
    <form action="index.php" method="get">
        <button type="submit">Back to Homepage</button>
    </form>
</div>