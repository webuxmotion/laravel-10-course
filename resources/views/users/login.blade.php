<x-layout>
  <x-banner-section text="Login" />

  <!-- ====== Forms Section Start -->
  <section class="bg-[#F4F7FF] py-14 lg:py-20">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div
            class="
              max-w-[525px]
              mx-auto
              text-center
              bg-white
              rounded-lg
              relative
              overflow-hidden
              py-14
              px-8
              sm:px-12
              md:px-[60px]
              wow
              fadeInUp
            "
            data-wow-delay=".15s"
          >
            <form method="POST" action="/users/authenticate">
              @csrf

              <div class="mb-6">
                <input
                  type="email"
                  placeholder="Email"
                  name="email"
                  value="{{old('email')}}"
                  class="
                    w-full
                    rounded-md
                    border
                    bordder-[#E9EDF4]
                    py-3
                    px-5
                    bg-[#FCFDFE]
                    text-base text-body-color
                    placeholder-[#ACB6BE]
                    outline-none
                    focus-visible:shadow-none
                    focus:border-primary
                    transition
                  "
                />
                @error('email')
                  <p class="danger-text">{{$message}}</p>
                @enderror
              </div>

              <div class="mb-6">
                <input
                  type="password"
                  placeholder="Password"
                  name="password"
                  class="
                    w-full
                    rounded-md
                    border
                    bordder-[#E9EDF4]
                    py-3
                    px-5
                    bg-[#FCFDFE]
                    text-base text-body-color
                    placeholder-[#ACB6BE]
                    outline-none
                    focus-visible:shadow-none
                    focus:border-primary
                    transition
                  "
                />
                @error('password')
                  <p class="danger-text">{{$message}}</p>
                @enderror
              </div>

              <div class="mb-10">
                <input
                  type="submit"
                  value="Sign In"
                  class="
                    w-full
                    rounded-md
                    border
                    bordder-primary
                    py-3
                    px-5
                    bg-primary
                    text-base text-white
                    cursor-pointer
                    hover:shadow-md
                    transition
                    duration-300
                    ease-in-out
                  "
                />
              </div>
            </form>

            <p class="text-base text-[#adadad]">
              Not a member yet?
              <a href="/register" class="text-primary hover:underline">
                Sign Up
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Forms Section End -->
</x-layout>