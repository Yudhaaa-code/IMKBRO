<x-layout></x-layout>
<div class="relative overflow-hidden bg-gradient-to-r from-gray-900 via-purple-800 to-blue-600 text-center py-8">
    <!-- Latar Bergerak -->
    <div class="absolute inset-0 bg-animated-gradient opacity-50"></div>
  
    <!-- Judul dengan Glow dan Animasi -->
    <h1 class="relative text-3xl font-extrabold text-white sm:text-5xl tracking-widest glow-neon">
      🎮 Koleksi Akun Valorant Premium 🎮
    </h1>
  
    <!-- Subtitle -->
    <p class="relative mt-4 text-sm text-gray-300 sm:text-lg glow-subtitle">
      Pilih akun terbaik dengan skin langka dan siap menangkan setiap match!
    </p>
  
    <!-- Elemen Dekoratif Bergerak -->
    <div class="absolute top-5 left-10 w-16 h-16 bg-purple-500 rounded-full blur-3xl opacity-60 animate-ping-fast"></div>
    <div class="absolute bottom-10 right-5 w-24 h-24 bg-blue-500 rounded-full blur-2xl opacity-70 animate-pulse-fast"></div>
    <div class="absolute top-1/2 left-1/3 w-40 h-40 bg-gradient-to-r from-pink-500 to-yellow-400 rounded-full opacity-40 blur-xl animate-rotate-slow"></div>
  </div>
  
  
<div class="mt-2 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mb-20">
    <div class="grid grid-cols-2 gap-4 p-2 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($valo as $see)
        <a href="#" class="group relative block overflow-hidden">
            <img
              src="{{ asset('storage/img_valo/' . $see->image) }}"
              alt="Robot Toy"
              class="h-40 w-full object-cover transition duration-500 group-hover:scale-105 rounded-t-lg"
            />
        
            <div class="relative bg-zinc-800 p-2 rounded-b-lg">
        
              <h3 class="mt-2 text-sm font-medium text-zinc-100">{{ Str::limit($see->title, 35) }}</h3>
              <p class="mt-1 text-xs text-zinc-300">Rp.{{ $see->price }}</p>
        
              <form class="mt-2">
                <button type="button" onclick="window.location.href='/pembayaran/create'" 
                  class="block w-full rounded bg-yellow-400 p-2 text-xs font-medium transition hover:scale-105"
                >
                  Buy Now
                </button>
              </form>
            </div>
          </a>
          
          @endforeach
        <!-- Tambahkan elemen lain di sini -->
      </div>
      
    </div>
    <x-footer></x-footer>