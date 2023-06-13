<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{ route('dashboard.transaction.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
</svg>

        Home
      </a>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">transaction</span>
      </div>
    </li>
        <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">#{{ $transaction->id }} {{ $transaction->name }}</span>
      </div>
    </li>
  </ol>
</nav>

        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:p-6 lg:px-8 bg-white">
            <div>
                @if ($errors->all())
                <div class="md-5" role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        There Is Something Wrong Banh2
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-5 text-red-700">
                        <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
                @endif
                <form action="{{ route('dashboard.transaction.update' , $transaction->id) }}" method="post" class="w-full" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <div class="flex flex-wrap bg-white mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Status
                                </label>
                                    <select name="status" class="block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option value="{{ $transaction->status }}">{{ $transaction->status }}</option>
                                        <option disabled>-------------</option>
                                        <option value="PENDING">PENDING</option>
                                        <option value="SUCCESS">SUCCESS</option>
                                        <option value="CHALLENGE">CHALLENGE</option>
                                        <option value="FAILED">FAILED</option>
                                        <option value="SHIPPING">SHIPPING</option>
                                        <option value="SHIPPED">SHIPPED</option>
                                    </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap mx-3 mb-6">
            <div class="w-full px-3 text-right">
                <button type="submit" class="bg-teal-200 hover:bg-pink-300 text-white font-bold py-3 px-5 rounded shadow-lg" >Simpan</button>
            </div>
                </form>
        </div>
    </div>

</x-app-layout>
