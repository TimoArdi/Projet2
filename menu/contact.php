<h2 id="CONTACT">CONTACT</h2>
<div class="contactavis">
    <nav class="formulaire">
        <form action="msg" method="post">
            <div class="informations">
                <p>Vous avez une urgence, une requête à faire à Batman ?<br>
                    Vous pouvez utiliser le BatSignal !</p>
                <div>
                    <input type="text" id="name" name="user_name" placeholder="Nom" required>
                </div>
                <div>
                    <input type="text" id="firstname" name="user_name" placeholder="Prénom" required>
                </div>
                <div>
                    <input type="email" id="mail" name="user_mail" placeholder="E-mail" required>
                </div>
                <div>
                </div>
                <select name="reasons" id="reasons-select">
                    <option value="" selected>Quelle est la raison de la requête ?</option>
                    <option value="">Je souhaite réserver mon trajet nocturne</option>
                    <option value="">Je suis coincé(e) sur le BatCub</option>
                    <option value="">Mon enfant est tombé à l'eau</option>
                    <option value="">La ville brûle</option>
                    <option value="">Je sais qui est le pousseur des quais</option>
                    <option value="">Je m'ennuie, la ville est trop calme</option>
                </select>
                <div>
                    <textarea id="msg" name="user_message" placeholder="Écrivez votre message"></textarea>
                </div>
                <button class="button" type="submit">Envoyer la requête</button>
            </div>
        </form>
    </nav>
    <div class="photobatman">
        <img src="Batman.png" alt="photocontact">
    </div>
</div>