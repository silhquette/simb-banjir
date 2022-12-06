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
              background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80);
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
              background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);
          "
      >
      </div>
  </div>
</div>