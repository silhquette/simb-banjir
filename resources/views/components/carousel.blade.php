@props(['title' => 'PUSAT INFORMASI GEMPA BUMI'])

<div class="w-full mx-auto lg:h-[250px] h-fit overflow-hidden flex justify-between items-center bg-black absolute opacity-80 z-10">
</div>
<div class="w-full mx-auto lg:h-[250px] h-fit overflow-hidden flex justify-between items-center absolute z-[12]">
    <div class="text-4xl font-bold text-white text-center w-full">{{ $title }}</div>
</div>
<div class="sliderAx h-auto w-full relative z-1">
  <div id="slider-1" class="mx-auto">
      <div
          class="
              bg-cover bg-center
              h-[250px]
              text-white
              py-24
              px-10
              object-fill
          "
          style="
              background-image: url(https://images.unsplash.com/photo-1621077742331-2df96a07cca7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=885&q=80);
          "
      >
      </div>
  </div>

  <div id="slider-2" class="mx-auto">
      <div
          class="
              bg-cover bg-top
              h-[250px]
              text-white
              py-24
              px-10
              object-fill
          "
          style="
              background-image: url(https://images.unsplash.com/photo-1638890816065-9019f9f49238?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);
          "
      >
      </div>
  </div>
</div>