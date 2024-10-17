<x-layout >
    <x-slot:heading>
        Job page
    </x-slot:heading>
    
    <h2 class="font-bold text-lg">{{$job['title'] }}</h2>
    <p>Voor deze baan werk ik {{ $job['hours']}} per week.</p>
</x-layout>