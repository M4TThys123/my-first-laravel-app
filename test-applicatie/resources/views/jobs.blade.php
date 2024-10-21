<x-layout >
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    
    <p>Hier kom de jobs:</p>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="block px-4 py-6 border border-gray-20 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                    <strong>{{ $job['title'] }}:</strong> 
                    {{ $job['hours']}} per week.
                    {{ $job['salary']}} per week.
            </a>
        @endforeach
    </div>
</x-layout>