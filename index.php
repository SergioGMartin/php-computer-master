<?php 
include 'header.php';

?>

        <h1>Composez votre PC gaming sur mesure</h1>
        <form method="get" action="calcule.php">
            <h2 class="mt-4 mb-2">Composants</h2>
            <div class="form-group">
                <label for="cpu">Processeur</label>                
                <select name="cpu" class="form-control">
                    <?php foreach($cpus as $index => $valeur ): ?>
                        <option value="<?= $index ?>"><?= $valeur[0] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ram">Mémoire vive</label>
                <select name="ram" class="form-control">
                    <?php foreach($rams as $index => $valeur):?>
                        <option value="<?= $index ?>"><?= $valeur[0] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="gpu">Carte graphique</label>
                <select name="gpu" class="form-control">
                    <?php foreach($gpus as $index => $valeur ): ?>
                        <option value="<?= $index ?>"><?= $valeur[0] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="os">Système d'exploitation</label>
                <select name="os" class="form-control">
                    <?php foreach($oss as $index => $valeur): ?>
                        <option value="<?= $index ?>"><?= $valeur[0] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <h2 class="mt-4 mb-2">Accessoires</h2>
            <?php foreach($acs as $index => $valeur): ?>
                <div class="form-group form-check">
                    <input name="a<?= $index ?>" type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="<?= $valeur[1] ?>"><?= $valeur[0] ?></label>
                </div>
            <?php endforeach ?>

            <button type="submit" class="btn btn-primary">Calculer</input>
        </form>
    </div>
</body>
</html>