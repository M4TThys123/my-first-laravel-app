<x-layout >
    <x-slot:heading>
        Job page
    </x-slot:heading>
    
    <h2 class="font-bold text-lg">{{$job['title'] }}</h2>
    <p>Voor deze baan werk ik {{ $job['hours']}} per week.</p>

    @can('edit', $job)
        <div class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
        </div>                
    @endcan
</x-layout>