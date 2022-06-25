@extends('welcome')
@section('content')
<form action="{{route('product.update',$product->id)}}" method="POST" >
    @method('PUT')
    @csrf
    <label for="name" >Produit</label>
    <input type="text" id="name" name="lune" value="{{$product->name}}">
    <button>Modifieer</button>
</form>
    
@endsection