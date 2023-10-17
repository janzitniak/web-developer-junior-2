<h1>Kontaktná stránka</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid assumenda atque corporis doloremque ducimus eos error est, exercitationem incidunt iure natus officia omnis quasi repellat, repellendus, saepe vero voluptatum!</p>

<!--Úloha č.1
Skúste implementovať kontaktný formulár vo Vašej webovej stránke zameranej na obec.
Formulár by mohol obsahovať:
Meno a priezvisko dopytujúceho (povinný údaj)
E-mail (povinný údaj)
Telefón (nepovinný)
Otázka, či ste občanom daného mesta (povinný údaj). Odpoveď je áno alebo nie (použitie formulárového prvku radio button). Ukážka radio button:

Poznámka (nepovinný)
-->

<?php
    if (isset($_POST["odoslany"])) {
        $meno = $_POST["meno"];
        echo "Meno dopytujúceho je: ".$meno;

        $email = $_POST["email"];
        echo "<br>Email je: ".$email;

        $telefon = $_POST["telefon"];
        echo "<br>Telefón je: ".$telefon;

        $obcan = $_POST["obcan"];
        echo "<br>Občanom mesta: ".$obcan;

        $poznamka = $_POST["poznamka"];
        echo "<br>Poznámka: ".$poznamka;
    }
    else {
    ?>
    <form action="#" method="POST">
        <label for="meno">Vaše meno a priezvisko:</label>
        <input type="text" id="meno" name="meno" required><br>

        <label for="email">Zadajte Váš e-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="telefon">Telefón:</label>
        <input type="tel" name="telefon" id="telefon"><br>

        <label for="obcan">Ste občanom tohto mesta?</label>
        <input type="radio" name="obcan" id="obcan" value="Áno" required>Áno
        <input type="radio" name="obcan" id="obcan" value="Nie" required>Nie<br>

        <label for="poznamka">Poznámka</label>
        <textarea cols="30" rows="20" name="poznamka" id="poznamka"></textarea><br>

        <input type="hidden" name="odoslany" value="1">
        <input type="submit" value="Odoslať">
    </form>
    <?php
    }
    ?>