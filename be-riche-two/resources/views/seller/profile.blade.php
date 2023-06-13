
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
<!-- component -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap');

  main{
    font-family: 'Montserrat', sans-serif;
  }
</style>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page">
    
  <section class="relative block h-600-px">
    
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bg-blueGray-200">
  
    <div class="container mx-auto px-4">
    
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg " style="margin-top: -404px;
      ">
        @if (session()->has('message'))
                    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                      <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                      <p>{{session()->get('message')}}</p>
                    </div>
            
                @endif

                @if (session()->has('danger'))
                    <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
                      <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                      <p>{{session()->get('message')}}</p>
                    </div>
            
                @endif
        <div class="px-6">
          
          <div class="flex flex-wrap justify-center">
            
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              
              <div class="relative mt-5">

                <div class="w-40 h-40">
                  @if(!empty($user->photo))
                    <img alt="..." src="{{ asset($user->photo) }}" class="object-cover w-full h-full shadow-xl rounded-full">
                  @else
                    <img alt="Profile Image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/2048px-Circle-icons-profile.svg.png" class="object-cover w-full h-full shadow-xl rounded-full">
                  @endif
                </div>
                
                <div class="absolute bottom-0 left-0 w-0 h-0 border-t border-r border-gray-900 transform -translate-x-8 translate-y-8 rotate-45"></div>
              </div>
              
              
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1 ">
              
              </div>
            </div>
          </div>
          <div class="text-center mt-12">
            <div class="mb-5">
                <a href={{route('edit-seller')}} class="mb-4 bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" >
                    Edit Profile
                  </a>
            </div>
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
              {{$user->name}}
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
              @if(!empty($user->adresse))
                  {{ $user->adresse }}
              @else
              <a href="{{route('buyer.edit')}}"  target="_blank"><span class="text-blue-500 text-light">Add Adresse</span></a> 
              @endif
            </div>
            
            <div class="mb-2 text-blueGray-600 mt-10">
              <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>Member since :{{ $user->created_at->format('F d, Y') }}
            </div>
            
           
          </div>
          <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                    @if (!empty($user->description))
                    {{$user->description}}
                    @else
                    <a href="{{route('buyer.edit')}}"  target="_blank"><span class="text-blue-500 text-light">Add Description</span></a> 
                    @endif
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </section>


  
</main>

