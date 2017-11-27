<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<?php
	// if (!$current_page) {
	// 	// Если вдруг id пропал или не обозначен или не найден в БД
	// 	redirect_to("manage_content.php");
	// }
?>

<?php
if (isset($_POST['submit'])) {
	// Обработка формы
	
	// Валидация
	// $required_fields = array("menu_name", "position", "visible");
	// validate_presences($required_fields);
	
	// $fields_with_max_lengths = array("menu_name" => 30);
	// validate_max_lengths($fields_with_max_lengths);
	
	if (empty($errors)) {
		
		// Обновление 
		$subject_id = $current_subject["id"];
		$menu_name = mysql_prep($_POST["menu_name"]);
		$position = (int) $_POST["position"];
        $visible = (int) $_POST["visible"];
        $content=mysql_prep($_POST["content"]);
	
		$query  = "INSERT INTO pages (";
		$query .= "subject_id, menu_name, position, visible, content";
		$query .= ") VALUES (";
		$query .= "{$subject_id}, '{$menu_name}', {$position}, {$visible}, '{$content}'";
		$query .= ")";	
		$result = mysqli_query($connection, $query);

		if ($result) {
			// Успешно
			$_SESSION["message"] = "Страница создана";
			redirect_to("manage_content.php?subject=".urldecode($current_subject["id"]));
		} else {
			// не успешно
			$_SESSION["message"] = "Страница не создана.";
		}
	}
} 
?>
<main>
  <nav>
		<?php echo navigation($current_subject, $current_page); ?>
  </nav>
  <div id="page">
		<?php echo message(); ?>
		<?php $errors = errors(); ?>
		<?php echo form_errors($errors); ?>
		
        <h2>Создать страницу</h2>
        <form action="new_page.php?subject=<?php echo urldecode($current_subject["id"]); ?>" method="post">  
<p>Пункт меню
<input type="text" name="menu_name" value=""/>
</p>
<p>Позиция:
	<select name="position">
		<?php
    $page_set = find_pages_for_subject($current_subject["id"]);
    $page_count = mysqli_num_rows($page_set);
    for ($count = 1; $count <= ($page_count + 1); $count++) {
        echo "<option value=\"{$count}\">{$count}</option>";
    }
        ?>
	</select>
</p>
<p>Видимость:
    <input type="radio" name="visible" value="0"> Нет 
    &nbsp;
    <input type="radio" name="visible" value="1"> Да
</p>
<p>Content: <br/>
<textarea name="content"  cols="80" rows="20"></textarea>
</p>
<input type="submit" name="submit" value="Create page">

        </form>
        <br />
		<a href="manage_content.php">Отмена</a>
	</div>
</main>
<?php include("../includes/layouts/footer.php"); ?>
