<?php
require "db_connect.php";
?>


<html>
    <head>
        <title>To do List</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div class="main-section">
            <div class="add-section">
		<form action="APP/add.php" method="POST" autocomplete="off">
		<?php if(isset($_GET["mess"]) && $_GET["mess"] == "error"){ ?>

                    <input type="text"
			   name="title"
			   style="border-color: #ff6666"
                           placeholder="This field is required" />
                <button type="submit">Add &nbsp; <span>&#43;</span></button>



		<?php }else{  ?>
                    <input type="text"
                           name="title"
                           placeholder="What do you need to do?" />
		<button type="submit">Add &nbsp; <span>&#43;</span></button>
		<?php } ?>
                </form>
            </div>

            <?php
		           
		$todos = $connect->query("SELECT * FROM todos ORDER BY id DESC");
	     ?>
	    <div class="show-todo-section">
		<?php
		if($todos->rowCount() <= 0)
		{?>
            	<div class="todo-item">
			<div class="empty">
			<img src="IMG/f.png" width="100%">
			<img src="IMG/loading.webp" width="80px">
				
	    	</div>
		<?php }?>

		<?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>

			<div class="todo-item">
			<span id = "<?php echo $todo ["id"]; ?>"  
			class ="remove-to-do"> X </span>
		<?php if($todo["checked"]){ ?>
			<input type="checkbox"
				class= "check-box"
				data-todo-id = "<?php echo $todo["id"]; ?>"
				checked />
			<h2 class="checked"> <?php echo $todo["title"]?> </h2>

		<?php }else { ?>
			<input type="checkbox"
				data-todo-id = "<?php echo $todo["id"]; ?>"
				class= "checkbox" 
					/>
			<h2> <?php echo $todo["title"]?> </h2>
		<?php } ?>
		<br>
		<small>created: <?php echo $todo["date_time"]?></small>
            		
            </div>
		
	<?php }?>	


            </div>
	</div>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/jquery.js"></script>
	<script src="JS/script.js"></script>
    </body>
</html>
