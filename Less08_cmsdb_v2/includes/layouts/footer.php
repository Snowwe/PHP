    <footer>Copyright 2017</footer>

	</body>
</html>
<?php
  // 5. Закрываем соединение с БД
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
