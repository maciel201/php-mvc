<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição de uma canção</title>
    </head>
    <body>
        <form>
            <input type="text" 
                   name="artist" 
                   value="<?= $song[0]->artist ?>" />
        </form>
        <?php
        echo "<p>ID: {$song[0]->id}</p>";
        echo "<p>Artista: {$song[0]->artist}</p>";
        echo "<p>Faixa: {$song[0]->track}</p>";
        echo "<p>Link: {$song[0]->link}</p>";        
        ?>
    </body>
</html>
