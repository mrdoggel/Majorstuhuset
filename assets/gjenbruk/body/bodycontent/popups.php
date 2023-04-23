<div id="noblur" class="addContainerContainer">
    <div id="noblur" class="addContainer noblur">
        <div id="noblur" class="noblur">
            <form method="post" action="assets/connection/leggTilHjem.php">
                <p>Overskrift:</p>
                <textarea name="overskrift" style="padding: 5px;resize: vertical;width: 500px"></textarea>
                <p>Innhold:</p>
                <textarea name="innhold" style=" padding: 5px;resize: vertical;width: 500px"></textarea>
                <div id="noblur" class="addknapper noblur">
                    <button class="submitHjem">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                    <button type="button" id="avbrytHjemAdd">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="noblur" class="addContainerContainerAktuelt">
    <div id="noblur" class="addContainerAktuelt noblur">
        <div id="noblur" class="noblur">
            <form method="post" action="assets/connection/leggTilAktuelt.php">
                <p>Overskrift:</p>
                <textarea name="overskrift" style="padding: 5px;resize: vertical;width: 500px"></textarea>
                <p>Innhold:</p>
                <textarea name="innhold" style=" padding: 5px;resize: vertical;width: 500px"></textarea>
                <div id="noblur" class="addknapper noblur">
                    <button class="submitAktuelt">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                    <button type="button" id="avbrytAktueltAdd">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="noblur" class="addContainerContainerAnsatte">
    <div id="noblur" class="addContainerAnsatte noblur">
        <div id="noblur" class="noblur">
            <form method="post" action="assets/connection/leggTilAnsatte.php" enctype="multipart/form-data">
                <label for="img">Bytt profilbilde</label><br>
                <input type="file" id="img" name="bilde" accept="image/*"><br><br>
                <p>Navn:</p>
                <textarea name="navn" style="padding: 5px;resize: vertical;width: 500px"></textarea>
                <p>Stilling:</p>
                <textarea name="stilling" style="padding: 5px;resize: vertical;width: 500px"></textarea>
                <p>Beskrivelse:</p>
                <textarea name="beskrivelse" style=" padding: 5px;resize: vertical;width: 500px"></textarea>
                <div id="noblur" class="addknapper noblur">
                    <button class="submitAnsatte">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                    <button type="button" id="avbrytAnsatteAdd">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="noblur" class="addContainerContainerBestilling">
    <div id="noblur" class="addContainerBestilling noblur">
        <div id="noblur" class="noblur">
            <form method="post" action="assets/connection/leggTilBestilling.php">
                <p>Overskrift:</p>
                <textarea name="overskrift" style="padding: 5px;resize: vertical;width: 500px"></textarea>
                <p>Innhold:</p>
                <textarea name="innhold" style=" padding: 5px;resize: vertical;width: 500px"></textarea>
                <div id="noblur" class="addknapper noblur">
                    <button class="submitBestilling">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                    <button type="button" id="avbrytBestillingAdd">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="noblur" class="loginContainerContainer">
    <div id="noblur" class="loginContainer noblur">
        <div id="noblur" class="noblur" style="text-align: center;">
            <form method="post" action="assets/connection/login.php">
                <input placeholder="Brukernavn/E-post" name="brukernavn" type="text"></input><br><br>
                <input placeholder="Passord" name="passord" type="password"></input>
                <div id="noblur" class="addknapper noblur">
                    <button name="login_button" class="submitBestilling">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                    <button type="button" id="avbrytLogin">
                        <div id="noblur" class="inside">

                        </div>
                    </button>
                </div>
            </form>
            <a style="cursor: pointer;">Opprett ny adminbruker</a>
        </div>
    </div>
</div>