@extends('layouts.app')

@section('content')

    <div class="container" >
        <div class="d-flex justify-content-center">
            <form action="{{ route('modelos.update', $prices->id) }}" class="form-horizontal" method="POST">
            @csrf
            @method('PUT')

                <h3>
                EDIT Product
                </h3><br>
                <div class="row">
                    <div class="form-group">
                        <label>Product</label>
                        <input type="text" class="form-control" name="nome" value="{{ old('nome', $prices->nome) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Price</label> <!-- min="0.00" max="10000.00" step="0.01" -->
                        <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="price" placeholder="R$ " value="{{ old('price', $prices->price) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Local</label>
                        <input type="text" class="form-control" name="local" value="{{ old('local', $prices->local) }}">
                    </div>
                </div> 
                <div class="row d-flex justify-content-center"><button type="submit" class="btn btn-primary ">EDIT Price</button></div>
            </form> 
        </div>
    </div>
    <script>
    
@endsection