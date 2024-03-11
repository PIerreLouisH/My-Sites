<script src='https://www.google.com/recaptcha/api.js'></script>
<section>
    <h1>Contactez-nous</h1>
    <div class="articles">
        <div class="contact">

            <form id="contact" method="post" action="../controller/contact.php">
                <p>
                    <label for="raison">Votre demande concerne ?</label></br>
                    <select name="raison" id="raison" required="required">
                        <option value="">Choisissez une option</option>
                        <option value="probleme_technique">Problème technique</option>
                        <option value="bug_affichage">Bug d'affichage</option>
                        <option value="nouvelle_evenement">Proposition d'événement</option>
                        <option value="Contenue_illegale">Contenue illegale</option>
                        <option value="évènement_obsolète">Evenement obsolète</option>
                    </select>
                </p>

                <p>
                    <label for="Quietevous">Vous êtes :</label></br>
                    <select name="Quietevous" id="Quietevous" required="required">  
                        <option value="">Choisissez une option</option>
                        <option value="Organisateur">Organisateur</option>
                        <option value="Client">Client</option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Résident">Résident</option>
                    </select>
                </p>

                <p>
                    <label for="Nom">Votre Nom-Prenom</label></br>
                    <input type="text" name="Nom" id="pseudo" placeholder="Ex : Señor Carmona" />
                </p>

                <p>
                    <label for="E-mail">E-mail:</label></br>
                    <input type="email" name="email" id="email" placeholder="Ex : monadressemail@gmail.com" />
                </p>

                <p>
                    <label for="message">Votre message :</label><br />
                    <textarea name="message" id="message" rows="10" cols="50">
                    </textarea>       
                </p>
                
                <div class="g-recaptcha" data-sitekey="6LcILn8UAAAAAGTugVBvg_R0CSzAyvsCI4ID3OlB"></div><br>
                
                <div class="btn-form">
                    <input class="btn-contact" name="envoyer" type="submit" value="Envoyer" />
                </div>
            </form>
        </div>
    </div>
    <div class="carte">
        <a href="index.php?action=1#carte"><button class="btn-contact"> Se situer </button></a>
    </div>
</section>