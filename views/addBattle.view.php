<?php require "partials/head.php" ?>
<section class="section2">
    <div class="container pt-4 pb-4 fadeIn">
        <h1>Voeg een battle toe!</h1>
        <form action="add_battle" method="post">
            <div class="row">
                <div class="col-md-4">
                    <p>Datum Van de Battle</p>
                </div>
                <div class="col-md-8">
                    <input type="date" class="form-control" name="dtplayed">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Welk spel?</p>
                </div>
                <div class="col-md-8">
                    <select name="gameid" id="" class="form-control">
                        <?php
                            foreach ($games as $game)
                            {
                                echo "<option value='$game[0]'>$game[1]</option>";
                            }
                        ?>
                    </select>
<!--                    <input type="number" class="form-control" name="gameid">-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Aantal spelers</p>
                </div>
                <div class="col-md-8">
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Speler tegen speler</p>
                </div>
                <div class="col-md-4">
                    <select name="playerid01" id="" class="form-control">
                        <?php
                            foreach($users as $user)
                            {
                                echo "<option value='$user[0]'>$user[1]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="playerid02" id="" class="form-control">
                        <?php
                            foreach($users as $user)
                            {
                                echo "<option value='$user[0]'>$user[1]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Gewonnen door?</p>
                </div>
                <div class="col-md-8">
                    <select name="wonby" id="" class="form-control">
                        <?php
                            foreach($users as $user)
                            {
                                echo "<option value='$user[0]'>$user[1]</option>";
                            }
                        ?>
                    </select>
<!--                    <input type="number" class="form-control" name="wonby">-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Score</p>
                </div>
                <div class="col-md-8">
                    <textarea name="score" id="" cols="30" rows="10" class="form-control"></textarea>
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
<?php require "partials/foot.php" ?>
