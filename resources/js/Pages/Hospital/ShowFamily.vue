<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
const props = defineProps({
    family: Object,
    family_members: Object,
});
const item = props.family.data;

</script>

<template>
    <AuthenticatedLayout>

        <Head title="Family" />
        <div class="main-content max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex"></div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-4 col-span-12">
                    <div class="box overflow-hidden">
                        <div class="box-body !p-0">
                            <div class="sm:flex items-center p-5 border-b dark:border-defaultborder/10 border-dashed">
                                <div>
                                    <span class="avatar avatar-xl avatar-rounded me-4">
                                        <img :src="$page.props.asset_url + '/storage/' + item.image" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow main-profile-info">
                                    <div class="flex items-center !justify-between">
                                        <h6 class="font-semibold mb-1 text-black text-[1rem]">{{ item.first_name }} {{
                                            item.last_name }}</h6>

                                    </div>
                                    <p class="mb-1 !text-black  opacity-[0.7]"> {{ item.national_id }}
                                    </p>

                                </div>
                            </div>

                            <div class="p-5 border-b border-dashed dark:border-defaultborder/10">
                                <p class="text-[.9375rem] mb-2 me-6 font-semibold">Details Information :</p>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Gender:
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.gender }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Category :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.category }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Phone :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ item.phone
                                                }}</span>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Age :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ item.age
                                                }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Date of Birth :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.dateOfBirth }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                District :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.district }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Sector :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.sector }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Cell :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ item.cell
                                                }}</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="flex flex-wrap items-center">
                                            <div class="me-2 font-semibold">
                                                Village :
                                            </div>
                                            <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{
                                                item.village }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-8 col-span-12">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">

                            <div class="box-footer">
                                <div class="flex items-center justify-between gap-2 flex-wrap">
                                    <div>
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Pay Status</span>
                                        <span
                                            class="block text-[1rem] p-2 font-semibold dark:text-defaulttextcolor/70"><span class="badge bg-danger text-white">Not Payed</span></span>
                                    </div>
                                    <div>
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Last pay date</span>
                                        <span
                                            class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">05,July
                                            2023</span>
                                    </div>
                                    <div class="task-details-progress">
                                        <span
                                            class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1">Mutual year</span>
                                            <span
                                            class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">2023</span>
                                    </div>
                                    <div>
                                        <span
                                            class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Amount Paid</span>
                                        <span
                                            class="block text-[.875rem]  dark:text-defaulttextcolor/70 font-semibold">12,000 Rfw</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    All Family Members
                                </div>

                            </div>
                            <div class="box-body !p-0">
                                <div class="grid grid-cols-12 sm:gap-x-6 m-5">
                                    <div v-for="(item, index) in family_members.data" :key="index"
                                        class="xl:col-span-4 lg:col-span-6 md:col-span-6 col-span-12">
                                        <div class="box !shadow-none border dark:border-defaultborder/10">
                                            <div class="box-body p-6">
                                                <div class="text-center">
                                                    <span class="avatar avatar-xl avatar-rounded">
                                                        <img :src="$page.props.asset_url + '/storage/' + item.image"
                                                            alt="">
                                                    </span>
                                                    <div class="mt-2">
                                                        <p class="mb-0 font-semibold">{{ item.first_name }} {{
                                                            item.last_name }}</p>

                                                        <p>
                                                            <span class="font-semibold">ID : </span>
                                                            <span
                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">{{
                                                                item.national_id ?? 'not available' }}</span>
                                                        </p>

                                                        <p>
                                                            <span class="font-semibold">Age : </span>
                                                            <span
                                                                class="text-[0.75rem] opacity-[0.7] mb-1 text-[#8c9097] dark:text-white/50">{{
                                                                item.age }}</span>
                                                        </p>
                                                        <p class="mt-3">
                                                            <span class="badge bg-info/10 text-info rounded-full">{{
                                                                item.gender }}</span>

                                                        </p>
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
            </div>


        </div>

    </AuthenticatedLayout>
</template>
