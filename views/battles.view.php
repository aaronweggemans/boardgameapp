<?php require 'partials/head.php'; ?>
    <div class="section2">
        <div class="container pt-4 pb-4 fadeIn">
            <h1>Battles</h1>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Persoon</th>
                    <th></th>
                    <th>Persoon</th>
                    <th>Winnaar</th>
                    <th>Spel</th>
                    <th>Datum</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($games as $game)
                    {
                        var_dump($app['database']->selectFrom("name", "games", "id", $game[2]));
                    }
                ?>
                <tr>
                    <td>Aaron Weggemans</td>
                    <td>VS.</td>
                    <td>Rebien Hussein</td>
                    <td>3 - 5</td>
                    <td>Rebien Hussein</td>
                    <td>Ganzenbord</td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12" align="right">
                    <a href="addBattle" class="btn btn-primary">Add battle</a>
                </div>
            </div>
        </div> <!-- End container -->
    </div>
<?php require 'partials/foot.php'; ?>