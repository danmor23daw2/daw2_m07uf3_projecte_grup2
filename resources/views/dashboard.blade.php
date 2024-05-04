<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6 bg-black border-b border-gray-200">
                <a href="{{ url('autos') }}">Mostra dades de la taula Autos<a/>
                </div>
                <a href="{{ url('autos/create') }}">Crea un nou registre<a/>
                <div class="p-6 bg-black border-b border-gray-200">
                <a href="{{ url('clients') }}">Mostra dades de la taula Clients<a/>
                </div>
                <a href="{{ url('clients/create') }}">Crea un nou registre<a/>
                <div class="p-6 bg-black border-b border-gray-200">
                <a href="{{ url('llogas') }}">Mostra dades de la taula llogas<a/>
                </div>
                <a href="{{ url('llogas/create') }}">Crea un nou registre<a/>
                <div class="p-6 bg-black border-b border-gray-200">
                <a href="{{ url('usuaris') }}">Mostra dades de la taula Usuaris<a/>
                </div>
                <a href="{{ url('usuaris/create') }}">Crea un nou registre<a/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
