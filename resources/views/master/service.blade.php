@extends('layouts.master')
@section('title', 'Customer')
@section('styles')
@endsection
@section('content')
   <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            @livewire('components.services.table')
        </div>
   </div>
@endsection
@push('scripts')
    
@endpush
