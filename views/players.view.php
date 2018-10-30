<!--Requires head -->
<?php require 'partials/head.php'; ?>
    <div class="section2">
        <div class="container pt-4 pb-4 fadeIn">
            <h1>Tijdelijke Speler</h1>

            <form action="send_mail" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <p>Gebruikersnaam</p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Email</p>
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-md-12" align="right">
                    <input type="submit" class="btn btn-primary" value="klik">
                </div>
            </form>
        </div> <!-- End container -->
    </div>
<?php require 'partials/foot.php'; ?>
<!--Requires foot -->