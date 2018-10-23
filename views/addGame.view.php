<?php require "partials/head.php" ?>
<section class="section2">
    <div class="container pt-4 pb-4 fadeIn">
        <h1>Voeg een game toe!</h1>
        <form action="add_game" method="post">
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>Game naam</p>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>Aantal spelers</p>
                </div>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="nop">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>Datum van Release <small>(In jaren)</small></p>
                </div>
                <div class="col-md-8">
                    <input type="number" maxlength="4" class="form-control" name="dor">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>Hoelang duurt dit spelletje
                        <small>(in uren)</small>
                    </p>
                </div>
                <div class="col-md-8">
                    <input type="number" class="form-control" name="duration">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>Omschrijving</p>
                </div>
                <div class="col-md-8">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10">

                        </textarea>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="align" align="right">
                        <input type="submit" class="btn btn-primary" value="Klik">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php require "partials/foot.php" ?>
