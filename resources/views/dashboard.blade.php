<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <div class="flex space-x-2 justify-center">
                        <div class="bg-gray-900 p-4 rounded mb-4">
                            <a href="{{route('etudiants.index')}}" class="text-blue-600 hover:text-blue-700 transition duration-300 ease-in-out mb-4">Gestion des Etudiants</a>
                          </div>                         
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
