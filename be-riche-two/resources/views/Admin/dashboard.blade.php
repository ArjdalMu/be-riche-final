@extends('admin.dashboard_template')


@section('admin')
<main class="relative z-0 flex-1 pb-8 px-6 bg-white">
    <div class="grid pb-10  mt-4 ">
        <!-- Start Content-->
          <div class="mb-2">
            <p class="text-lg font-semibold text-gray-400">{{Auth::user()->name}}</p>
          </div>
          <div class="grid grid-cols-12 gap-6 border-b-2 pb-5">
            <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xxl:col-span-8">
              <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 mt-3">
                 <div class="p-4">
                    <p class="text-xl font-bold">{{$users}} user</p>
                    <p class="text-xs font-semibold text-gray-400">Joined</p>
                 </div>
                 <div class="p-4">
                  <p class="text-xl font-bold">{{ $categoriesCount }}</p>
                  <p class="text-xs font-semibold text-gray-400">Total Categories</p>
                </div>
              
                 <div class="p-4">
                    <p class="text-xl font-bold">{{$subcategoriescount}}</p>
                    <p class="text-xs font-semibold text-gray-400">Total sub categories</p>
                 </div>
                 <div class=" p-4">
                    <p class="text-xl font-bold">{{$totalOrders}}</p>
                    <p class="text-xs font-semibold text-gray-400">Orders of this day</p>
                 </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 xxl:col-span-4">
                
            </div>
          </div>
          <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-3">
            <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
              style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                <div class="absolute inset-0 bg-pink-900 bg-opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                  <div>
                    <h3 class="text-center text-white text-lg">
                         Total Products
                    </h3>
                    <h3 class="text-center text-white text-3xl mt-2 font-bold">
                         {{$product}}
                    </h3>
                   
                  </div>
                </div>
            </div>
             <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
              style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                <div class="absolute inset-0 bg-yellow-600 bg-opacity-75 transition duration-300 ease-in-out"></div>
                  <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center">
                  <div>
                    <div class="text-white text-lg flex space-x-2 items-center">
                      <div class="bg-white rounded-md p-2 flex items-center">
                      
                        <i class="fas fa-shopping-cart fa-sm text-yellow-300"></i>

                      </div>
                      <p>Total Orders</p>
                    </div>
                    <h3 class="text-white text-3xl mt-2 font-bold">
                      {{$orders}}
                    </h3>
                     
                  </div>
                </div>
            </div>
             <div class="relative w-full h-52 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out"
              style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f868ecef-4b4a-4ddf-8239-83b2568b3a6b/de7hhu3-3eae646a-9b2e-4e42-84a4-532bff43f397.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4NjhlY2VmLTRiNGEtNGRkZi04MjM5LTgzYjI1NjhiM2E2YlwvZGU3aGh1My0zZWFlNjQ2YS05YjJlLTRlNDItODRhNC01MzJiZmY0M2YzOTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.R0h-BS0osJSrsb1iws4-KE43bUXHMFvu5PvNfoaoi8o');">
                <div class="absolute inset-0 bg-blue-900 bg-opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex items-center">
                  <div>
                    <div class="text-white text-lg flex space-x-2 items-center">
                      <div class="bg-white rounded-md p-2 flex items-center">
                        <i class="fas fa-money-bill-wave fa-sm text-blue-800"></i>

                        

                      </div>
                      <p>Revenu</p>
                    </div>
                    <h3 class="text-white text-3xl mt-2 font-bold">
                        {{$revenu}} $
                    </h3>
                    
                  </div>
                </div>
            </div>        
          </div>
          
        <!-- End Content-->
    </div>
</main>
@endsection