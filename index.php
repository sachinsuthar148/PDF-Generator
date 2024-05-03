<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background: url("https://png.pngtree.com/thumb_back/fh260/background/20230408/pngtree-rainbow-curves-abstract-colorful-background-image_2164067.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 50% !important;
            margin-top: 4% !important;
            margin-bottom: 9% !important;
        }
        
        h1 {
            text-align: center !important;
            margin-top: 4% !important;
            margin-bottom: 9% !important;
         }
        .outerBox{
            border: 1px solid transparent;
            width: 50%;
            margin: 4.5% auto;
            background-color: transparent;
            backdrop-filter: blur(8px);
            box-shadow: whitesmoke 0px 8px 80px;
            border-radius: 40px;
        
        }


    </style>
</head>

<body>
    <!-- <form >
        <input type="text" id="rollno" placeholder="Roll No.">  <br>
        <input type="text" name="firstname" id="firstname" placeholder="First Name">  <br>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name">  <br>
        <input type="text" name="email" id="email" placeholder="Email">  <br>
        <input type="submit" name="submit">
    </form> -->
    <div class="outerBox">
        <h1>PDF Generator</h1>
        <div class="container">
            <form action="./pdf.php" method="POST">
                <div class="mb-3">
                    <label for="rollno" class="form-label">Enter Roll No.</label>
                    <input type="number" class="form-control" name="rollno" id="rollno" required>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Enter First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname"
                        required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Enter Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"  required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter Email</label>
                    <input type="email" class="form-control" name="email" id="email"  required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>