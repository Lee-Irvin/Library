
        <?php
        include "includes/nav.php";
        ?>
        <div class="wrapper">
            <div class="container">
                <h1>Upload your file</h1>
                <div class="content">
                    <form action="upload_file.php" method="post" enctype="multipart/form-data"> <!-- "multipart/form-data" is used when a form requires binary data, like the contents of a file, to be uploaded -->
                        <label for="file">Filename:</label>
                        <input type="file" name="file" id="file" /> 
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


