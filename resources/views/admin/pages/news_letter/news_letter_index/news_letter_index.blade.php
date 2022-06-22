<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Newsletter</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>{{$details['title']}}</h1>

    <p>{{$details['body']}}</p>

    <i class="fa-solid fa-file fa-3x"><a href="{{ Storage::url('app/public/newsletters/'.$details['newsletterFile'])  }}">{{$details['newsletterFile']}}</a></i>

    <p>Thank You</p>
</body>
</html>