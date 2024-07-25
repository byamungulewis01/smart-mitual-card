<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <AuthenticatedLayout>

        <Head title="Create User" />
        <div class="main-content max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Create User</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Users
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Create User
                    </li>
                </ol>
            </div>
            <!-- Page Header Close -->

            <div class="grid grid-cols-12 gap-6 mb-[3rem]">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="tab-content">
                                <div class="tab-pane show active dark:border-defaultborder/10" id="personal-info"
                                    aria-labelledby="Personal-item">
                                    <div class="sm:p-4 p-0">

                                        <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">Name</label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="first-name" placeholder="Enter names">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="last-name" class="form-label">Email</label>
                                                <input type="email" class="form-control w-full !rounded-md"
                                                    id="last-name" placeholder="Enter email">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="first-name" placeholder="Phonr number">
                                            </div>
                                            <div class="xl:col-span-3 col-span-12">
                                                <label for="first-name" class="form-label">Role</label>
                                                <select class="ti-form-select rounded-sm !py-2 !px-3">
                                                    <option selected=""> -- select -- </option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-3 col-span-12">
                                                <label for="last-name" class="form-label">Status</label>
                                                <select class="ti-form-select rounded-sm !py-2 !px-3">
                                                    <option selected=""> -- select -- </option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div class="sm:grid grid-cols-12 gap-6">
                                            <div class="xl:col-span-12 col-span-12">
                                                <button type="button"
                                                    class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </AuthenticatedLayout>
</template>
