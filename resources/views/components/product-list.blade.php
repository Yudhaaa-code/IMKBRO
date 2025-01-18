
<div class="mt-10 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <h1 class="font-bold md:text-lg text-zinc-100">POPULER SEKARANG.</h1>
  <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 mt-4 ">
    @foreach ( $images as $image )
      
    <a class="block relative rounded-lg lg:rounded-xl hover:scale-105 overflow-hidden transition-all duration-300 ease-out group" href="{{ $image->id }}">
      <img alt="" loading="lazy" width="384" height="512" decoding="async" data-nimg="1" class="w-full h-full object-cover" style="color:transparent" src="{{ asset('storage/img/' . $image->image_prod) }}">
      <div class="hidden lg:block absolute inset-0 dark:border-2 border-transparent group-hover:border-zinc-50 rounded-lg lg:rounded-xl group-hover:bg-gradient-to-t from-zinc-950/90 via-zinc-950/50 to-transparent transition-all duration-300 ease-out">
      </div>
      <div class="hidden lg:block absolute left-5 right-5 -bottom-20 group-hover:bottom-5 text-zinc-100 transition-all duration-300 ease-out">
        <h3 class="font-medium truncate">{{ $image->title }}</h3>
        <p class="text-xs truncate">{{ $image->subtitle }}</p>
      </div>
    </a>
    
    @endforeach
  </div>
</div>