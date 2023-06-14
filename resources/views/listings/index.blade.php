<x-layout>

  <x-banner-section text="Blog"></x-banner-section>
  
  @include('partials._search')

  <!-- ====== Blog Section Start -->
  <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
      <div class="flex flex-wrap -mx-4">

        @unless(count($listings) == 0)

          @foreach($listings as $listing)
            <x-listing-card :listing="$listing"></x-listing-card>
          @endforeach

        @else
          <p>No listings found</p>
        @endunless

      </div>
    </div>
  </section>
  <!-- ====== Blog Section End -->

</x-layout>
