@extends('admin/template')


@section('content')

        <!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    General Report
                                </h2>
                                <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">

                                                <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>

                                            </div>
                                            <div class="text-3xl font-medium leading-8 mt-6">{{ count($categories) }}</div>
                                            <div class="text-base text-slate-500 mt-1">Categories</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-lucide="credit-card" class="report-box__icon text-pending"></i>

                                            </div>
                                            <div class="text-3xl font-medium leading-8 mt-6">{{ count($products) }}</div>
                                            <div class="text-base text-slate-500 mt-1">Total Products</div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- END: General Report -->




                    </div>
                </div>
                <div class="col-span-12 2xl:col-span-3">
                    <div class="2xl:border-l -mb-10 pb-10">
                        <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
        @endsection
