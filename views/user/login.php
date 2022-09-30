<?php if (!empty($error)): ?>
    <p class="col-5 offset-5 container-fluid">
        <?php echo "Login Failed!!"; ?>
    </p>
<?php endif ?>


<section class="container-fluid row g-0">
    <div class="col-3">
    </div>
    <div class="col-6 container-fluid">
        <form method="post" function="login" class="form-horizontal">
            <div class="form-group">
                <label for="name" class="control-label col-3">Username:</label>
                <input type="text" name="name" placeholder="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-3">Password:</label>
                <input type="password" name="password" placeholder="safePw!" class="form-control"/>
            </div>
            <input type="submit" value="Login" class="btn btn-primary"/>
        </form>
    </div>
</section>