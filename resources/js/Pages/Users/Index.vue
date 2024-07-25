<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
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
    <AuthenticatedLayout>

        <Head title="Users" />
        <div class="main-content max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Users List</h3>
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
                        Users List
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
                                All Users
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example">
                                </div>
                                <Link :href="route('users.create')" class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">
                                    <i class="ri-add-line  align-middle"></i>New user
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
                                            <th scope="col" class="text-start">Email</th>
                                            <th scope="col" class="text-start">Phone Number</th>
                                            <th scope="col" class="text-start">Role</th>
                                            <th scope="col" class="text-start">Status</th>
                                            <th scope="col" class="text-start">Join Date</th>
                                            <th scope="col" class="text-start">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">1</td>

                                            <td><strong>BYAMUNGU Lewis</strong></td>
                                            <td>byamungulewi@gmail.com</td>
                                            <td>07866667777</td>
                                            <td>Administrator</td>
                                            <td><span class="badge bg-success/10 text-success">Active</span></td>
                                            <td><i class="bi bi-clock me-1"></i>Nov 12 1994</td>
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

                                            <td><strong>Howard Bartlett</strong></td>
                                            <td>howard@gmail.com</td>
                                            <td>0783555299</td>
                                            <td>Administrator</td>
                                            <td><span class="badge bg-danger/10 text-danger">Inactive</span></td>
                                            <td><i class="bi bi-clock me-1"></i>Nov 02 1999</td>
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

                                            <td><strong>Karyn Stuart</strong></td>
                                            <td>karyn@gmail.com</td>
                                            <td>078666555</td>
                                            <td>Recieptionist</td>
                                            <td><span class="badge bg-danger/10 text-danger">Inactive</span></td>
                                            <td><i class="bi bi-clock me-1"></i>Nov 02 1999</td>
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

    </AuthenticatedLayout>
</template>
