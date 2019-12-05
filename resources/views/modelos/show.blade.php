@extends('layouts.app')

@section('content')
 <div class="container" >
            <div class="d-flex justify-content-center">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Local</th>
                        <!-- <th scope="col"><div background-color="red" height="1px" width="60px"></div>Functions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($prices as $price)
                    
                        <tr>
                            <td> {{ $price->id }} </td>
                            <td> {{ $price->nome }} </td>
                            <td> {{ $price->price }} </td>
                            <td> {{ $price->local }} </td>
                            <!-- <td>
                                <a class="btn btn-primary" href="{{route('modelos.show', ['modelo' => $price->nome])}}" role="button">COMPARE</a>    
                                <a class="btn btn-warning" href="{{route('modelos.edit', ['modelo' => $price->id])}}" role="button">EDIT</a>
                                <a class="btn btn-danger" href="{{route('modelos.destroy', ['modelo' => $price->id])}}" role="button">DELETE</a>
                                
                            </td> -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>

@endsection

