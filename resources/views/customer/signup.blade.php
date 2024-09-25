@extends('layouts.app')
@section('title', "Sign Up")
@section('content')
<div class="my-auto">
    <form class="mx-auto max-w-[calc(100vw-2rem)] w-96" action="/" method="POST">
        @csrf
        <h1 class="text-center text-3xl font-bold m-5">Sign Up</h1>
      <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required value="{{old('name')}}"/>
      </div>
      <div class="mb-5">
        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your phone number</label>
        <input type="tel" name="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="+62 123 456 789" value="{{old('phone_number')}}"/>
        @if(session('error'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
            <span class="font-medium">{{ session('error') }}</span>
        </p>
        @endif
    
    
      </div>
    
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
    </form>
</div>
@endsection