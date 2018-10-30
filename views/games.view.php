<!--Requires head -->
<?php require 'partials/head.php'; ?>
<div class="section2">
    <div class="container pt-4 pb-4 fadeIn">
        <h1>Games</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    Game naam
                </th>
                <th>
                    Aantal spelers
                </th>
                <th>

                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                foreach ($games as $game) {
                    $id = $game['id'];
                    echo "<tr><td>" . $game[1] . "</td><td> " . $game[2] . "</td>
                        <td>
                            <form action='del_game' method='post'>
                                <input type='hidden' value='$id' name='id'>
                                <input type='submit' value='Verwijder Game' class='btn btn-danger'>
                            </form>
                        </td>
                    </tr>";
                }
                ?>
            </tr>
            </tbody>
        </table>
        <div class="col-md-12" align="right">
            <a href="/creategame" class="btn btn-primary">Add Game</a>
        </div>
    </div> <!-- End container -->
</div>
<?php require 'partials/foot.php'; ?>
<!--Requires foot -->
