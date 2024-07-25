<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <AuthenticatedLayout>

        <Head title="Manual Search" />
        <div class="main-content max-w-5xl mx-auto sm:px-6 lg:px-8">

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12 gap-x-6">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box mt-6">
                        <div class="box-body">
                            <div class="contact-header">
                                <div class="flex flex-row block items-center justify-start">
                                    <div class="h5 font-semibold mb-0 basis-1/2">Search Family</div>

                                    <div class="basis-1/2 flex sm:mt-0 mt-2 items-center">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control !rounded-s-sm w-full !bg-light !border-0"
                                                placeholder="Search Family number"
                                                aria-describedby="search-contact-member">
                                            <button aria-label="button" type="button"
                                                class="ti-btn ti-btn-light  !rounded-s-none !mb-0"
                                                id="search-contact-member"><i
                                                    class="ri-search-line text-[#8c9097] dark:text-white/50"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/1.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Melissa Jane
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - Gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <Link :href="route('showFamily',1)" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/2.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Alicia Sierra
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Kicukiro - Gatenga</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1200033998273847
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/3.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Jhope Joseph
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Kamonyi - Kamonyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/4.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            King Martin
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Burera - Burera</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/5.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Susan Sane
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/6.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Brenda Hops
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/7.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Paul Rudd
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/8.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Elisha Jin
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/9.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Melissa Jane
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rubavu - gisenyi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199880011998228
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/10.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            King Martin
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Rwamagana - Ntunga</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199338844750947
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/11.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Melissa Jane
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Gasabo - Kinyinya</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1199448855774466
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <div class="box">
                        <div class="box-body contact-action">
                            <div class="contact-overlay"></div>
                            <div class="flex items-start ">
                                <div class="flex flex-grow flex-wrap gap-2">
                                    <div class="avatar avatar-xl avatar-rounded me-3">
                                        <img src="/assets/images/faces/12.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class=" mb-1 font-semibold text-[1rem]">
                                            Angelica Hose
                                        </h6>
                                        <p class="mb-1 text-[#8c9097] dark:text-white/50 contact-mail text-truncate">
                                           Musanze - Kinigi</p>
                                        <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                            1188337744666555
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                <a href="#" type="button"
                                    class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </AuthenticatedLayout>
</template>
