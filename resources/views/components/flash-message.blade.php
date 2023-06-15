@if(session()->has('message'))
  <div 
    x-data="{show: true}" 
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
    class="flash-message"
  >
    {{session('message')}}
  </div>
@endif
