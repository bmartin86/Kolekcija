<h3>Dodaj novi film:</h3>
<?php/*
CREATE TABLE dummy (
	`film_id` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
	`naslov` VARCHAR(99) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`zanr_id` TINYINT(4) NOT NULL,
	`godina` YEAR NOT NULL,
	`trajanje` SMALLINT(5) UNSIGNED NOT NULL,
	`slika` BLOB NULL DEFAULT NULL,
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL
)
*/?>
<form method="POST" action="/filmovi" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="naslov"> Naslov filma:</label>
        <br>
        <input maxlength="99" type="text" name="naslov" required="true" value="">
        <br>

        <label for="zanr_id"> Žanr:</label>
        <br>
        <textarea name="description" rows="4" cols="20" required="false" value="">
        </textarea>
        <br>

        <label for="godina"> Godina:</label>
        <br>
        <input min="1950" max="<script>document.write( new Date().getUTCFullYear() );</script>" type="number" name="godina" required="true"
               value="">
        <br>
        <br>

    </div>
    <div class="form-group">
        <input type="submit" name="dodaj_film_sbm" value="Dodaj novi film">
    </div>
</form>

