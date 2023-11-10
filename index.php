<?php
  include('config/app.php');
  include('html/header.php');
  include('fct/item.php');
  include('fct/request.php');
  include('connexion.php');
?>
 <div class="card">
   <!-- /.card-header -->
   <div class="card-footer">
	 <!-- Formulaire d'ajout -->
		<form action="addItem.php" method="POST">
			<div class="input-group input-group-sm">
				<input type="text" class="form-control" name="intitule">
				<span class="input-group-append">
					<button type="submit" class="btn btn-info btn-flat">+</button>
				</span>  
			</div>
		</form>

	 <!-- List -->
		<ul class="todo-list ui-sortable" data-widget="todo-list">
			<?php
				
				$stmt = $conn->prepare("SELECT * FROM todo");
				$stmt->execute(); 
				while ($item = $stmt->fetch()) {	
				echo displayItem( $item);
				}
				?>
		</ul>
   </div>			  
<?php
include('html/footer.php');
?>
