<?php include "translator.php"; ?>

<h3 class="mt-3 text-info text-on-pannel">Dictionnaire français-anglais :</h3>
<hr class="my-4">

<div class="panel panel-primary bg-secondary p-3">
    <form action="#" method="post">
        <div class="panel-body row">
            <div class="form-group col-6">
                <label class="form-check-label text-white" for="word">Mot :</label>
                <input class="form-control" type="text" name="word" id="word">
            </div>
            <div class="form-group col-6">
                <label class="form-check-label text-white" for="direction">Sens de traduction :</label>
                <select class="form-control" id="direction" name="direction">
                    <option value="to English">Français=>Anglais</option>
                    <option value="to French">Anglais=>Français</option>
                </select>
            </div>
            <div class="form-group col-6">
                <input class='btn btn-light btn-lg' type="submit" name="submit" value="Traduire">
            </div>
        </div>
    </form>
</div>