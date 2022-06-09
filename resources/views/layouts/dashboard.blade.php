<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('dashboard')}}
    </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overlow-hidden shadow-xl sm:rounded-lg">
      <x-jet-welcome/>
</div>
</div>
</x-app-layout>