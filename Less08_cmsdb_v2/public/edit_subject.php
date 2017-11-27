<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>

<?php find_selected_page(); ?>

<?php
	if (!$current_subject) {
		// Если вдруг id пропал или не обозначен или не найден в БД
		redirect_to("manage_content.php");
	}
?>

<?php
if (isset($_POST['submit'])) {
	// Обработка формы
	
	// Валидация
	$required_fields = array("menu_name", "position", "visible");
	validate_presences($required_fields);
	
	$fields_with_max_lengths = array("menu_name" => 30);
	validate_max_lengths($fields_with_max_lengths);
	
	if (empty($errors)) {
		
		// Обновление 

		$id = $current_subject["id"];
		$menu_name = mysql_prep($_POST["menu_name"]);
		$position = (int) $_POST["position"];
		$visible = (int) $_POST["visible"];
	
		$query  = "UPDATE subjects SET ";
		$query .= "menu_name = '{$menu_name}', ";
		$query .= "position = {$position}, ";
		$query .= "visible = {$visible} ";
		$query .= "WHERE id = {$id} ";
		$query .= "LIMIT 1";
		$result = mysqli_query($connection, $query);

		if ($result && mysqli_affected_rows($connection) >= 0) {
			// Успешно
			$_SESSION["message"] = "Объект обновлен.";
			redirect_to("manage_content.php");
		} else {
			// не успешно
			$message = "Обновление объекта не удалось.";
		}
	
	}
} else {
	// Возможно это GET запрос
	
} // end: if (isset($_POST['submit']))

?>

<?php include("../includes/layouts/header.php"); ?>

<main>
  <nav>
		<?php echo navigation($current_subject, $current_page); ?>
  </nav>
  <div id="page">
		<?php 
			if (!empty($message)) {
				echo "<div class=\"message\">" . htmlentities($message) . "</div>";
			}
		?>
		<?php echo form_errors($errors); ?>
		
		<h2>Редактирование объекта: <?php echo htmlentities($current_subject["menu_name"]); ?></h2>
		<form action="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>" method="post">
		  <p>Пункт меню:
		    <input type="text" name="menu_name" value="<?php echo htmlentities($current_subject["menu_name"]); ?>" />
		  </p>
		  <p>Позиция:
		    <select name="position">
				<?php
					$subject_set = find_all_subjects();
					$subject_count = mysqli_num_rows($subject_set);
					for($count=1; $count <= $subject_count; $count++) {
						echo "<option value=\"{$count}\"";
						if ($current_subject["position"] == $count) {
							echo " selected";
						}
						echo ">{$count}</option>";
					}
				?>
		    </select>
		  </p>
		  <p>Видимость:
		    <input type="radio" name="visible" value="0" <?php if ($current_subject["visible"] == 0) { echo "checked"; } ?> /> Нет
		    &nbsp;
		    <input type="radio" name="visible" value="1" <?php if ($current_subject["visible"] == 1) { echo "checked"; } ?>/> Да
		  </p>
		  <input type="submit" name="submit" value="Редактировать объект" />
		</form>
		<br />
		<a href="manage_content.php">Отмена</a>
		&nbsp;
		&nbsp;
		<a href="delete_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>" onclick="return confirm('Вы уверены?');">Удалить объект</a>
		
	</div>
</main>

<?php include("../includes/layouts/footer.php"); ?>
