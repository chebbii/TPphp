<?php
	require('function.php');
	require_once('form.php');
	
	
	$PDO = connexionDB();
	
	if(isset($_POST["loginBDD"])) {
		$userName = connexionUserDB($PDO, $_POST["uname"], $_POST["psw"]);
	} else if(isset($_POST["logoutBDD"])) {
		session_unset();
	} else if(isset($_POST["signupBDD"])) {
		$alert = addUser($PDO, $_POST["unamesignup"], $_POST["pswsignup"]); 
	}
	if (isset($_SESSION["connexion"]))
	{
		
		if(isset($_POST["xPost"])) {
			addAdvert($PDO, $_POST["titleAdvert"], $_POST["contentAdvert"], $_SESSION["identifiant"]);
		}
		
		if(isset($_POST["xComment"])) {
			addComment($PDO, $_POST["xCommentU"], $_POST["xCommentContent"], $_POST["identifiant""]);
			$okxComment = viewAllCommentByArticle($PDO, $_POST["identifiant""]);
		}
		
		if($_GET["article"] == "editOne" || $_GET["article"] == "showOne" && isset($_GET["identifiant"]) && !empty($_GET["identifiant""])) {
			$okx = viewx($PDO, $_GET["identifiant""]);
		
		}
		else if($_GET["article"] == "showAll" && isset($_GET['page'])) {
			$xPerPage=5; 
			$pages=ceil(countx($PDO)/$xPerPage);
	     	$actualPage=intval($_GET['page']);
		 
		    if($actualPage>$pages) 
		    {
		          $actualPage=$pages;
		    }
			$pagePosition=($actualPage-1)*$xPerPage;
			$myArrayx = showxByPage($PDO, $pagePosition, $xPerPage);
		
		} else if ($_GET["article"] == "deleteOne" && isset($_GET["identifiant"]) && !empty($_GET["identifiant"])) {
			suppx($PDO, $_GET["identifiant"]);
	
		} else if ($_GET["suppx"] == "true") {
			suppx($PDO, $_GET["titleAdvertEdit"], $_GET["contentxsupp"], $_GET["identifiant"]);
		}
	}