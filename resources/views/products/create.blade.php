@extends('welcome')
@section('content')
<form action="{{route('product.store')}}" method="POST" >
    @csrf
    <label for="name" >Produit</label>
    <input type="text" id="name" name="lune">
    <button>Soumettre</button>
</form>
    
@endsection