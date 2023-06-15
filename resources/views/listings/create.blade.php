<x-layout>
  <x-banner-section text="Create Post" />

  <div class="px-4 w-full">
    <div class="shadow-testimonial
        rounded-lg
        bg-white
        py-10
        px-8
        md:p-[60px]
        lg:p-10
        2xl:p-[60px]
        sm:py-12 sm:px-10
        lg:py-12 lg:px-10
        wow
        fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;">
      <form method="POST" action="/listings">
        @csrf

        <div class="mb-6">
          <label for="email" class="block text-xs text-dark">Email*</label>
          <input 
            value="{{old('email')}}"
            type="email" name="email" placeholder="example@yourmail.com" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('email')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="company" class="block text-xs text-dark">Company*</label>
          <input 
            value="{{old('company')}}"
            type="text" name="company" placeholder="Company Name" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('company')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="title" class="block text-xs text-dark">Job Title*</label>
          <input 
            value="{{old('title')}}"
            type="text" name="title" placeholder="Job Title" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('title')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="location" class="block text-xs text-dark">Location*</label>
          <input 
            value="{{old('location')}}"
            type="text" name="location" placeholder="Location" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('location')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>
        
        <div class="mb-6">
          <label for="website" class="block text-xs text-dark">Website*</label>
          <input 
            value="{{old('website')}}"
            type="text" name="website" placeholder="Website" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('website')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="tags" class="block text-xs text-dark">Tags*</label>
          <input 
            value="{{old('tags')}}"
            type="text" name="tags" placeholder="Tags" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">

            @error('tags')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
          <label for="description" class="block text-xs text-dark">Description*</label>
          <textarea 
            type="text" name="description" placeholder="Description" class="
              w-full
              border-0 border-b border-[#f1f1f1]
              focus:border-primary focus:outline-none
              py-4
            ">{{old('description')}}</textarea>

            @error('description')
              <p class="danger-text">{{$message}}</p>
            @enderror
        </div>
        
       


        <div class="mb-0">
          <button type="submit" class="
              inline-flex
              w-full
              items-center
              justify-center
              py-4
              px-6
              rounded
              text-white
              bg-primary
              text-base
              font-medium
              hover:bg-dark
              transition
              duration-300
              ease-in-out
            ">
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>