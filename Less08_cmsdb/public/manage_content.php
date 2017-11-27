<?php include("../includes/header.php"); ?>
<? require_once("../includes/dbconnection.php") ?>
<? require_once("../includes/function.php") ?>
<? include("../includes/include.php");?>

  <div id="page">
    <h2>Административная панель (редактор)</h2>
<?php
if($select_subject_id){?>

  <?php echo $select_subject_id;?>

<?php } elseif($select_page_id){?>

  <?php echo $select_page_id;?>

<?php } else{?>

  <p>Choose menu point</p>

<?php }?>
  </div>
</main>

<?php include("../includes/footer.php"); ?>

