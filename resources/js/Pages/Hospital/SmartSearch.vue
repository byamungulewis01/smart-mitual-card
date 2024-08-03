<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import axios from 'axios';
import { ref } from 'vue';

const isCardTaped = ref(false);
const cardNumber = ref('');
const data = ref({});

Echo.channel("read-card").listen("ReadCardNumber", (e) => {
    cardNumber.value = e.cardNumber;
    isCardTaped.value = true;

    // fetch person
    axios.get(route('searchPerson', cardNumber.value))
        .then((response) => {
            data.value = response.data;
        }).catch((error) => {
            log.error('error', error);
        });

});
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Smart Search" />
        <div class="main-content max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex"></div>
            <!-- Page Header Close -->

            <div class="about-container mb-6">
                <div class="!max-w-[35rem] !justify-center !mx-auto !items-center mb-[3rem]">
                    <div v-if="!isCardTaped" class="box text-default shadow border dark:border-defaulttextcolor/10">
                        <h5 class="text-[1.25rem] !font-medium text-center mt-4">Tap card to continue </h5>

                        <div class="box-header justify-between">
                            <div class="space-x-6 space-y-4 rtl:space-x-reverse mb-4">

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="ti-spinner !animate-ping !border-transparent  bg-black/20 dark:!bg-light dark:animate-ping "
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <div class="ti-spinner !animate-ping !border-transparent  bg-gray-400" role="status"
                                    aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else>
                        <div v-if="data.success">
                            <div class="box-body !p-0">
                                <div class="sm:flex items-center p-5 border-b dark:border-defaultborder/10 border-dashed">
                                    <div>
                                        <span class="avatar avatar-xl avatar-rounded me-4">
                                            <img :src="$page.props.asset_url + '/storage/' + data.person.image" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow main-profile-info">
                                        <div class="flex items-center !justify-between">
                                            <h6 class="font-semibold mb-1 text-black text-[1rem]">{{ data.person.first_name }} {{ data.person.last_name }}</h6>

                                        </div>
                                        <p class="mb-1 !text-black  opacity-[0.7]"> <strong> </strong>{{ data.person.national_id }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="flex items-center justify-between gap-2 flex-wrap">
                                    <div>
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Pay
                                            Status</span>
                                        <span
                                            class="block text-[1rem] p-2 font-semibold dark:text-defaulttextcolor/70"><span
                                                class="badge bg-danger text-white">Not Payed</span></span>
                                    </div>
                                    <div>
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Last pay
                                            date</span>
                                        <span
                                            class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">05,July
                                            2023</span>
                                    </div>
                                    <div class="task-details-progress">
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem] mb-1">Mutual
                                            year</span>
                                        <span
                                            class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">2023</span>
                                    </div>
                                    <div>
                                        <span class="block text-[#8c9097] dark:text-white/50 text-[0.75rem]">Amount
                                            Paid</span>
                                        <span
                                            class="block text-[.875rem]  dark:text-defaulttextcolor/70 font-semibold">12,000
                                            Rfw</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body !p-0">
                                <div class="p-5 dark:border-defaultborder/10">
                                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Other Details :</p>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="flex flex-wrap justify-start gap-6">
                                                <div class="flex flex-wrap items-center">
                                                    <div class="me-2 font-semibold">
                                                        Gender:
                                                    </div>
                                                    <span
                                                        class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ data.person.gender.toUpperCase() }}</span>
                                                </div>
                                                <div class="flex flex-wrap items-center">
                                                    <div class="me-2 font-semibold">
                                                        Age:
                                                    </div>
                                                    <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ data.person.age}}</span>
                                                </div>
                                                <div class="flex flex-wrap items-center">
                                                    <div class="me-2 font-semibold">
                                                        Date of Birth :
                                                    </div>
                                                    <span class="text-[0.75rem] text-[#8c9097] dark:text-white/50">{{ data.person.dateOfBirth }}</span>
                                                </div>


                                            </div>
                                        </li>

                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div v-else class="box-body !p-0">
                            <h1>Card not registered here</h1>
                        </div>


                    </div>

                </div>
            </div>

        </div>

    </AuthenticatedLayout>
</template>
