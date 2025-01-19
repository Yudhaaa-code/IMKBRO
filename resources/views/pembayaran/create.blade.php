<x-layout></x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-zinc-100 text-2xl font-bold mb-6">Form Transaksi</h1>
    
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.936 2.935a1 1 0 01-1.414-1.414L8.586 10 5.651 7.065a1 1 0 011.414-1.414L10 8.586l2.936-2.935a1 1 0 011.414 1.414L11.414 10l2.935 2.936a1 1 0 010 1.414z"/>
                </svg>
            </span>
        </div>
        @endif
    
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-zinc-100">Nama</label>
                <input type="text" name="nama" id="nama" required class="mt-1 text-zinc-900 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg py-3 px-4">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-zinc-100">Email</label>
                <input type="email" name="email" id="email" required class="mt-1 text-zinc-900 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg py-3 px-4">
            </div>
            <div class="mb-4">
                <label for="no_whatsapp" class="block text-sm font-medium text-zinc-100">No WhatsApp</label>
                <input type="text" name="no_whatsapp" id="no_whatsapp" required class="mt-1 text-zinc-900 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-lg py-3 px-4">
            </div>
    
            <div class="mb-4">
                <label for="metode_pembayaran" class="block text-sm font-medium text-zinc-100">Metode Pembayaran</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="card bg-yellow-400 p-4 rounded-lg shadow-lg border border-whhite">
                        <div class="flex justify-between items-center">
                            <div class="text-black font-bold">BCA</div>
                            <input type="radio" name="metode_pembayaran" value="Bank Transfer" class="text-indigo-500">
                        </div>
                        <p class="text-black font-bold">BCA (7275219584 A/N YUDHA PUTRA ANANGGA)</p>
                    </div>
                    <div class="card bg-yellow-400 p-4 rounded-lg shadow-lg border border-whhite">
                        <div class="flex justify-between items-center">
                            <div class="text-black font-bold">DANA</div>
                            <input type="radio" name="metode_pembayaran" value="DANA" class="text-indigo-500">
                        </div>
                        <p class="text-black font-bold">DANA (08922836617 A/N NADHIR BINTANG)</p>
                    </div>
                </div>
            </div>
    
            <div class="mb-4">
                <label for="bukti_transaksi"
                    class=" bg-gray-800 hover:bg-gray-700 text-white text-base inline-flex justify-center py-2 px-4  outline-none rounded w-max cursor-pointer mx-auto font-[sans-serif]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 fill-white inline" viewBox="0 0 32 32">
                         <path
                            d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                            data-original="#000000" />
                        <path
                            d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                            data-original="#000000" />
                        </svg>
                        Upload
                        <input type="file" id='bukti_transaksi' class="hidden" />
                </label>
            </div>
    
            <div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-black bg-yellow-400 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>

