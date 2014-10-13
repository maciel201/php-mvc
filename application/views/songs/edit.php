<div class="container">
    <h2>You are in the View: application/views/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a song</h3>
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <label>Artist</label>
            <input autofocus type="text" name="artist" value="<?= $song[0]->artist?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?= $song[0]->track ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?= $song[0]->link ?>" />
            <input type="hidden" name="song_id" value="<?= $song[0]->id ?>" />
            <input type="submit" name="submit_update_song" value="Update" />
        </form>
    </div>
</div>

