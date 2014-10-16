<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição de uma canção</title>
    </head>
    <body>
        <div id="container">
            <form action="<?php echo URL; ?>songs/updatesong" method="POST">
                <label>Artist</label>
                <input type="text" name="artist" value="<?= $song->artist ?>" required />
                <label>Track</label>
                <input type="text" name="track" value="<?= $song->track ?>" required />
                <label>Link</label>
                <input type="text" name="link" value="<?= $song->link ?>" />
                <input type="hidden" name="song_id" value="<?= $song->id ?>"/>
                <input type="submit" name="submit_update_song" value="Update" />
            </form>
            <?php
          
            ?>
        </div>
    </body>
</html>
