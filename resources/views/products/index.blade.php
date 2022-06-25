@extends('welcome')
@section('content')
<h1>Index</h1>
@foreach ($products as $produit)
<ul>
    <li>
        {{$produit->name}} 
        <a href="{{route('product.edit',$produit->id)}}">Editer</a> 
        <button  data-bs-toggle="modal" data-bs-target="#supprimer{{$produit->id}}">Supprimer</button>
        <div class="modal fade" id="supprimer{{$produit->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <form action="{{route('product.destroy',$produit->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Save changes</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
    </li>
</ul>
    
@endforeach
    
@endsection