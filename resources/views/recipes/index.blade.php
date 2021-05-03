
<ul>
@foreach($recipes as $recipe)
<li>
    <a href="{{ route('recipes.show',$recipe) }}">
    {{$recipe->name}}
        </a>
</li>

@endforeach
</ul>
