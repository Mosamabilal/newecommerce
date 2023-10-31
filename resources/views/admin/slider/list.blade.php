@extends('admin/template')

@section('content')

<h2 class="intro-y text-lg font-medium mt-10">
                    Home Page Slider
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <a href="{{route('slider.create')}}" type="button" class="btn btn-primary shadow-md mr-2">Add New Slider</a>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                <th class="whitespace-nowrap">#</th>
                                <th class="whitespace-nowrap">IMAGE</th>
                                    <th class="whitespace-nowrap">HEADING</th>
                                    <th class="whitespace-nowrap">TEXT</th>
                                    <th class="whitespace-nowrap">LINK TEXT</th>
                                    <th class="whitespace-nowrap">LINK URL</th>

                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                          <tbody>
                          @php
                            $count = 1;
                           @endphp
                   @foreach($sliders as $slider)
                       <tr class="intro-x">
                       <td>{{ $count }}</td>
                       <td class="w-40">
                           <div class="flex">
                               <div class="w-10 h-10 image-fit zoom-in">
                                   <img alt="Midone - HTML Admin Template" class="tooltip" src="{{ asset('uploads/'.$slider->image) }}" >
                               </div>

                           </div>
                       </td>
                           <td>

                               <div class="font-medium  whitespace-nowrap ">{{ $slider->heading }}</div>
                           </td>
                           <td>

                               <div class="font-medium  whitespace-nowrap ">{{ $slider->description }}</div>
                           </td>
                           <td>

                               <div class="font-medium  whitespace-nowrap">{{ $slider->link_name }}</div>
                           </td>
                           <td><div class="font-medium  whitespace-nowrap">{{ $slider->link }} </div></td>
                           <td class="w-40">
                           @if ($slider->status == "1")
                               <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                           @else
                           <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Deactive </div>
                           @endif
                           </td>

                           <td class="table-report__action w-56">
                               <div class="flex justify-center items-center">
                                   <a class="flex items-center mr-3" href="{{ URL('admin/slider/'.$slider->id.'/edit') }}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>

                                   <form action="{{ URL('admin/slider/'.$slider->id) }}" method="POST">
                                       @csrf
                                       @method('Delete')
                                       <button type="submit" class="flex items-center text-danger"  data-tw-toggle="modal" > <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </button>
                                   </form>
                                   </div>
                           </td>
                       </tr>
                       @php
                           $count++;
                       @endphp
                       @endforeach
                   </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->

                </div>
                <!-- BEGIN: Delete Confirmation Modal -->
                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Are you sure?</div>
                                    <div class="text-slate-500 mt-2">
                                        Do you really want to delete these records?
                                        <br>
                                        This process cannot be undone.
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>


                                <button type="submit" class="btn btn-danger w-24">Delete</button>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
            <!-- END: Content -->
        </div>
@endsection
