<script setup>
import SectorLayout from '@/Layouts/SectorLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <SectorLayout>

        <Head title="Settings" />
        <div class="main-content max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Setting List</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Settings
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Setting List
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-5 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                Mitual Categories
                            </div>

                                <Link :href="route('sector.families.create')" class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">
                                    <i class="ri-add-line  align-middle"></i>New
                                </Link>

                        </div>
                        <div class="box-body !p-0">
                            <div class="table-responsive">
                                <table class="table table-hover whitespace-nowrap min-w-full">
                                    <thead>
                                        <tr>
                                            <th scope="row" class="!ps-6">#</th>
                                            <th scope="col" class="text-start">Category</th>
                                            <th scope="col" class="text-start">Amount</th>
                                            <th scope="col" class="text-start">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">1</td>
                                            <td>A</td>
                                            <td>2200</td>
                                            <td>
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
                                            <td>B</td>
                                            <td>2200</td>
                                            <td>
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
                                            <td>C</td>
                                            <td>2200</td>
                                            <td>
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
                                            <td>D</td>
                                            <td>2200</td>
                                            <td>
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
                    </div>
                </div>
                <div class="xl:col-span-8 col-span-12">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </SectorLayout>
</template>
