<!--Requires head -->
<?php require 'partials/head.php'; ?>
    <div class="section1">
        <div class="row">
            <div class="col-lg-10 col-centered" align="center">
                <p class="welcome nopa fadeIn">Welkom <?php echo ucfirst($_SESSION['username']) ?>!</p>
                <small class="small nopa fadeIn">Op het bordgame app</small>
            </div>
        </div>
    </div>
<?php require 'partials/foot.php'; ?>
<!--Requires foot -->
