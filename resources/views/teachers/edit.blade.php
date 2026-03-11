<x-layouts.layout>

    <div class="flex justify-center items-center min-h-full bg-gray-200">

        <form method="POST" action="{{ route('teachers.update',$teacher->id) }}" class="bg-white p-4 rounded-2xl">

            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{$teacher->name}}"
                    required
                />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="block mt-1 w-full"
                    type="text"
                    name="email"
                    value="{{$teacher->email}}"
                    required
                />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="text"
                    name="phone"
                    value="{{$teacher->phone}}"
                    required
                />
            </div>

            <!-- Department -->
            <div class="mt-4">
                <x-input-label for="department" :value="__('Department')" />
                <select name="department" >
                    @foreach(config("departments") as $department)
                        <option {{$teacher->department == $department? "selected" : ""}} value="{{$department}}">{{$department}}</option>
                    @endforeach
                </select>

                @error("department")
                <div class="text-xm text-red-200"> {{$message}}</div>
                @enderror
            </div>

            <div class="flex justify-end mt-6 gap-10">
                <x-primary-button>
                    {{ __('Update Teacher') }}
                </x-primary-button>
                <x-boton>
                    {{ __('Cancel') }}
                </x-boton>
            </div>

        </form>

    </div>

</x-layouts.layout>
