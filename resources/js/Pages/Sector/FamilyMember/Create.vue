<script setup>
import SectorLayout from '@/Layouts/SectorLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <SectorLayout>

        <Head title="Create Member" />
        <div class="main-content max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Create Member</h3>
                </div>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[0.813rem] ps-[0.5rem]">
                        <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                            href="javascript:void(0);">
                            Member
                            <i
                                class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                        </a>
                    </li>
                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                        aria-current="page">
                        Create Member
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
                                        <h6 class="font-semibold mb-4 text-[1rem]">
                                            Photo :
                                        </h6>
                                        <div class="mb-6 sm:flex items-center">
                                            <div class="mb-0 me-[3rem]">
                                                <span class="avatar avatar-xxl avatar-rounded">
                                                    <img src="/assets/images/faces/9.jpg" alt="" id="profile-img">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="badge rounded-full bg-primary avatar-badge">
                                                        <input type="file" name="photo"
                                                            class="absolute w-full h-full opacity-0" id="profile-image">
                                                        <i class="fe fe-camera !text-[0.65rem]"></i>
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="inline-flex">
                                                <button type="button"
                                                    class="ti-btn bg-primary text-white !rounded-e-none !font-medium ">Change</button>
                                                <button type="button"
                                                    class="ti-btn ti-btn-light !font-medium !rounded-s-none">Remove</button>
                                            </div>
                                        </div>
                                        <h6 class="font-semibold mb-4 text-[1rem]">
                                            Profile :
                                        </h6>
                                        <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">First Name</label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="first-name" placeholder="First Name">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="last-name" class="form-label">Last Name</label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="last-name" placeholder="Last Name">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">National ID</label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="first-name" placeholder="National ID">
                                            </div>
                                            <div class="xl:col-span-4 col-span-12">
                                                <label for="first-name" class="form-label">Date of Birth</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i
                                                                class="ri-calendar-line"></i> </div>
                                                        <input type="date" class="form-control flatpickr-input"
                                                            id="startDate" placeholder="Choose date and time"
                                                            readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xl:col-span-2 col-span-12">
                                                <label for="last-name" class="form-label">Gender</label>
                                                <div class="flex gap-4 mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label"
                                                            for="inlineRadio2">Female</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">Matial Status</label>
                                                <select class="ti-form-select rounded-sm !py-2 !px-3">
                                                    <option selected=""> -- select -- </option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="first-name" class="form-label">Phone Number &nbsp; <span
                                                        class="text-black-100"> (Optional)</span></label>
                                                <input type="text" class="form-control w-full !rounded-md"
                                                    id="first-name" placeholder="Phone Number">
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

    </SectorLayout>
</template>
