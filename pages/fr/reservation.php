<main>
    <section class="w100 pageReservation">
        <h1>Réservation</h1>
        
        <!-- CALENDRIER DE SELECTION DES DATES DE RESERVATION -->
        <div class="datepicker ll-skin-melon"></div>
        
        <!-- FORMULAIRE DE RESERVATION -->
        <form action="index.php?page=panier" method="post" class="reservationForm">
            <div>
                <div>
                    <label for="from">Date d'arrivée</label>
                    <input type="text" id="from" class="from" size="10">
                </div>
                <div>
                    <label for="to">Date de départ</label>
                <input type="text" id="to" class="to" size="10">
                </div>
            </div>
            <div>
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
            </div>
            <div>
                <input type="submit" value="Réservez" class="bouton-envoi">
            </div>
        </form>
    </section>
</main>