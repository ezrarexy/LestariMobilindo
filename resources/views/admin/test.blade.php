<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form action="/car/in" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <label for="satu">Satu</label>
            <input type="text" id="satu" name="satu">
        </div>
        <div class="container">
            <label for="dua">Dua</label>
            <input id="iPict" name="pict[]" type="file" class="file" multiple data-msg-placeholder="Select {files} for upload...">
        </div>
        <input type="submit" name="go" id="go">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="{{ asset('assets/js/fileinput.min.js') }}"></script>

    <script>

    </script>



</body>
</html>

