<!--Q-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Teams</title>
  <link rel="stylesheet" href="Admin.css">
</head>

<body>
  <header>
    <h1>Set Contest</h1>
  </header>
  <main>
    <form id="team-form">
      <label for="name-contest"> TFC Name:</label>
      <input type="text" id="name-contest" name="name-contest" required>
      <!-- <br>
      <label for="set-pass">Set Password:</label>
      <input type="password" id="set-pass" name="set-pass" required> -->
      <br>
      <div id="NumberofContest&OK">
        <label for="num-contests">Number of Contests:</label>
        <input type="number" id="num-contests" name="num-contests" min="1" max="6" required>
        <button type="button" onclick="NumOfCon()">OK</button>
        <div id="contest-labels"></div>
      </div>
      <br>
      <a href="Dashboard.html">Submit</a>
    </form>
  </main>
  <script src="AdminOnc.js"></script>
</body>
</html>
