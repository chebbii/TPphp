<?php   if($_GET["article"] == "modif" && $okx != false){ ?>
            <div class="article">
                <form method="GET">
                    <input type="text" name="identifiant" value="<?= $okxt['identifiant']; ?>" hidden>
                    <div class="title articleP">                        
                        <h1 style="text-align: center;">MODIFIER</h1>
                        <label for="titleXModif"><b>Titre</b></label>
                        <input type="text" placeholder="<?= $okx['title']; ?>" name="titleXModif" class="formConnexion">
                    </div>
                    <div class="content articleP">
                        <label for="contentXModif"><b>Content</b></label>
                        <input type="text" placeholder="<?= $okx['content']; ?>" name="contentXModif" class="formConnexion">
                    </div>
                    <div class="k1">
                        <button type="submit" name="xModif" class="suppbtn" value="true">suppr</button>
                    </div>
                </form>
            </div>
<?php   }
else if($_GET["article"] == "showAll" && $okx != false) { ?>
<?php       foreach ($okx as $x): ?>     
                <div class="article">
                    <div class="title articleP">
                        <h3><?= $x['title']; ?></h3>
                        
                    </div>

                    <div class="content articlepart">
                        <?= $x['content']; ?>
                    </div> 
                </div>
<?php       endforeach; ?>
        <ul> 
<?php       for($i=1; $i<=$pages; $i++) 
            {
                if($i==$actualPage) 
                {
?>
                    <li class="current"><?= $i; ?></li>
<?php           }  
                else 
                {
?>
                    <li><a class="page" href="index.php?article=showAll&page=<?= $i; ?>"><?= $i; ?></a></li>
<?php           }
            }
?>      </ul>
<?php   } else if(isset($_GET["id"]) && isset($_GET["titleAdvertEdit"]) && isset($_GET["contentAdvertEdit"]) && isset($_GET["advertEdit"])) { ?>

            <div class="article">
                <div class="title articlepart">
                    <a href="index.php?article=showAll&page=1" style="margin-left:4%;">Back</a>
                    <h3 style='color:red; text-align: center; margin-top:5%; width:70%; margin-left:15%;'>Your advert has been updated !</h3>
                </div>
            </div>
<?php   } else if($_GET["article"] == "deleteOne" && isset($_GET["id"])) { ?>

           
<?php   }
 else if($_GET["article"] == "showOne" && isset($_GET["id"])) { ?>    
                <div class="article">
                    <div class="title articleP">
                        <h3><?= $pk['title']; ?></h3>
                    </div>

                    <div class="content articleP" >
                        <?= $ok['content']; ?>
                        
                                </div>
                               

                        <?php                    } ?> 
            
                    <div class="k1">
                        <form method="POST">
                            <div class="title articleP">                        
                                <h3>ajouter commentaire</h3>
                                <input type="text" name="identifiant" value="<?= $myadvert['identifiant']; ?>" hidden>
                                <label for="xCommentU"><b>User</b></label>
                                <input type="text" name="xCommentU" class="formConnexion">
                                <label for="xCommentContent"><b>Content</b></label>
                                <input type="text" name="xtCommentContent" class="formConnexion">
                                <button type="submit" name="xComment" class="suppbtn" value="true">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
        <?php } else if (!empty($_GET["article"])) { ?>

            <div class="article">
                <div class="title articleP">
                    
                </div>
            </div>
<?php   } ?>
