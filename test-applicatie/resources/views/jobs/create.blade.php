<x-layout >
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">Create a new Jon</h2>
    
    <form method="POST" action="/jobs">
        @csrf
        
        <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>
    
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <x-form-field>
                <x-form-label for="title">Title</x-form-label>

                <div class="mt-2">
                    <x-form-input type="text" name="title" id="title" placeholder="Shift leader" required />
                    
                    <x-form-error name="title" />
                </div>
            </x-form-field>

            <x-form-field class="sm:col-span-4">
                <x-form-label for="salary">Salary</x-form-label>

                <div class="mt-2">
                    <x-form-input type="text" name="salary" id="salary" placeholder="$ 50.000" required />
                    
                    <x-form-error name="title" />
                </div>
            </x-form-field>
            </div>
        </div>
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <x-form-button type="submit">Save</x-form-button>
        </div>
  </form>
</x-layout>