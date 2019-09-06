<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, Ormuco!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">

    <h1 class="mt-5">Hello, Ormuco!</h1>


    <form class="mt-5" method="POST" id="formormuco">
        @csrf
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter name">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Favorite color</label>
            <div class="col-sm-10">
                <select name="color" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected >Choose...</option>
                    <option value="1">Blue</option>
                    <option value="2">Red</option>
                    <option value="3">Green</option>
                    <option value="4">Yellow</option>
                    <option value="5">Orange</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="pet" class="custom-control-input" value="cats">
                <label class="custom-control-label" for="customRadio1">Cats</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="pet" class="custom-control-input"  value="dogs">
                <label class="custom-control-label" for="customRadio2">Dogs</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <div class="alert alert-primary mt-4 text-center" role="alert" id="alert" style="display: none">
        Thank You!
    </div>

</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>

<script>
    $(function () {


        var formormuco = $("#formormuco");

        formormuco.submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "ormuco",
                data: formormuco.serialize(),
                type: 'POST',
                dataType: 'json',
                success: function (result) {
                    formormuco[0].reset()
                    $("#alert").show();

                },
                error: function (xhr, status) {
                    if (xhr.status == 401) {

                        $("#errorLogin").html(xhr.responseJSON.error);
                        $("#alertErrorLogin").show();

                    } else {
                        var message = "Error de ejecución: " + xhr.status + " " + xhr.statusText;
                        swal(
                            'Error!!',
                            message,
                            'error'
                        )
                    }
                }
            });
        });
    });
</script>

</body>
</html>
