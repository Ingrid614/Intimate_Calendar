<?php require_once("connexion.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>cycle</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login_page_styles.css">
</head>
<body>
<div class="container space col-md-6" style="margin-top: 60px">
	<div class="card" style="width:550px">
        <div class="card-header" style="background-color:#CE007C; color:#fff; font-weight:bold;">BIENVENUE <?php
        $user_id = $_GET["id"];
        $req = $pdo->prepare("SELECT (user_name) FROM users where user_id=?");
        $params = array($user_id);
        $req->execute($params);
        $result = $req->fetch();
        $user_name = $result['user_name'];
        echo($user_name);
        ?>
        </div>
		<div class="card-body">
			<form method="POST" action="save_cycle.php?id=<?php echo($_GET["id"]);?>">
				<div class="form-group">
					<label class="label-control">Quand avez-vous eu vos dernieres regles?</label>
					<input type="date" name="date" class="form-control">
				</div>
				<div class="form-group">
					<label class="label-control">Combien de jours compte votre cycle?</label>
					<input type="text" name="cycle" class="form-control">
				</div>
                <div class="form-group">
					<label class="label-control">Vos regles durent combien de jours?</label>
					<input type="text" name="duree" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="submit_button" style="color:#fff; font-weight:bold;">Enregistrer</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>