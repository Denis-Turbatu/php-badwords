<?php
$user_input = $_GET["user-paragraph"];
$censure_word = $_GET["censure-word"];
$censured_paragraph = strtr($user_input, $censure_word, "***");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Result</title>
</head>

<body>
    <section class="w-50 mx-auto mt-5">
        <p class="mb-0 text-primary fs-3 fw-semibold">Paragrafo:</p>
        <h1 class="fs-4 fw-semibold"> <?php echo $user_input; ?> </h1>
        <h2 class="fs-4 mb-4 text-danger"><?php echo "Il paragrafo contiene " . strlen($user_input) . " caratteri" ?></h2>
        <p class="mb-0 text-primary fs-3 fw-semibold">Parola da censurare:</p>
        <p class="fs-5"> <?php echo $censure_word; ?> </p>
    </section>

    <section class="w-50 mx-auto mt-5">
        <p class="mb-0 text-primary fs-3 fw-semibold">Paragrafo Finale:</p>
        <h1 class="fs-4 fw-semibold"> <?php echo $censured_paragraph; ?> </h1>
        <h2 class="fs-4 mb-4 text-danger"><?php echo "Il paragrafo contiene " . strlen($user_input) . " caratteri" ?></h2>
    </section>
</body>

</html>