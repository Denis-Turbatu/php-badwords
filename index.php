<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form</title>
</head>

<body>
    <form action="censure.php" method="get" class="d-flex flex-column w-25 mx-auto mt-5">
        <label for="user-paragraph">Inserisci il paragrafo</label>
        <textarea rows="4" cols="50" name="user-paragraph" class="mb-4"></textarea>
        <label for="censure-word">Inserisci la parola da censurare</label>
        <input type="text" name="censure-word" class="mb-4">
        <button type="submit">Invia</button>
    </form>
</body>

</html>