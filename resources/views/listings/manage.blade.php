<x-layout>

  <x-banner-section text="Manage Listings"></x-banner-section>

  <!-- ====== Blog Section Start -->
  <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
      <div class="flex flex-wrap -mx-4">

        @unless($listings->isEmpty())

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
