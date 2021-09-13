<?php
    if (isset($_POST['upload'])) {
        $file_name = time() . $_FILES['file'] ['name'];
        $file_tmp = $_FILES['file'] ['tmp_name'];

        move_uploaded_file($file_tmp, "files/" . $file_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <title>Upload File - Franky404</title>
</head>
<body>
        <form action="" method="post" enctype="multipart/form-data" class="wrapper">
            <label for="file">
                <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                <input type="file" id="file" name="file">
            </label>
            <p id="fileName"></p>
        <button class="btn" name="upload">Upload</button>
        </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#file").on("change", function(){
                $("#fileName").text($(this).val().match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1])
            })
        });
    </script>
</body>
</html>