<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Responsable Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <a href="#" id="openEmployeModel" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Employee Management</a>
                   <x-employe-model />

                   <a href="#" id="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Demande Congés</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
