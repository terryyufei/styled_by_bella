<x-app-layout>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
        </li>
    @endforeach
</x-app-layout>
