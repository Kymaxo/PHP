
<h1 class="text-center"> Login </h1>
    <?php if (! $isValid): ?>
            <ul class="alert alert-danger">
            <?php for ($i = 0; $i < count($errors); $i++): ?>
            <li> <?= $errors[$i] ?> </li>
            <?php endfor ?>
                </ul>
            <?php endif ?>         
            <form method="POST">
                <div class="form-group">
                    <label for="email">Identifiant</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe</label>
                    <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Connexion</button>
            </form>
        