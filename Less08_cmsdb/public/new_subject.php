<?php include("../includes/header.php"); ?>
<? require_once("../includes/dbconnection.php") ?>
<? require_once("../includes/function.php") ?>
<? include("../includes/include.php");?>

<main>
  <div id="page">
    <h2>Create object</h2>
    <form action="create_subject.php" method="post">
    <label for="menuname">Menu name</label>
    <input type="text" name="menuname"><br><br>
    <label for="position">Position</label>
    <select name="position" id="position">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select><br><br>
    <label for="visible">Visible</label>
    <input type="radio" name="visible" checked>No
    <input type="radio" name="visible">Yes
    <br><br>
    <input type="submit" name="submit" value="Create object">
    <br><br>
    <a href="manage_content.php">Cancel</a>
   </form>




  </div>
</main>

<?php include("../includes/footer.php"); ?>

