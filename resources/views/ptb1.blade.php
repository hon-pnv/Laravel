!
<!doctype html>
<html lang="en">

<head>
    <title>Phương trình bậc nhất</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>GPTB1</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- <form class="form-inline" action="ptb1" method="post">
            <form class="form-inline" action="ptb1" method="get"> 
            @csrf
            <lable for="email"></lable>
            <input type="text" class="form-control" placefholder="Nhập hệ số a" name="a" value="{{ isset($a)?$a:''}}">
            <lable for="pwd">x+</lable>
            <input type="text" class="form-control" placefholder="Nhập hệ số b" name="b" value="{{ isset($b)?$b:''}}">
            =0
            <button type="submit" class="btn btn-primary">Giải</button>

        </form> -->
        <div class="card-body">


            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('ptb1.post')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Input a number</label>
                            <input type="text" id="title" name="a" class="form-control" value="{{ isset($a)?$a:'' }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Input a number</label>
                            <!-- <textarea name="b" class="form-control" ></textarea> -->
                            <input type="text" id="title" name="b" class="form-control" value="{{ isset($b)?$b:'' }}">

                        </div>
                    </div>



                    <div class="col-md-6">

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="check1" name="option" value="+">
                            <label class="form-check-label" for="check1">Cộng</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="check2" name="option" value="-">
                            <label class="form-check-label" for="check2">Trừ</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="check3" name="option" value="*">
                            <label class="form-check-label" for="check3">Nhân</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="check4" name="option" value="/">
                            <label class="form-check-label" for="check4">Chia</label>
                        </div>

                        <label class="label"></label>


                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">kết quả</label>
                        <!-- <textarea name="b" class="form-control" required=""></textarea> -->
                        <input type="text" id="title" value="{{ isset($kq)?$kq:'' }}" class="form-control">

                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tính</button>
            </form>
        </div>



    </div>

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