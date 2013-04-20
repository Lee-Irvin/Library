
        <?php include "includes/nav.php"; ?>
        <div class="wrapper">
            <div class="container">
                <h1>Admin Login</h1>
                <div class="content">
                    <form action="library/checklogin.php" method="post" enctype="multipart/form-data">
                        <table cellspacing="5">
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Password: </td>
                                <td><input type="password" name="password"></td>
                            </tr>
                        </table>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>