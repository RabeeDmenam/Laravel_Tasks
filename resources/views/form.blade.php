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


            <form class="mt-5" action="<?php echo url('/storeData'); ?> " method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name="email" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> address</label>
                    <input name="address" type="text" class="form-control" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">URL</label>
                    <input name="url" type="url" class="form-control" placeholder="Enter url">
                </div>

                {{-- <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label name="male" class="form-check-label" for="inlineCheckbox1">male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label  name="Female" class="form-check-label" for="inlineCheckbox2">felame</label>
                </div> --}}
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</body>

</html>
