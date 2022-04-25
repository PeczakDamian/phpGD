<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>phpGD</title>
    <link rel="stylesheet" href="src/style.css">
</head>
<body>
    <article>
        <header>Generator obrazów - phpGD</header>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="txt">Tekst do obrazka</label>
            <input type="text" name="txt" id="txt"></input>
            <label for="file">Wybierz plik obrazka</label>
            <input type="file" name="file" id="file" accept="image/png, image/gif, image/jpeg">
            <button type="submit" name="runBtn" id="runBtn">GENERUJ</button>
        </form>
        <footer>&COPY; Copyright Damian Pęczak, 3PT4</footer>
    </article>
</body>
</html>