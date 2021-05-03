<b>{{$recipe->name}}</b>
<ul>
@foreach($recipe->products as $product)
<li>{{$product->name}} {{$product->description}}</li>

@endforeach
</ul>
