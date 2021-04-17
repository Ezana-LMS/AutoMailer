<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Simple Ezana Mailer</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-hea text-center">
                <h5>Ezana Mailer</h5>
            </div>

            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">From:</label>
                            <input type="email" name="from" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">To:</label>
                            <input type="email" name="to" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea type="text" name="message" class="form-control Summernote">
                    </div>
                    <button type="submit" name="SendMail" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>