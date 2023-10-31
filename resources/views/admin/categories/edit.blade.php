@extends('admin/template')

@section('content')

               <!-- END: Top Bar -->
               <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        ADD NEW CATEGORY
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Form Layout -->



                    <form action="{{ URL('admin/categories/'.$category->id) }}" method="Post">

                        @csrf
                        @method('PUT')

                        <div class="intro-y box p-5">
                            <div>
                                <label for="crud-form-1" class="form-label">Name</label>
                                <input id="crud-form-1" name="name" type="text" class="form-control w-full" placeholder="Input text" value= "{{$category->name}}">
                            </div>

                            <div class="mt-3">
                                <div class="form-outline">
                                    <label class="form-label" for="textAreaExample">Description</label>
                                    <textarea class="form-control" id="textAreaExample1" rows="6" name="description">{{ $category->description }}</textarea>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label>Active Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input" value="1" name="status" {{$category->status == "1" ? "checked" : ""}}>
                                </div>
                            </div>

                            <div class="text-right mt-5">
                                <button type="submit" class="btn btn-primary w-24">Save</button>
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
