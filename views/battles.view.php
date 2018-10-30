<!--Requires head -->
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
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach($games as $game)
                    {
//                        var_dump($app['database']->selectFrom("name", "games", "id", $game[2]));
                        echo "<tr>";
                            echo "<td>";
                                $builder = $app['database']->selectFrom('fname', 'users', 'id', $game[3]);
                                if(empty($builder[0]))
                                {
                                    echo "Verwijderde Gebruiker!";
                                }
                                else
                                {
                                    echo $builder[0];
                                }
                            echo "</td>";
                            echo "<td>";
                                echo "VS";
                            echo "</td>";
                            echo "<td>";
                                $builder = $app['database']->selectFrom('fname', 'users', 'id', $game[4]);
                                if(empty($builder[0]))
                                {
                                    echo "<p class='text-danger'>Verwijderde Gebruiker!</p>";
                                }
                                else
                                {
                                    echo $builder[0];
                                }
                            echo "</td>";
                            echo "<td>";
                                $builder = $app['database']->selectFrom('fname', 'users', 'id', $game[7]);
                                if(empty($builder[0]))
                                {
                                    echo "<p class='text-danger'>Verwijderde Gebruiker!</p>";
                                }
                                else
                                {
                                    echo "<b>" . $builder[0] . "</b>";
                                }
                            echo "</td>";
                            echo "<td>";
                                $builder = $app['database']->selectFrom('name', 'games', 'id', $game[2]);
                                if(empty($builder[0]))
                                {
                                    echo "<p class='text-danger'>Verwijderde game!</p>";
                                }
                                else
                                {
                                    echo $builder[0];
                                }
                            echo "</td>";
                            echo "<td>";
                                echo $game[1];
                            echo "</td>";
                            echo "<td>";
                                echo "
                                    <form action='del_battle' method='post'>
                                        <input type='hidden' name='id' value='$game[0]'>
                                        <input type='submit' class='btn btn-danger' value='Verwijder Battle'>
                                    </form>
                                ";
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
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
<!--Requires foot -->
