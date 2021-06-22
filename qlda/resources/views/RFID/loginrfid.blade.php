<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new rfid') }}
        </h2>
    </x-slot>

 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('nhap') }}">
                        {{ csrf_field() }}

                        <div class="profile-grid">
                            <div class="profile-label">
                                <label for="rfid">{{ __('Quẹt Thẻ') }}</label>
                            </div>
                            <div class="profile-input">
                                <input type="text" name="rfid" id="rfid" placeholder="Nhập Vào" class="rounded-lg max-w-screen-xl 2xl" autofocus min="0"max="11">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>

</x-app-layout>
