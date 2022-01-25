<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </link>
    <title>Mia and Vee</title>
</head>

<body>
    @include("navbar")

    <div class="row header-container" style="text-align: center;">
        <div class="header">
            <h1>Reviews by Mia and Vee</h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row center" style="justify-content: center;">
                <section class="col-md-7">
                    @include("subscriberlist")
                </section>
            </div>
        </div>
    </div>

    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("subscriberlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="{{ URL::asset('/img/test.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Leave us a comment!</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input name="location" type="text" class="form-control"
                                    placeholder="Where are you listening from?">
                            </div>
                            <div class="form-group">
                                <label>Episode</label>
                                <input name="episode" type="text" class="form-control"
                                    placeholder="Episode you are commenting about">
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <input name="comment" type="text" class="form-control" placeholder="Enter your comment">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>

                    </div>
                </div>
            </section>
        </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("subscriberlist")
            </section>
            <section class="col"></section>
        </div>
    </div>
    
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("subscriberlist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="{{ URL::asset('/img/test.png') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Edit yor Comment...</h5>
                        <form action="{{ url('/update/'.$subscriber->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input value="{{ $subscriber->name }}" name="name" type="text" class="form-control"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input value="{{ $subscriber->email }}" name="email" type="email" class="form-control"
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input value="{{ $subscriber->location }}" name="location" type="text"
                                    class="form-control" placeholder="Where are you listening from?">
                            </div>
                            <div class="form-group">
                                <label>Episode</label>
                                <input value="{{ $subscriber->episode }}" name="episode" type="text"
                                    class="form-control" placeholder="Episode you are commenting about">
                            </div>
                            <div class="form-group">
                                <label>Comment</label>
                                <input value="{{ $subscriber->comment }}" name="comment" type="text"
                                    class="form-control" placeholder="Enter your comment">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>