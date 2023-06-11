<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <h1 class="text-center">Calculator</h1>
                    <?php
                        if (isset($_POST["submit"])) {
                            switch ($_POST["submit"]) {
                                case "+":
                                    $result = $_POST["f_num"] + $_POST["l_num"];
                                    echo "<h3 class='text-center'>{$_POST["f_num"]} + {$_POST["l_num"]} = {$result}</h3>";
                                    break;
                                case "-":
                                    $result = $_POST["f_num"] - $_POST["l_num"];
                                    echo "<h3 class='text-center'>{$_POST["f_num"]} - {$_POST["l_num"]} = {$result}</h3>";
                                    break;
                                case "*":
                                    $result = $_POST["f_num"] * $_POST["l_num"];
                                    echo "<h3 class='text-center'>{$_POST["f_num"]} * {$_POST["l_num"]} = {$result}</h3>";
                                    break;
                                case "/":
                                    $result = $_POST["f_num"] / $_POST["l_num"];
                                    echo "<h1 class='text-center'>{$_POST["f_num"]} / {$_POST["l_num"]} = {$result}</h1>";
                                    break;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="f_num" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Second Number</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="l_num">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="+"></input>
                        <input type="submit" class="btn btn-primary" name="submit" value="-"></input>
                        <input type="submit" class="btn btn-primary" name="submit" value="*"></input>
                        <input type="submit" class="btn btn-primary" name="submit" value="/"></input>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>