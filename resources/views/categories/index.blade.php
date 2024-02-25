<x-app-layout>
    <div class="m-5 md:m-10 bg-gray-200 rounded-lg shadow-md p-5 lg:h-full lg:mt-20">
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 p-5  gap-4">
        @foreach ($categories as $category)
            @php
                $imagePath = '';
                switch ($category->name) {
                    case 'Summer':
                        $imagePath = '/img/summer.png';
                        break;
                    case 'Fall':
                        $imagePath = '/img/fall.png';
                        break;
                        case 'Winter':
                        $imagePath = '/img/winter.jpg';
                        break;
                        case 'Spring':
                        $imagePath = '/img/spring.png';
                        break;
                    // Add more cases as needed
                }
            @endphp
            <li class="bg-white rounded-lg shadow-lg text-center text-yellow-800 p-5 mt-4 hover:scale-105">
                <a href="{{ route('categories.show', $category->id) }}">
                    <img src="{{ $imagePath }}" alt="{{ $category->name }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    
</div>

</x-app-layout>

