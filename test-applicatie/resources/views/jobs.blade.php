<x-layout >
    <x-slot:heading>
        Jobs page
    </x-slot:heading>
    <p>Hier kom de jobs:</p>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="underline">
                <li>
                    <strong>{{ $job['title'] }}:</strong> {{ $job['hours']}} per week.
                </li>
            </a>
        @endforeach
    </ul>

</x-layout>