<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
  <nav>
		<br />
		<a href="admin.php">&laquo; Главное меню</a><br />
		
		<?php echo navigation($current_subject, $current_page); ?>
		<br />
		<a href="new_subject.php">+ Добавить обьект</a>
  </nav>
  <div id="page">
		<?php echo message(); ?>
		<?php if ($current_subject) { ?>
	    <h2>Управление обьектами</h2>
			Пункт меню: <?php echo htmlentities($current_subject["menu_name"]); ?><br />
			Позиция: <?php echo $current_subject["position"]; ?><br />
			Видимость: <?php echo $current_subject["visible"] == 1 ? 'да' : 'нет'; ?><br />
			<br />
			<a href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Редактировать объект</a>
			
			<div style="margin-top: 2em; border-top: 1px solid #000000;">
				<h3>Страницы в текущем объекте:</h3>
				<ul>
				<?php 
					$subject_pages = find_pages_for_subject($current_subject["id"]);
					while($page = mysqli_fetch_assoc($subject_pages)) {
						echo "<li>";
						$safe_page_id = urlencode($page["id"]);
						echo "<a href=\"manage_content.php?page={$safe_page_id}\">";
						echo htmlentities($page["menu_name"]);
						echo "</a>";
						echo "</li>";
					}
				?>
				</ul>
				<br />
				+ <a href="new_page.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Добавить новую страницу этого объекта</a>
			</div>

		<?php } elseif ($current_page) { ?>
			<h2>Управление страницами</h2>
			Пункт меню: <?php echo htmlentities($current_page["menu_name"]); ?><br />
			Позиция: <?php echo $current_page["position"]; ?><br />
			Видимость: <?php echo $current_page["visible"] == 1 ? 'yes' : 'no'; ?><br />
			Контент:<br />
			<div class="view-content">
				<?php echo htmlentities($current_page["content"]); ?>
			</div>
			<br />
      <br />
      <a href="edit_page.php?page=<?php echo urlencode($current_page['id']); ?>">Редактировать страницу</a>
			
		<?php } else { ?>
			Пожалуйста выберите объект или страницу
		<?php }?>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
