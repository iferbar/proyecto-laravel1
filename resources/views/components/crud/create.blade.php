@props([
    'table'=>'',
    'resource'=>''
])
<x-layouts.layout>
    <div class="flex justify-center items-center min-h-full bg-gray-200">
        <form method="POST" action="{{ route('crud.store',$resource) }}" class="bg-white p-4 rounded-2xl">
            @csrf
            {{$slot}}
        <div class="flex justify-end mt-6 gap-10">
            <x-primary-button>
            Create {{$table}}
            </x-primary-button>
            <x-boton>
                {{ __('Cancel') }}
            </x-boton>
        </div>
        </form>
    </div>
</x-layouts.layout>
