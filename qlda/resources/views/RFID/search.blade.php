<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Check Time') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="get" action="">
                        {{ csrf_field() }}
                        <div>
                            <x-label for="rfid" :value="('Xuat')" />

                            <x-input id="rfid" class="block mt-1 w-full" type="text" name="query" placeholder="Search RFID..." required autofocus />
                        </div>
                    </form>
                    <br>
                    <br>
                    <hr>
                    <br>
                    @if(isset($countries))
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th class="w-1/2">RFID</th>
                                    <th class="w-1/2">DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if(count($countries) >0)
                                    @foreach($countries as $countrie)
                                        <tr>
                                            <td align="center">{{$countrie->checkin}}</td>
                                            <td align="center">{{$countrie->created_at}}</td>
                                        </tr>
                                    @endforeach
                               @else
                                     <tr><td>Không tồn tại</td></tr>
                               @endif
                            </tbody>
                        </table>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

