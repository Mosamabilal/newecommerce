@extends('admin/template')

@section('content')

<h2 class="intro-y text-lg font-medium mt-10">
                    Products List
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
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
                                <th class="whitespace-nowrap">Date & Time</th>
                                <th class="whitespace-nowrap">CUSTOMER NAME</th>
                                    <th class="whitespace-nowrap">PHONE NUMBER</th>
                                    <th class="whitespace-nowrap">PRICE</th>
                                    <th class="whitespace-nowrap">STATUS</th>
                                    <th class="whitespace-nowrap">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @php
                                     $count = 1;
                                    @endphp
                            @foreach($orders as $order)
                            <tr class="intro-x">
                                <td>{{ $count }}</td>

                                <td class="text-justify">{{ $order->created_at }} </td>


                                <td>

                                        <div class="font-medium  whitespace-nowrap ">{{ $order->customers->first_name }}</div>
                                    </td>
                                    <td>

                                        <div class="font-medium  whitespace-nowrap ">{{ $order->customers->phone }}</div>
                                    </td>
                                    <td>

                                        <div class="font-medium  whitespace-nowrap ">{{ $order->total }}</div>
                                    </td>
                                    <td class="text-justify">{{ $order->status }} </td>
                                    <!--<td class="w-40">

                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>

                                    <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Deactive </div>

                                    </td>-->

                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">

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
