<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<main>
  <nav>
		<?php echo navigation($current_subject, $current_page); ?>
  </nav>
  <div id="page">
		<?php echo message(); ?>
		<?php $errors = errors(); ?>
		<?php echo form_errors($errors); ?>
		
		<h2>Создать объект</h2>
		<form action="create_subject.php" method="post">
		  <p>Пункт меню:
		    <input type="text" name="menu_name" value="" />
		  </p>
		  <p>Позиция:
		    <select name="position">
				<?php
					$subject_set = find_all_subjects();
					$subject_count = mysqli_num_rows($subject_set);
					for($count=1; $count <= ($subject_count + 1); $count++) {
						echo "<option value=\"{$count}\">{$count}</option>";
					}
				?>
		    </select>
		  </p>
		  <p>Видимость:
		    <input type="radio" name="visible" value="0" /> Не
		    &nbsp;
		    <input type="radio" name="visible" value="1" /> Да
		  </p>
		  <input type="submit" name="submit" value="Создать объект" />
		</form>
		<br />
		<a href="manage_content.php">Отмена</a>
	</div>
</main>

<?php include("../includes/layouts/footer.php"); ?>
