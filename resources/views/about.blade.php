<ul>
@foreach ($names as $item)
    <li>Person name: {{ $item }}</li>
@endforeach
</ul>

@forelse ($names as $name)
    
@empty
    
@endforelse