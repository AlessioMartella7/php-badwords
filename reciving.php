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

<?php 
$incomingText = $_GET['incomingString'];
$bannedWord = $_GET['textToCensure']
?> 

<main>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">

            <!-- printing incoming text and length -->
            <div class="col-12 bg-info p-3 text-center text-dark border border-dark rounded fs-3 mb-4">
                <p><?php echo $incomingText, ', is a string with a length of: ', strlen($incomingText); ?> </p>
            </div>
            
            <!-- replacing the needles in the haystack  -->
            <?php $censuredText = str_ireplace($bannedWord,'***', $incomingText); ?>

            <!-- printing censured text -->
            <div class="col-12 bg-danger p-3 text-center text-dark border border-dark rounded fs-3 ">
                <p><?php echo $censuredText, ', is a string with a length of: ', strlen($censuredText); ?> </p>
            </div>
        </div>
    </div>
</main>


    
</body>
</html>



