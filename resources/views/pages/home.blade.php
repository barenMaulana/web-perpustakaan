@extends('layouts.home')
@section('content')
        <!-- search section -->
        @livewire('components.global-search')
    
        <!-- books -->
        <section class="bg-white border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h2 class="w-full my-2 text-xl font-black leading-tight text-center text-gray-800">
                    New collections + updated
                </h2>
                <p class="text-gray-500 font-light mb-10 text-center mx-auto w-9/12">These are new collections list. Hope
                    you like
                    them. Maybe
                    not all
                    of them
                    are
                    new.
                    But in term of time, we make sure that these are fresh from our processing oven</p>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
    
                <div class="flex flex-wrap justify-center lg:justify-between w-full p-6 bg-gray-100">
    
                    @forelse ($books as $book)
                        <div class="bg-white rounded overflow-hidden shadow w-40 px-3 mx-4 my-4 lg:my-0 hover:shadow-xl">
                            <a href="{{url('book-details/'.$book->id)}}">
                                <div class="pt-3">
                                    <img src="{{asset('storage/'.$book->cover_file_name)}}" alt="cover" class="mx-auto" width="150">
                                </div>
                                <p class="w-full text-gray-900 text-xs font-light md:text-xs h-10 my-2 overflow-auto">
                                    {{$book->title}}
                                </p>
                            </a>
                        </div>     
                    @empty
                        <h2 class="w-full my-2 text-xl font-black leading-tight text-center text-gray-500">
                            Oops..buku nya lagi kosong
                        </h2>
                    @endforelse
                   
                </div>
            </div>
        </section>
    
        <!-- call to action -->
        <section class="w-full mx-auto text-center shadow-inner bg-gray-100 h-10 pb-5">
     
        </section>
@endsection