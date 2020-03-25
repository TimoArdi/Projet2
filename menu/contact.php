<h2 id="CONTACT">CONTACT</h2>
<div class="contactavis">
    <nav class="formulaire">
        <?php require_once("src/validationform.php");
        if($_POST && count($errors) === 0 ){
            require_once("src/form.php");
        }
        else {
        ?>
        <form action="../index.php#CONTACT" method="post">
            <div class="informations">
                <p>Vous avez une urgence, une requête à faire à Batman ?<br>
                    Vous pouvez utiliser le BatSignal !</p>
                <div>
                    <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder="Nom" value="<?php if(isset($_POST['name'])) echo htmlentities($_POST['name']);?>">
                </div>
                <div>
                    <p><?php if(isset($errors['name1'])) echo $errors['name1']; ?></p>
                </div>
                <div>
                    <label for="firstname"></label>
                    <input type="text" id="firstname" name="user_name" placeholder="Prénom" value="<?php if(isset($_POST['user_name'])) echo htmlentities($_POST['user_name']);?>" >
                </div>
                <div>
                    <p><?php if(isset($errors['user_name1'])) echo $errors['user_name1']; ?></p>
                </div>
                <div>
                    <label for="mail"></label>
                    <input type="email" id="mail" name="user_email" placeholder="E-mail" value="<?php if(isset($_POST['user_email'])) echo htmlentities($_POST['user_email']);?>" >
                </div>
                <div>
                    <div>
                        <p><?php if(isset($errors['user_email1'])) echo $errors['user_email1']; ?></p>
                    </div>
                </div>
                <p>
                    <label for="phone"></label>
                    <input type="tel" id="phone" name="user_phone" placeholder="Numero de telephone : " required value="<?php if(isset($_POST['user_phone'])) echo htmlentities($_POST['user_phone']);?>">
                </p>
                <div>
                <p><?php echo $errors['user_phone1']; ?></p>
                </div>
                <select name="reasons" id="reasons-select" required>
                    <option value="1"> Quelle est la raison de la requête ?</option>
                    <option value="2">Je souhaite réserver mon trajet nocturne</option>
                    <option value="3">Je suis coincé(e) sur le BatCub</option>
                    <option value="4">Mon enfant est tombé à l'eau</option>
                    <option value="5">La ville brûle</option>
                    <option value="6">Je sais qui est le pousseur des quais</option>
                    <option value="7">Je m'ennuie, la ville est trop calme</option>
                </select>
                <div>
                    <label for="msg"></label>
                    <textarea id="msg" name="user_message" placeholder="Écrivez votre message"><?php if(isset($_POST['user_message'])) echo htmlentities($_POST['user_message']);?></textarea>
                </div>
                <p><?php echo $errors['user_message1']; ?></p>
                <button class="button" type="submit">Envoyer la requête</button>
            </div>
        </form>
        <?php } ?>
    </nav>
    <div class="photobatman">
        <img src="Batman.png" alt="photocontact">
    </div>
</div>