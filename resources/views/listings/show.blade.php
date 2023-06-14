<x-layout>

  <x-banner-section 
    :text="$listing->title"
    class="pb-20"
  ></x-banner-section>

  <x-listing-tags :tagsCsv="$listing->tags" />

  <p>{{$listing->description}}</p>
  
</x-layout>