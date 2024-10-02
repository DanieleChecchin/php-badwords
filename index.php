
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <main class="container">
        <h1 class="my-5">PHP Badwords</h1>

       <form action="./results.php" method="GET">

            <!--Primo form-->
            <div class="mb-4">
                <label for="paragraph" class="form-label">Paragrafo:</label>
                <input type="text" class="form-control" id="paragraph" name="paragraph" placeholder="La Vecchia Signora quest'anno non vincerà">
            </div>

            <!--Secondo form-->
            <div class="mb-4">
                <label for="badWord" class="form-label">Word to be deleted:</label>
                <input type="text" class="form-control" id="badWord" name="badWord" placeholder="non">
            </div>

            <!--Bottoni-->
            <button type="submit" class="btn btn-success me-5">Send</button>
            <button type="reset" class="btn btn-danger">Reset</button>

        </form>
        
    </main>
</body>
</html>