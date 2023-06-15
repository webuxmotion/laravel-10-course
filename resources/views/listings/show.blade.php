<x-layout>

  <x-banner-section 
    :text="$listing->title"
    class="pb-20"
  ></x-banner-section>

  <x-listing-tags :tagsCsv="$listing->tags" />

  <p>{{$listing->description}}</p>

  <a href="/listings/{{$listing->id}}/edit">Edit</a>

  <form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('DELETE')
    <button>Delete</button>
  </form>
  
</x-layout>