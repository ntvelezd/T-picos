@extends('layouts.app')
@section('content')

<main role="main">
<<<<<<< Updated upstream
    <div class="album py-5 bg-light">
        <div class="container">
            <h5>Most sold Handbag:</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="img-fluid rounded mb-5" src="{{  URL::asset('storage/handbags/'.$data["best-handbag"]->first()->getImage()) }}" alt="" />
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getName() }}</p>
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getPrice() }}</p>
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getStyle() }}</p>
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getColor() }}</p>
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getScore() }}</p>
                            <p class="card-text">Name: {{$data["best-handbag"]->first()->getTexture() }}</p>
                        </div>
                    </div>
                </div>
            </div>
=======
    <div class="col-md-4 col-x1-3">
        <div class="sidebar px-4 py-md-0">
            <h6 class="sidebar-title">Search</h6>
            <form class="input-group" action="{{route('handbag.search')}}" method="GET">
                <input type="text" class="form-control" name="search" placeholder="Search">
            </form>
>>>>>>> Stashed changes
        </div>
   

    <div class="album py-5 bg-light">
        <div class="container">
<<<<<<< Updated upstream
=======
            <h5>Most sold Handbag:</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="img-fluid rounded mb-5"
                            src="{{  URL::asset('storage/handbags/'.$data["best-handbag"]->first()->getImage()) }}"
                            alt="" />
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getName() }}</p>
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getPrice() }}</p>
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getStyle() }}</p>
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getColor() }}</p>
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getScore() }}</p>
                        <p class="card-text">Name: {{$data["best-handbag"]->first()->getTexture() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
>>>>>>> Stashed changes
            <h5>Catalogue:</h5>
            <div class="row">
                @foreach($data["handbags"] as $key => $handbag)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
<<<<<<< Updated upstream
                        <img class="img-fluid rounded mb-5" src="{{  URL::asset('storage/handbags/'.$handbag->getImage()) }}" alt="" />
=======
                        <img class="img-fluid rounded mb-5"
                            src="{{  URL::asset('storage/handbags/'.$handbag->getImage()) }}" alt="" />
>>>>>>> Stashed changes
                        <div class="card-body">
                            <p class="card-text">Name: {{ $handbag->getName() }}</p>
                            <p class="card-text">Price: {{ $handbag->getPrice() }}</p>
                            <p class="card-text">Style: {{ $handbag->getStyle() }}</p>
                            <p class="card-text">Color: {{ $handbag->getColor() }}</p>
                            <p class="card-text">Score: {{ $handbag->getScore() }}</p>
                            <p class="card-text">Texture: {{ $handbag->getTexture() }}</p>
                        </div>
<<<<<<< Updated upstream
                        <button type="submit" class="btn btn-primary" name="" value="">View Details</button>
                        <a href="{{ route('handbag.add', ['id'=> $handbag->getId()]) }}" class="btn btn-primary" role="button" aria-pressed="true">Add Cart</a>
                        <a href="{{ route('review.index', ['id'=> $handbag->getId()]) }}" class="btn btn-primary" role="button" aria-pressed="true"> Create Review</a>
                        <a href="{{ route('review.catalogue', ['id'=> $handbag->getId()]) }}" class="btn btn-primary" role="button" aria-pressed="true"> See Review</a>
                        <a href="{{ route('wishlist.add' ,['id'=> $handbag->getId()])}}" class="btn btn-primary" role="button" aria-pressed="true"> Add to Wishlist</a>
                   
=======
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-primary m-1" name="" value="">View Details</button>
                            <a href="{{ route('handbag.add', ['id'=> $handbag->getId()]) }}" class="btn btn-primary m-1"
                                role="button" aria-pressed="true">Add Cart</a>
                            <a href="{{ route('review.index', ['id'=> $handbag->getId()]) }}"
                                class="btn btn-primary m-1" role="button" aria-pressed="true"> Create Review</a>
                            <a href="{{ route('review.catalogue', ['id'=> $handbag->getId()]) }}"
                                class="btn btn-primary m-1" role="button" aria-pressed="true"> See Review</a>
                        </div>
>>>>>>> Stashed changes
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
@endsection