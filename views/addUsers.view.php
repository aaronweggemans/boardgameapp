<!--Requires head -->
<?php require "partials/head.php" ?>
    <section class="section2">
        <div class="container pt-4 pb-4 fadeIn">
            <h1>Voeg een gebruiker toe!</h1>
            <form action="add_user" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <p>Voor- en achternaam</p>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="lname">
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
                <div class="row">
                    <div class="col-md-4">
                        <p>Mobile</p>
                    </div>
                    <div class="col-md-8">
                        <input type="number" class="form-control" name="mobile">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Wachtwoord</p>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="align" align="right">
                            <input type="submit" class="btn btn-primary" value="Klik">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<!--Requires foot -->
<?php require "partials/foot.php" ?>