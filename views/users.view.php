<?php require "partials/head.php" ?>
    <section class="section2">
        <div class="container pt-4 pb-4 fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <h1>Users</h1>
                </div>
                <hr>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <?php
                            foreach ($users as $user) {
                                $id = $user['id'];

                                echo "<tr><td>" . $user[1] . "</td><td> " . $user[2] . "</td>
                                    <td>
                                        <form action='del_user' method='post'>
                                            <td>
                                                <input type='hidden' value='$id' name='id'>
                                                <input type='submit' class='btn btn-danger' value='Verwijder gebruiker'>
                                            </td>
                                        </form>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12" align="right">
                    <a href="/createUser" class="btn btn-primary">Add user</a>
                </div>
            </div>
        </div>
    </section>
<?php require "partials/foot.php" ?>