<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add form</title>
</head>
<body>
    <h2>Page information</h2>
    <form action="<?php echo base_url('pages/savedata') ;?>" method="post">
        <input type="hidden" name="id" id='id' value="<?php echo $list[0]->id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $list[0]->Name; ?>"><br><br>
        <label for="name">Alias:</label><br>
        <input type="text" id="alias" name="alias" value="<?php echo $list[0]->alias; ?>"><br><br>
        <label for="page-title">page title:</label><br>
        <input type="text" id="page-title" name="page-title" value="<?php echo $list[0]->page_title; ?>"><br><br>
        <label for="body">Body:</label><br>
        <textarea id="body" name="body" rows="18" cols="80" style="width:100%;">
            <?php echo $list[0]->Body; ?>
        </textarea><br><br>

        <input type="submit" value="Update">

        <button type="submit" formaction="<?php echo base_url('pages') ;?>"> Close </button>

    </form>

</body>
</html>