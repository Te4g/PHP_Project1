<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Wash-it</title>
</head>

<body>

<!-- NAVBAR -->
<?php include("navbar.php"); ?>

<div class="global-container">

    <h2>Get a price<i class = "fa fa-leaf"></i></h2>

    <p>Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet
        excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est,
        necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est
        resistendum. Nunc vero inanes flatus quorundam vile esse quicquid extra urbis pomerium nascitur aestimant
        praeter
        orbos et caelibes, nec credi potest qua obsequiorum diversitate coluntur homines sine liberis Romae.</p>

    <form action="" method="post" class="quotation-form">
        <div class="form-row">
            <div class="col-md-5">
                <label for="name">Enter your name or company name: </label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Your name" required>
                <label for="email">Enter your email: </label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Your e-mail" required>
                <label for="phone">Enter your phone number: </label>
                <input class="form-control" type="tel  " name="phone" id="phone" placeholder="Insert your phone number"
                       required>
            </div>

            <div class="col-md-5">
                <label for="revenue-select">Select your revenue figure:</label>
                <select class="form-control" id="revenue-select">
                    <option value="">--Please choose an option--</option>
                    <option value="less_1M">Less than 1M</option>
                    <option value="between_1_2">Between 1M and 2M</option>
                    <option value="betwenn_2_5">Between 2M and 5M</option>
                    <option value="More_5M">More than 5M</option>
                </select>
                <label for="employee-select">Select your number of employees:</label>
                <select class="form-control" id="employee-select">
                    <option value="">--Please choose an option--</option>
                    <option value="less_50">Less than 50</option>
                    <option value="between_50_100">Between 50 and 100</option>
                    <option value="betwenn_100_500">Between 100 and 500</option>
                    <option value="More_500">More than 500</option>
                </select>

                <label for="package-select">Which package are you interested of ?</label>
                <select class="form-control" id="package-select">
                    <option value="">--Please choose an option--</option>
                    <option value="Package1">Package #1</option>
                    <option value="Package2">Package #2</option>
                    <option value="Package3">Package #3</option>
                </select>
            </div>

            <div class="form-row">
                <label for="story">You can send us a message !</label>
                <textarea class="form-control" id="quotation-message" name="quotation-message" rows="5" cols="33"
                          placeholder="It was a dark and stormy night ..."></textarea>

            <input type="submit" onclick="sendMessage()" class="btn form-control btn-header btn-light btn-lg" value="Send">
            </div>
    </form>


</div>
</section>

</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    function sendMessage() {
        alert("Thank you! We will reply shortly to your request.")
    }
</script>
</body>
