<x-app-layout>
    <x-slot name="header">
<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
</svg>

        Home
      </a>
    </li>
        <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">#{{ $transaction->id }} {{ $transaction->name }}</a>
      </div>
    </li>
  </ol>
</nav>
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
                        data: 'product.title',
                        name: 'product.title',
                    },
                    {
                        data: 'product.price',
                        name: 'product.price',
                    },
                ]
            }
        )

        </script>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h2 class="font-semibold text-lg text-grey-800 leading-tight mb-5">
                Transaction Details
            </h2>

            <div class="shadow overflow-hidden sm:rounded-lg bg-white mb-2">
                <div class="text-white p-6 border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tr>
                            <th class="border px-6 text-black py-4 text-right">Name</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->name }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">Telp</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->telp }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">Kurir</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->courier }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">Email</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->email }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">Payment</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->payment }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">Payment_url</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->payment_url }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">total_price</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->total_price }}</th>
                            </tr>
                            <th class="border px-6 text-black py-4 text-right">status</th>
                            <th class="border px-6 text-black py-4 text-left">{{ $transaction->status }}</th>
                        </tr>
                    </table>
                </div>
            </div>

            <h2 class="font-semibold text-lg text-grey-800 leading-tight mb-5">
                Transaction Items
            </h2>

            <div class="shadow overflow-hidden sm-rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table id="crudTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        </div>
    </div>

</x-app-layout>
