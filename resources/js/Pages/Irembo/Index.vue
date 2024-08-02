<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import IremboLayout from '@/Layouts/IremboLayout.vue';



</script>

<template>
    <IremboLayout>

        <Head title="Irembo Mutuelle" />

        <div class="box overflow-hidden terms-box">
            <div class="box-body !p-0">
                <div class="p-4 terms-heading-cover flex items-center text-white bg-primary h5 font-semibold mb-0">
                    <span class="avatar avatar-md me-4">
                        <img :src="$page.props.asset_url + '/assets/images/irembo.png'" alt="">
                    </span>
                    <span>Community Based Health Insurance (Mutuelle) </span>

                </div>

            </div>
            <div class="box-footer md:flex block items-center justify-between shadow-lg !border-t-0">
                <div>
                    <div class="!ps-0 form-check !flex">
                        <input class="form-check-input" type="checkbox" value="" id="privacy-policy">
                        <label class="ps-3 form-check-label text-defaulttextcolor/70 inline-block" for="privacy-policy">
                            I agree with the <a href="javascript:void(0);"
                                class="font-semibold text-defaulttextcolor/70"><u>Privacy Policy</u></a>
                        </label>
                    </div>
                    <div class="!ps-0 form-check !flex">
                        <input class="form-check-input" type="checkbox" value="" id="terms_conditions">
                        <label class="ps-3 form-check-label text-defaulttextcolor/70 inline-block"
                            for="terms_conditions">
                            I agree with the <a href="javascript:void(0);"
                                class="font-semibold text-defaulttextcolor/70"><u>Terms &amp;
                                    Conditions</u></a>
                        </label>
                    </div>
                </div>
                <div class="btn-list sm:mt-0 mt-2">
                    <button type="button" class="ti-btn ti-btn-outline-danger">DECLINE</button>
                    <button type="button" class="ti-btn ti-btn-primary-full">ACCEPT</button>
                </div>
            </div>
        </div>


    </IremboLayout>
</template>
