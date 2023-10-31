@extends('admin/template')

@section('content')

               <!-- END: Top Bar -->
               <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        {{ $settings->name }} Theme Settings
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Form Layout -->
                    <form action="{{ URL('admin/settings/'.$settings->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="intro-y box p-5">
                            <div class="mt-3">
                                <label for="crud-form-1" class="form-label">Theme Name</label>
                                <input id="crud-form-1" name="name" type="text" class="form-control w-full" value="{{ $settings->name }}" placeholder="Input text">
                            </div>
                            <div class="mt-3">
                                <div class="form-outline">
                                    <label class="form-label" for="textAreaExample">About</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="6" name="about">{{ $settings->about }}</textarea>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Email</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="email" type="email" class="form-control w-full" placeholder="Product Price" value="{{ $settings->email }}">
                            </div>
                            <div class="mt-3">
                                <label>Phone Number</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="phone" type="phone" class="form-control w-full" placeholder="Product Price" value="{{ $settings->phone }}">
                            </div>

                            <div class="mt-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Logo</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
                                <div class="w-20 h-20 image-fit zoom-in mt-5">
                                    <img alt="Admin Theme Settings" class="tooltip" src="{{ asset('uploads/'.$settings->logo) }}" >
                                </div>

                            </div>

                            <div class="mt-3">
                                <label>Facebook Url</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="facebook" type="url" class="form-control w-full" placeholder="Product Price" value="{{ $settings->facebook }}">
                            </div>

                            <div class="mt-3">
                                <label>Twiiter Url</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="twitter" type="url" class="form-control w-full" placeholder="Product Price" value="{{ $settings->twitter }}">
                            </div>

                            <div class="mt-3">
                                <label>Insta Url</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="insta" type="url" class="form-control w-full" placeholder="Product Price" value="{{ $settings->insta }}">
                            </div>

                            <div class="mt-3">
                                <label>Facebook Youtube</label>
                                <label for="crud-form-1" class="form-label"></label>
                                <input id="crud-form-1" name="youtube" type="url" class="form-control w-full" placeholder="Product Price" value="{{ $settings->youtube }}">
                            </div>

                            <div class="text-right mt-5">
                                <button type="submit" class="btn btn-primary w-24">Update/Save</button>
                            </div>
                        </div>
                        <!-- END: Form Layout -->
                    </form>
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        @endsection
