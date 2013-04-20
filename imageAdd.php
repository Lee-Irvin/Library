
<?php
include "includes/nav.php";
?>
        <div class="wrapper">
            <div class="container">
                <h1>Add An Image</h1>
                <div class="content">
                    <div id="menus">
                        <a href="index.php" target="_self">Home</a>

                    </div>
                    <div id="l_space">
                        <h2>Please Choose and image and add it too your gallery</h2>
                        <form action="imageAdd.php" method="post" enctype="multipart/form-data">
                            <label for="file">Filename:</label>
                            <input type="file" name="file" id="file"><br>
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                    <div id="r_space">
                        <h2>News</h2>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>