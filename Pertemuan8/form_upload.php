<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myfiles[]" multiple="multiple" accept=".jpg, .jpeg, .png">
            <input type="submit" name="submit">
        </form>
    </body>
</html>