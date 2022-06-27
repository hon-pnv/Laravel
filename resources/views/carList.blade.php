<!doctype html>
<html lang="en">

<head>
    <title>Products List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h2>Products List</h2>
    <button><a class="btn btn-success" href="{{ route('cars.create') }}"> Add a new Iterm</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Description</th>
                {{-- <th scope="col">Producer_id</th> --}}
                <th scope="col">Produced_on</th>
                <th scope="col">Producers_name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php  
            $number =0;
            ?>
            @foreach ($cars as $car)
                <tr>
                    <form action="{{ route('cars.destroy',$car->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <th scope="row"> {{$number +=1 }}</th>
                        <td><img src="images/{{ $car->image }}" style="width: 170px;height: 160px;;" /> </td>
                        <td> {{ $car->model }}</td>
                        <td> {{ $car->description }}</td>
                        {{-- <td> {{ $car->producer_id }}</td> --}}
                        <td> {{ $car->produced_on }}</td>
                        <td> {{ $car->Producer->producers_name }}</td>
                        <td>
                            <a type="button" class="btn btn-primary"
                                href="{{ route('cars.edit', $car->id) }}">Edit
                        </a>
                        </td>
                        <td>
                            <button type="submit" class ="btn btn-danger">Delete</button>
                        </td>
                    </form>
                </tr>
            @endforeach


        </tbody>
    </table>


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
