<div class="navbar bg-base-100 m-0 p-0">
    <div class="navbar-start">
        <a class="btn btn-ghost normal-case text-xl" href="/">
      <span class="h-12 w-12">
@php
    $protocol = request()->isSecure() ? 'https://' : 'http://';
    $currentUrl = url()->current();
    $baseUrl = url('/');
@endphp
          @if($baseUrl==="https://540e-105-161-214-68.ngrok-free.app")
              <img src="{{ secure_asset('images/FoodAppLogo.png') }}" alt="Food App Logo" srcset="">

          @else
              <img src="{{ secure_asset('images/FoodAppLogo.png') }}" alt="Food App Logo" srcset="">
          @endif


      </span>
            <span class="font-bold">
        Lamian
      </span>
        </a>
    </div>
    <div class="navbar-center">
    </div>
    <div class="navbar-end">

        <label class="swap swap-rotate hover:text-warning">

            <!-- this hidden checkbox controls the state -->
            <input id="darkModeToggle" type="checkbox" />

            <!-- sun icon -->
            <svg class="swap-on fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>

            <!-- moon icon -->
            <svg class="swap-off fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>

        </label>

        <script>
            //after the page loads
            window.addEventListener('load', () => {

                    const darkModeSwitch = document.getElementById('darkModeToggle');

                    // Check for a dark mode setting in local storage
                    const darkModeSetting = localStorage.getItem('darkMode');

                    if (darkModeSetting === 'dark') {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    darkModeSwitch.checked = true;
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                    darkModeSwitch.checked = false;
                }

                    darkModeSwitch.addEventListener('change', (event) => {
                    if (event.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    localStorage.setItem('darkMode', 'dark');
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('darkMode', 'light');
                }
                });

        });

        </script>


        <a class="hidden btn sm:flex ring-2 ring-blue-500  btn-warning m-3 btn-outline">Get Location</a>

        <div class="m-3">
            <!-- The button to open modal -->
            <label for="my-modal-3" class="btn btn-ghost btn-warning btn-circle avatar ring-2 ring-blue-500">
                <div class="w-10 rounded-full">
                    <img src="https://thumbs.dreamstime.com/b/nice-to-talk-smart-person-indoor-shot-attractive-interesting-caucasian-guy-smiling-broadly-nice-to-112345489.jpg" />
                </div>
            </label>
        </div>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-3" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold text-center">Entrance to a personal account</h3>
                <p class="text-center">Please login to your account to proceed.</p>
                <form action="" class="w-full flex flex-wrap content-center justify-center items-center align-middle flex-col">
                    <input type="text" placeholder="Phone Number :" class="input input-bordered input-warning w-full max-w-xs m-4" />
                    <input type="submit"class="input input-bordered input-warning w-full max-w-xs m-4" />
                    <span class=" text-center text-sm">By clicking the button, you agree with user agreement and on personal data processing</span>
                </form>
            </div>
        </div>

        <div class="dropdown dropdown-left" x-data="{ open: false }">
            <label @click="open = !open" tabindex="0" class="btn btn-ghost btn-circle hover:btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </label>
            <ul tabindex="0" x-show="open" @click.away="open = false" class="menu dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-60">
                <li><a><span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-bars"></i>
                        </span>Menu</a></li>
                <li><a><span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-truck"></i>
                        </span>Delivery</a></li>
                <li><a><span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-rocket"></i>
                        </span>Franchise</a></li>
                <li><a><span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-circle-info"></i>
                        </span>About Us</a></li>
                <li><a><span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>
                        Contact Us</a></li>
                <li><a>
                        <span class="btn btn-circle avatar border-warning">
                            <i class="fa-solid fa-lock"></i></span>
                        Login
                    </a></li>
            </ul>
        </div>

    </div>
</div>

