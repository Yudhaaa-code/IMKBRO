<!-- Slider -->
<div x-data="carousel()" x-init="init()" class="relative mt-8 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <!-- Slider Container -->
  <div class="relative overflow-hidden w-full rounded-lg md:rounded-2xl">
    <div class="flex transition-transform duration-700" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
      <!-- Slide 1 -->
      <div class="w-full flex-shrink-0 flex justify-center h-full">
      <img  class="w-full flex-shrink-0 flex justify-center h-full" src="img/iklanfifa.jpg" alt="slide 2">
      </div>
      <!-- Slide 2 -->
      <div class="w-full flex-shrink-0 flex justify-center h-full">
        <img  class="w-full flex-shrink-0 flex justify-center h-full" src="img/iklanvalo.jpg" alt="slide 2">
      </div>
      <!-- Slide 3 -->
      <div class="w-full flex-shrink-0 flex justify-center h-full ">
      <img  class="w-full flex-shrink-0 flex justify-center h-full" src="img/iklanpb.jpg" alt="slide 2">
      </div>
    </div>
  </div>

  <!-- Previous Button -->
  <button @click="prevSlide" class="absolute inset-y-0 left-0 flex items-center justify-center w-[46px] h-full text-gray-800 focus:outline-none rounded-l-lg">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M15 18L9 12l6-6"></path>
    </svg>
    <span class="sr-only">Previous</span>
  </button>

  <!-- Next Button -->
  <button @click="nextSlide" class="absolute inset-y-0 right-0 flex items-center justify-center w-[46px] h-full text-gray-800 focus:outline-none rounded-r-lg">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 18l6-6-6-6"></path>
    </svg>
    <span class="sr-only">Next</span>
  </button>

  <!-- Pagination -->
  <div class="flex justify-center absolute bottom-3 left-0 right-0 space-x-2">
    <template x-for="(dot, index) in totalSlides" :key="index">
      <button @click="goToSlide(index)" :class="index === currentSlide ? " class="w-3 h-3 rounded-full"></button>
    </template>
  </div>
</div>
<!-- End Slider -->

<script>
  function carousel() {
    return {
      currentSlide: 0,
      totalSlides: 3,
      autoplayInterval: null,

      init() {
        this.autoplay();
      },

      nextSlide() {
        // Pindahkan ke slide berikutnya
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
      },

      prevSlide() {
        // Pindahkan ke slide sebelumnya
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
      },

      goToSlide(index) {
        // Pindahkan langsung ke slide tertentu
        this.currentSlide = index;
      },

      autoplay() {
        // Gerakkan slider otomatis setiap 3 detik
        this.autoplayInterval = setInterval(() => {
          this.prevSlide(); // Memastikan autoplay bergerak maju
        }, 9000);
      },

      stopAutoplay() {
        clearInterval(this.autoplayInterval);
      },
    };
  }
</script>

