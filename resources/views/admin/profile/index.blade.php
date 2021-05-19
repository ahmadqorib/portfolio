@extends('admin.layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="md:grid md:grid-cols-3 md:gap-6 my-1">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm text-gray-600">
                This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <livewire:admin.profile.personal />
        </div>
    </div>
    <div class="md:grid md:grid-cols-3 md:gap-6 my-1">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Contact</h3>
                <p class="mt-1 text-sm text-gray-600">
                This information will be displayed publicly so be careful what you share.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <livewire:admin.profile.contact />
        </div>
    </div>
@endsection

@push('scripts')

@endpush