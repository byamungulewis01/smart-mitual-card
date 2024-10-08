<script setup>
import TablePagination from '@/Components/TablePagination.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    cards: Object
});


const selectedId = ref(null);

const deleteUser = (card) => {
    selectedId.value = card;
};
const destroyUser = (card) => {
    // Assuming selectedContract contains the data of the user being updated
    const form = useForm({});
    form.delete(route('cards.destroy', card), {
        onSuccess: () => {
            const closeButton = document.querySelector('.ti-btn[data-hs-overlay="#deleteModel"]');
            if (closeButton) {
                closeButton.click();
            }
        },
        onError: (errors) => {
            console.log('error', errors);
            // Handle error responses or validation errors
        },
    });
};
</script>

<template>
    <AuthenticatedLayout>

        <Head title="Cards" />
        <div class="main-content max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="block justify-between page-header md:flex"> </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="grid grid-cols-12">
                <div class="xl:col-span-12 col-span-12">
                    <div class="box custom-card">
                        <div class="box-header justify-between">
                            <div class="box-title">
                                List of Cards
                            </div>

                        </div>
                        <div class="box-body">
                            <div class="overflow-x-auto">
                                <table class="table min-w-full whitespace-nowrap table-hover border table-bordered">
                                    <thead>
                                        <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                            <th scope="row" class="!ps-4 !pe-5">#</th>
                                            <th scope="col" class="!text-start !text-[0.85rem] min-w-[200px]">Patient
                                            </th>
                                            <th scope="col" class="!text-start !text-[0.85rem]">Card Number</th>
                                            <th scope="col" class="!text-start !text-[0.85rem]">Phone Number</th>
                                            <th scope="col" class="!text-start !text-[0.85rem]">Status</th>
                                            <th scope="col" class="!text-start !text-[0.85rem]">Recieved Date</th>
                                            <th scope="col" class="!text-start !text-[0.85rem]">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(card, index) in cards.data" :key="index"
                                            class="border border-inherit border-solid hover:bg-gray-100 dark:border-defaultborder/10 dark:hover:bg-light">
                                            <td class="!ps-6">{{ (cards.meta.current_page - 1) *
                                                cards.meta.per_page + index + 1 }}</td>
                                            <td>
                                                <div class="flex items-center font-semibold">
                                                    <span class="!me-2 inline-flex justify-center items-center">
                                                        <img :src="$page.props.asset_url + '/storage/' + card.image" alt="img"
                                                            class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                                    </span>{{ card.first_name }} {{ card.last_name }}
                                                </div>
                                            </td>
                                            <td>{{ card.card_number }}</td>
                                            <td>{{ card.phone }}</td>
                                            <td>
                                                <span v-if="card.status"
                                                    class="inline-flex text-warning !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-warning/10">Disabled </span>
                                                <span v-else
                                                    class="inline-flex text-info !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-info/10">Active </span>
                                            </td>
                                            <td>{{ card.created_at }}</td>
                                            <td>
                                                <button v-if="!card.status" @click="deleteUser(card.id)" aria-label="anchor"
                                                    data-hs-overlay="#deleteModel"
                                                    class="ti-btn ti-btn-warning-full !py-1 !px-2 !text-[0.75rem]">Disable</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <TablePagination :links="cards.meta" />

                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>

        <div id="deleteModel" class="hs-overlay hidden ti-modal">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="ti-modal-content w-full">

                    <div class="ti-modal-body text-center">
                        <form @submit.prevent="destroyUser(selectedId)">
                            <div class="text-center px-5 pb-0">
                                <svg class="custom-alert-icon fill-warning inline-flex"
                                    xmlns="http://www.w3.org/2000/svg" height="5rem" viewBox="0 0 24 24" width="5rem"
                                    fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z">
                                    </path>
                                </svg>
                                <h6 class="text-[1.85rem] !font-medium">Want to disable this card?</h6>
                                <p class="text-muted">This alert is warn you that action cannot be
                                    undone.
                                </p>
                                <div class="mt-4">
                                    <button type="button" data-hs-overlay="#deleteModel"
                                        class="ti-btn !py-2 !px-3 !text-[0.75rem] !font-medium ti-btn-outline-secondary m-1">Back</button>

                                    <button
                                        class="ti-btn !py-2 !px-3 !text-[0.75rem] !font-medium ti-btn-outline-warning m-1">Yes Disable</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>
