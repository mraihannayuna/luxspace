<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('transactions') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>

        var datatable = $('#crudTable').DataTable(
            {
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        width: '5%',
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'courier',
                        name: 'courier',
                    },
                    {
                        data: 'payment',
                        name: 'payment',
                    },
                    {
                        data: 'total_price',
                        name: 'total_price',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '25%',
                    }
                ]
            }
        )

        </script>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="mb-10">
            <a href="{{ route('dashboard.transaction.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg" >+ Create Data</a>
           </div>
           <div class="shadow overflow-hidden sm-rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table id="crudTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kurir</th>
                            <th>Pembayaran</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        </div>
    </div>

</x-app-layout>
