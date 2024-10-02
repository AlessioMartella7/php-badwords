<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>

    <!-- bootstrap style css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>  

<main>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 bg-info-subtle p-3 text-center border border-dark rounded">
                <form action="./reciving.php">

                <!-- text to check -->

                    <label for="incomingText" class="form-label fs-4 fw-bold me-2">Text to check:</label>
                    <input type="text" placeholder="scrivi qui"name="incomingString" id="incomingText">
                <!-- banned words -->

                    <label for="badword" class="form-label fs-4 fw-bold me-2">Banned word:</label>
                    <input type="text" placeholder="scrivi qui"name="textToCensure" id="bardword">
                    
                <button class="btn btn-lg btn-info border border-dark fw-bold text-dark ms-2" type="submit">
                Click to send
                </button>
                </form>

            </div>
        </div>
    </div>
</main>


    
</body>
</html>

