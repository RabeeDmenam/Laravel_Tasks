<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

<div class="container">


    <div class="row">


        <form class="mt-5" action="<?php echo url('/DoLogin'); ?> " method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">password</label>
                <input name="password" type="password" class="form-control" placeholder="Enter password">
            </div>


            <br>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
</div>


</body>

</html>
