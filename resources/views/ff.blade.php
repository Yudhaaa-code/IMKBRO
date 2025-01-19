<x-layout></x-layout>

<div class="mt-24 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-4 p-2 sm:grid-cols-2 lg:grid-cols-4">
      @foreach ($frees as $free)

        <a href="#" class="group relative block overflow-hidden">
            <img
              src="{{ asset('storage/img_ff/' . $free->image) }}"
              alt="Robot Toy"
              class="h-40 w-full object-cover transition duration-500 group-hover:scale-105"
            />
        
            <div class="relative border border-gray-100 bg-white p-2">
        
              <h3 class="mt-2 text-sm font-medium text-gray-900">{{ $free->title }}</h3>
              <p class="mt-1 text-xs text-gray-700">Rp.{{ $free->price }}</p>
        
              <form class="mt-2">
                <button
                  class="block w-full rounded bg-yellow-400 p-2 text-xs font-medium transition hover:scale-105"
                >
                  Add to Cart
                </button>
              </form>
            </div>
          </a>
          
          @endforeach
        <!-- Tambahkan elemen lain di sini -->
      </div>
    </div>