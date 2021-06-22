<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Check In') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('checkin') }}">
                        {{ csrf_field() }}
                       
                        <div>
                            <x-label for="Check In" :value="('Check In')" />

                            <x-input id="rfid" class="block mt-1 w-full" type="text" name="rfid" :value="old('rfid')" required autofocus min="7" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
