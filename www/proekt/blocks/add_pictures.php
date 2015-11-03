<div>
	<div class="add_picture">
		<p class="p_header">Додати фото</p>
		<form action="" method="post" enctype="multipart/form-data">
			<center><input class="button " type="file" name="filename" accept="image/jpeg,image/png,image/gif" required>
			<input class="button p_header" type="submit" name="upload" value="Завантажити"></center>
		</form>
	</div>
	<?php 
		if(isset($_POST["upload"]))
		{
			if($_FILES["filename"]["type"]=="image/jpeg" or $_FILES["filename"]["type"]=="image/png" or $_FILES["filename"]["type"]=="image/gif")
			{
				if($_FILES["filename"]["size"] > 1024*3*1024)
					{
					echo ("<p class='error_file'>Розмір перевищує 3 Мб</p>");
					}
				if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
					{
					move_uploaded_file($_FILES["filename"]["tmp_name"], "images/pictures/".$_FILES["filename"]["name"]);
					} 
				else echo("<p class='error_file'>Помилка загрузки </p>");
			}
			else echo ("<p class='error_file'>Помилка типу файлу</p>");
		}
	?>
</div>
