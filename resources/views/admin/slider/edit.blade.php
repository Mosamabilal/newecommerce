@extends('admin/template')

@section('content')

               <!-- END: Top Bar -->
               <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Edit Slider
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Form Layout -->
                    <form action="{{ URL('admin/slider/'.$slider->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="intro-y box p-5">
                            <div class="mt-3">
                                <label for="crud-form-1" class="form-label">HEADING</label>
                                <input id="crud-form-1" name="heading" type="text" class="form-control w-full" value="{{ $slider->heading }}" placeholder="Input text">
                            </div>

                            <div class="mt-3">
                                <div class="form-outline">
                                    <label class="form-label" for="textAreaExample">TEXT / DESCRIPTION</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="6" name="description">{{ $slider->description }}</textarea>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="crud-form-1" class="form-label">LINK TEXT</label>
                                <input id="crud-form-1" name="link_name" type="text" class="form-control w-full"  value="{{ $slider->link_name }}">
                            </div>

                            <div class="mt-3">
                                <label for="crud-form-1" class="form-label">LINK</label>
                                <input id="crud-form-1" name="link" type="text" class="form-control w-full"  value="{{ $slider->link }}">
                            </div>

                            <div class="mt-3">
                                <label>Active Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input" value="1" name="status" checked>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
                                <div class="w-20 h-20 image-fit zoom-in mt-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip" src="{{ asset('uploads/'.$slider->image) }}" >
                                </div>
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
