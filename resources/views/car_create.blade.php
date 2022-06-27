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
    <div class="container mt-5">
        <button><a class="btn btn-primary" href="{{ route('cars.index') }}">Back to home page </a></button>
        <a class="btn btn-success" href="{{ route('cars.create') }}">Create a new Iterm</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label style="color:black" for="exampleInputEmail1">produced_on</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="produced_on"
                        aria-describedby="emailHelp" placeholder="Enter produced_on">
                    <span>{{ $errors->first('produced_on') }}</span>

                </div>
                


            </div>
            <div class="row">
                <div class="form-group col-6">

                    <label style="color:black" for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter image">
                    <span>{{ $errors->first('image') }}</span>
                </div>
                <div class="form-group col-6">
                    <label style="color:black" for="exampleInputPassword1">Producer name</label>

                    <select name="producer_id" class="custom-select" aria-label="Default select example">
                        @foreach ($producers as $pro)
                        <option value="{{$pro->id}}">
                            {{$pro->producers_name}}</option>
                        @endforeach
    
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-6">

                    <label style="color:black" for="exampleInputPassword1">Model</label>
                    <input type="text" name="model" value="{{ isset($car) ? $car->model : '' }}"
                        class="form-control" id="exampleInputPassword1" placeholder="Enter model">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    {{-- <span>{{$errors->first('created_at')}}</span> --}}
                </div>
                <div class="form-group col-6">
                    <label style="color:black" for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" value="{{ isset($car) ? $car->description : '' }}"
                        class="form-control" id="exampleInputPassword1" placeholder="Enter description">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                    {{-- <span>{{$errors->first('created_at')}}</span> --}}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        const changeImage = (e) => {
            console.log('change');
            document.getElementById('newImage').style.display = 'block';
            var imgEle = document.getElementById('newImage');
            imgEle.src = URL.createObjectURL(e.target.files[0]);
            imgEle.onload = () => {
                URL.revokeObjectURL(output.src)
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
