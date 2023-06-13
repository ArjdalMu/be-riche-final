@extends('admin.dashboard_template')


@section('admin')
<main class="relative z-0 flex-1 pb-8 px-6 bg-white">
    
    <!-- Start block -->
    <div style="margin-top: 70px">
            <section class="bg-white dark:bg-gray-900 p-3 sm:p-5 antialiased">
                <div class="mx-auto max-w-screen-2xl px-4 lg:px-12">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        @if (session()->has('message'))
                        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                          <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                          <p>{{session()->get('message')}}</p>
                        </div>
                
                    @endif
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                           
    
                            <div class="flex-1 flex items-center space-x-2">
                                <span class="text-gray-500">All Users:</span>
                                
                            </div>
                           
                        </div>
                        <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t dark:border-gray-700">
                            <div class="w-full md:w-1/2">
                                
                            </div>
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                
                               
                                <div id="filterDropdown" class="z-10 hidden px-3 pt-1 bg-white rounded-lg shadow w-80 dark:bg-gray-700 right-0">
                                   
                                    <div class="pt-3 pb-2">
                                       
                                    </div>
                                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-black dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                                        <!-- Category -->
                                       
                                        <div id="category-body" class="hidden" aria-labelledby="category-heading">
                                            <div class="py-2 font-light border-b border-gray-200 dark:border-gray-600">
                                                
                                            </div>
                                        </div>
                                        <!-- Price -->
                                        <h2 id="price-heading">
                                            <button type="button" class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700" data-accordion-target="#price-body" aria-expanded="true" aria-controls="price-body">
                                               
                                            </button>
                                        </h2>
                                        <div id="price-body" class="hidden" aria-labelledby="price-heading">
                                            <div class="flex items-center py-2 space-x-3 font-light border-b border-gray-200 dark:border-gray-600"><select id="price-from" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"><option disabled="" selected="">From</option><option>$500</option><option>$2500</option><option>$5000</option></select><select id="price-to" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"><option disabled="" selected="">To</option><option>$500</option><option>$2500</option><option>$5000</option></select></div>
                                        </div>
                                        <!-- Worldwide Shipping -->
                                        <h2 id="worldwide-shipping-heading">
                                           
                                        </h2>
                                        <div id="worldwide-shipping-body" class="hidden" aria-labelledby="worldwide-shipping-heading">
                                            
                                        </div>
                                        <!-- Rating -->
                                        <h2 id="rating-heading">
                                            
                                        </h2>
                                        <div id="rating-body" class="hidden" aria-labelledby="rating-heading">
                                            <div class="py-2 space-y-2 font-light border-b border-gray-200 dark:border-gray-600">
                                                <div class="flex items-center">
                                                   
                                                </div>
                                                <div class="flex items-center">
                                                    
                                                </div>
                                                <div class="flex items-center">
                                                   
                                                </div>
                                                <div class="flex items-center">
                                                    
                                                </div>
                                                <div class="flex items-center">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                       
                                        <th scope="col" class="p-4">Id</th>
                                        <th scope="col" class="p-4">User Name</th>
                                        <th scope="col" class="p-4">Email</th>
                                        <th scope="col" class="p-4">Role</th>
                                        
                                        <th scope="col" class="p-4">Actions</th>
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                    <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center mr-3">
                                                
                                                {{$item->id}}
                                            </div>
                                        </th>
                                       
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center">
                                              
                                                {{$item->name}}
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center">
                                              
                                                {{$item->email}}
                                            </div>
                                        </td>
                                        
                                        
                                        
                                        
                                        <td class="px-4 py-3">
                                            @foreach ($item->roles as $role)
                           {{$role->name}}
                        @endforeach

                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex items-center space-x-4">
                                                
                                                <form action="{{route('delete-user',$item->id                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       )}}" method="GET">
                                                    <button type="submit" href="{{route('deleteproduct',$item->id)}}" data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>  
                                    
                                    @endforeach                      
                                </tbody>
                            </table>
    
                            @if ($users->isEmpty())
                                <h1 class="p-4 text-l font-semi-bold">
                                    No users added
                                </h1>
                            @endif
                        </div>
                        
                        
                        
                    </div>
                    
                   
                    
    
                   
                </div>
            </section>
    </div>
    
            
    
    
    </main>


@endsection