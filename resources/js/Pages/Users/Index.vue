<script setup>
import TablePagination from '@/Components/TablePagination.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    users: Object
});
const status = {
    active: {
        title: "Active",
        class: "badge !rounded-full bg-primary/10 text-primary"
    },
    inactive: {
        title: "Inactive",
        class: "badge !rounded-full bg-danger/10 text-danger"
    },
};

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
                                <Link :href="route('users.create')"
                                    class="ti-btn ti-btn-primary-full !py-1 !px-2 !text-[0.75rem]">
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
                                        <tr v-for="(user, index) in users.data" :key="index" class="border-t hover:bg-gray-200 dark:hover:bg-light">
                                            <td class="!ps-6">{{ (users.current_page - 1) *
                                                users.per_page + index + 1 }}</td>

                                            <td><strong>{{ user.name }}</strong></td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.phone }}</td>
                                            <td>{{ user.role }}</td>
                                            <!-- <td><span class="badge bg-success/10 text-success">Active</span></td> -->
                                            <td><span :class="status[user.status].class">{{ status[user.status].title
                                                }}</span>
                                        </td>
                                            <td><i class="bi bi-clock me-1"></i>{{ new
                                            Date(user.created_at).toLocaleDateString('en-US', {
                                                month: 'short', day:
                                                    '2-digit', year: 'numeric'
                                            }) }}</td>
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
                        <TablePagination :links="users" />

                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>

    </AuthenticatedLayout>
</template>
