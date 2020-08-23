<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add form</title>
</head>
<body>
    <h2>Page Information</h2>
    <form action="<?php echo base_url('pages/savedata') ;?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value=""><br><br>
        <label for="name">Alias:</label><br>
        <input type="text" id="alias" name="alias" value=""><br><br>
        <label for="page-title">page title:</label><br>
        <input type="text" id="page-title" name="page-title"><br><br>
        <label for="body">Body:</label><br>
        <textarea id="body" name="body" rows="18" cols="80" style="width:100%">
            
        </textarea><br><br>

        <input type="submit" value="save">

        <button type="submit" formaction="<?php echo base_url('pages/main_page') ;?>"> Close </button>

    </form>

</body>
</html>