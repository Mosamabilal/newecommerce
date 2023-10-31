@extends('admin/template')

@section('content')
<!-- END: Profile Menu -->
<div class="col-span-12 lg:col-span-8 2xl:col-span-9">
    <!-- BEGIN: Display Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Display Information
            </h2>
        </div>
        <div class="p-5">
            <div class="flex flex-col-reverse xl:flex-row flex-col">
                <div class="flex-1 mt-6 xl:mt-0">
                    <form action="{{ URL('/admin/profile') }}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 2xl:col-span-6">
                            <div>
                                <label for="update-profile-form-1" class="form-label">Display Name</label>
                                <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{ Auth::user()->name }}" name="name" >
                            </div>

                        </div>
                        <div class="col-span-12 2xl:col-span-6">

                            <div class="mt-3">
                                <label for="update-profile-form-4" class="form-label">Email</label>
                                <input id="update-profile-form-4" type="email" class="form-control" placeholder="Input text" value="{{ Auth::user()->email }}" name="email">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Display Information -->
@endsection
