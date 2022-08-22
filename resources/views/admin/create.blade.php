@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
           
            <form class="row g-3" action="{{ route('games.store')}}" method="post">
                @csrf
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" name="price" id="price">
                  </div>
                  <div class="col-md-6">
                    <label for="category" class="form-label">category</label>
                    <input type="text" class="form-control" name="category" id="category">
                  </div>
                  <div class="col-md-6">
                    <label for="pegi" class="form-label">pegi</label>
                    <input type="text" class="form-control" name="pegi" id="pegi">
                  </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Aggiungi Gioco</button>
                </div>
              </form>

        </div>

    </div>
</div>


@endsection