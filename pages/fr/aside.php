<!-- BANNIERE DE RESERVATION A DROITE -->
<aside>
    <h2>Réservation</h2>
    <div>
        <h3>Chambres & Suites</h3>
        <form action="index.php?page=panier" method="post" class="reservationForm">
            <div>
                <label for="from">Date d'arrivée</label>
                <input type="text" id="from">
            </div>
            <div>
                <label for="to">Date de départ</label>
                <input type="text" id="to">
            </div>
            <div>
                <label for="nbChambre">Chambres</label>
                <select name="nbChambre" id="nbChambre">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div>
                <label for="nbAdulte">Adultes</label>
                <select name="nbAdulte" id="nbAdulte">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div>
                <label for="nbEnfant">Enfants</label>
                <select name="nbEnfant" id="nbEnfant">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Réservez" class="bouton-envoi">
            </div>
        </form>
    </div>
    <div>
        <h3>Restaurant Le Montesquieu</h3>
        <p>+33 1 01 02 03 05</p>
        <p><a href="mailto:reservation@le-montesquieu.com">reservation@le-montesquieu.com</a></p>
    </div>
    <div>
        <h3>SPA Visrama</h3>
        <p>+33 1 01 02 03 06</p>
        <p><a href="mailto:reservation@spa-visrama.com">reservation@spa-visrama.com</a></p>
    </div>
</aside>