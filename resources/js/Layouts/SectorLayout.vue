<script setup>
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                <img :src="$page.props.asset_url + '/assets/images/miniHeal.svg'" class="block h-9 w-auto fill-current text-gray-800" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLink :href="route('sector.families.index')" :active="route().current('sector.families.index') || route().current('sector.families.create') || route().current('sector.families.edit') || route().current('sector.families.show')">
                                    Family Header
                                </NavLink>
                                <NavLink :href="route('sector.mutual-categories.index')" :active="route().current('sector.mutual-categories.index')">
                                    Settings
                                </NavLink>
                            </div>

                        </div>
                    </div>
                </div>


            </nav>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
