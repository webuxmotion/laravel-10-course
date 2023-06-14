@props(['tagsCsv'])

@php
  $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
    <li class="
      bg-primary
      rounded
      inline-block
      text-center
      py-1
      px-4
      text-xs
      leading-loose
      font-semibold
      text-white
      mb-4
      mr-2
    ">
      <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
  @endforeach
</ul>

