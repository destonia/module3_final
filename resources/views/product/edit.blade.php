<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="needs-validation" novalidate style="text-align: center" action="{{route('products.update')}}" method="post"
      enctype="multipart/form-data">
    @csrf
    <div class="row" style="padding-top: 100px">
        <div class="col-sm-4"></div>
        <div class="form-row col-sm-8">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$product->name}}">
                    <input type="hidden" class="form-control" id="formGroupExampleInput" name="id" value="{{$product->id}}">
                </div>
                <label for="categories-">Categories</label>
                <select id="categories" class="custom-select" name="category_id">
                    <option selected>Open this select menu</option>
                    <option value="1" @if($product->category_id == 1) selected @endif>cafe</option>
                    <option value="2" @if($product->category_id == 2) selected @endif>juice</option>
                    <option value="3" @if($product->category_id == 3) selected @endif>wine</option>
                </select>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Price</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="price" value="{{$product->price}}">
                </div>
            </div>
            <div class="col-sm-6">
                <input type="file" accept="image/*" onchange="loadFile(event)">
                <img id="output" style="width: 200px" src="{{asset('storage/'.$product->image)}}"/>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
