@props(['listing'])

@php
  $image = $listing->logo
    ? asset('/storage/' . $listing->logo)
    : asset('/assets/images/blog/blog-02.jpg');
@endphp

<!-- ====== listing-card Start -->
<div class="w-full md:w-1/2 lg:w-1/3 px-4">
  <div class="mb-10 group wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
    <div class="rounded overflow-hidden mb-8">
      <a href="/listings/{{$listing->id}}" class="block">
        
        <img src="{{$image}}" alt="image" class="
            w-full
            transition
            group-hover:scale-125 group-hover:rotate-6
          ">
      </a>
    </div>
    <div>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <h3>
        <a href="/listings/{{$listing->id}}" class="
            font-semibold
            text-xl
            sm:text-2xl
            lg:text-xl
            xl:text-2xl
            mb-4
            inline-block
            text-dark
            hover:text-primary
          ">
          {{$listing->title}}
        </a>
      </h3>
      <p class="text-base text-body-color">
        {{$listing->description}}
        {{$listing->website}}
      </p>
    </div>
  </div>
</div>
<!-- ====== listing-card End -->