<script setup>
import SectorLayout from '@/Layouts/SectorLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});


</script>

<template>
    <SectorLayout>

        <Head title="Families" />
        <div class="main-content max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Family Headers</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Family
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Family Headers
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box  overflow-hidden">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                All Family Headers
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example">
                                </div>
                                <Link :href="route('sector.families.create')" class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">
                                    <i class="ri-add-line  align-middle"></i>New family
                                </Link>

                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="table-responsive">

                                <table class="table table-hover whitespace-nowrap min-w-full">
                                    <thead>
                                        <tr>
                                            <th scope="row" class="!ps-6">#</th>
                                            <th scope="col" class="text-start">Names</th>
                                            <th scope="col" class="text-start">Gender</th>
                                            <th scope="col" class="text-start">National ID</th>
                                            <th scope="col" class="text-start">Date of Birth</th>
                                            <th scope="col" class="text-start">Members</th>
                                            <th scope="col" class="text-start">Category</th>
                                            <th scope="col" class="text-start">District</th>
                                            <th scope="col" class="text-start">Sector</th>
                                            <th scope="col" class="text-start">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">1</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                                        <img src="/assets/images/faces/1.jpg" alt="img">
                                                    </span>Mayor Kelly
                                                </div>
                                            </td>


                                            <td><strong>Male</strong></td>
                                            <td>1188228889988277</td>
                                            <td><span class="badge bg-black/10 text-black"><i
                                                        class="bi bi-clock me-1"></i>Nov 12 1994</span></td>

                                            <td>2</td>
                                            <td>B</td>
                                            <td>Rubavu</td>
                                            <td>Gisenyi</td>
                                            <td>
                                                <Link :href="route('sector.families.show',1)"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-primary me-2">
                                                    <i class="ri-eye-line"></i>
                                                </Link>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info me-2">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">2</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                                        <img src="/assets/images/faces/2.jpg" alt="img">
                                                    </span>Stella Conley
                                                </div>
                                            </td>


                                            <td><strong>Female</strong></td>
                                            <td>1199837772262666</td>
                                            <td><span class="badge bg-black/10 text-black"><i
                                                        class="bi bi-clock me-1"></i>Aug 12 2000</span></td>

                                            <td>3</td>
                                            <td>A</td>
                                            <td>Rubavu</td>
                                            <td>Mahoko</td>


                                            <td>
                                                <a aria-label="anchor" href="job-details.html"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-primary me-2">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info me-2">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">3</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                                        <img src="/assets/images/faces/3.jpg" alt="img">
                                                    </span>Curran Hardy
                                                </div>
                                            </td>


                                            <td><strong>Male</strong></td>
                                            <td>1199822773333633</td>
                                            <td><span class="badge bg-black/10 text-black"><i
                                                        class="bi bi-clock me-1"></i>Nov 12 2022</span></td>

                                            <td>7</td>
                                            <td>B</td>
                                            <td>Nyarugenge</td>
                                            <td>Gatsata</td>


                                            <td>
                                                <a aria-label="anchor" href="job-details.html"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-primary me-2">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info me-2">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">4</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                                        <img src="/assets/images/faces/4.jpg" alt="img">
                                                    </span>Nicole Patterson
                                                </div>
                                            </td>


                                            <td><strong>Female</strong></td>
                                            <td>1199009992228887</td>
                                            <td><span class="badge bg-black/10 text-black"><i
                                                        class="bi bi-clock me-1"></i>Nov 12 2022</span></td>

                                            <td>5</td>
                                            <td>C</td>
                                            <td>Musanze</td>
                                            <td>Kinigi</td>


                                            <td>
                                                <a aria-label="anchor" href="job-details.html"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-primary me-2">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info me-2">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">5</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <span class="avatar avatar-xs me-2 avatar-rounded">
                                                        <img src="/assets/images/faces/5.jpg" alt="img">
                                                    </span>Robin Roman
                                                </div>
                                            </td>


                                            <td><strong>Male</strong></td>
                                            <td>11999288877733223</td>
                                            <td><span class="badge bg-black/10 text-black"><i
                                                        class="bi bi-clock me-1"></i>Jan 02 1992</span></td>

                                            <td>3</td>
                                            <td>D</td>
                                            <td>Rwamagana</td>
                                            <td>Ntunga</td>


                                            <td>
                                                <a aria-label="anchor" href="job-details.html"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-primary me-2">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info me-2">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer border-t-0">
                            <div class="flex items-center flex-wrap overflow-auto">
                                <div class="mb-2 sm:mb-0">
                                    Showing <b>1</b> to <b>10</b> of <b>10</b> entries <i
                                        class="bi bi-arrow-right ms-2 font-semibold"></i>
                                </div>
                                <div class="ms-auto">
                                    <nav aria-label="Page navigation">
                                        <ul class="ti-pagination  mb-0">
                                            <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">Previous</a></li>
                                            <li class="page-item"><a class="page-link active px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">5</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                                    href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>

    </SectorLayout>
</template>
