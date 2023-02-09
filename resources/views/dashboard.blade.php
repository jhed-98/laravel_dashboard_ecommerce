<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>



    {{-- <div className="mb-4">
        <label className="block text-gray-700 text-sm font-bold mb-2">
            Color
        </label>
        <input className="form-control-color form-control" id="inputColor" type="color" value="#d50707" placeholder="Color" />
    </div>

    <script>
        
        const color = document.querySelector('#inputColor');

        color.addEventListener("change", (e)=> {
            document.body.style.backgroundColor = e.target.value;
            console.log(e.target.value);
        })
    </script> --}}
</x-app-layout>
