<script setup>
import SectorLayout from '@/Layouts/SectorLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';

const form = useForm({
    amount: '',
    phone: '',

});

const submit = () => {
    form.post(route('irembo.test_payment_store'),
        {
            onSuccess: () => {
                form.reset();
            },
            onError: (errors) => {
                console.log('error', errors);
                // Handle error responses or validation errors
            },
        }
    );
};


</script>

<template>
    <SectorLayout>

        <Head title="Create Family" />
        <div class="main-content max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex">
                <div>
                    <h3
                        class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                        Create Family</h3>
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
                        Create Family
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
                                    <form @submit.prevent="submit">
                                        <div class="sm:p-4 p-0">


                                            <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="amount" class="form-label">Amount</label>
                                                    <input type="text" v-model="form.amount"
                                                        class="form-control w-full !rounded-md" id="amount"
                                                        placeholder="First Name">
                                                    <InputError class="mt-1" :message="form.errors.amount" />
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="text" v-model="form.phone"
                                                        class="form-control w-full !rounded-md" id="phone"
                                                        placeholder="Last Name">
                                                    <InputError class="mt-1" :message="form.errors.phone" />
                                                </div>

                                            </div>

                                            <div class="sm:grid grid-cols-12 gap-6">
                                                <div class="xl:col-span-12 col-span-12">
                                                    <button
                                                        class="ti-btn ti-btn-primary btn-wave ms-auto float-right">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </SectorLayout>
</template>
