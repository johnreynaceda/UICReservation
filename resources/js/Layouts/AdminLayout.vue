<script setup>

import { Head } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import Sidebar from '@/Components/Shared/AdminSidebar.vue';
let props = defineProps({
    title: String
})
</script>

<template>
    <Head>
        <title>
            {{ props.title }} | UIC
        </title>
    </Head>
    <div>
        <div class="flex h-screen overflow-hidden bg-white">
            <div class="hidden md:flex md:flex-shrink-0">
                <div class="flex flex-col w-64">
                    <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-[#FAF3F3] border-r">
                        <div class="flex flex-col flex-shrink-0 px-4">

                            <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col flex-grow px-4 mt-5">

                            <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                                <img src="/images/sample.png" class="h-24 w-24 rounded-full" alt="">
                                <div class="text-center">
                                    <h1>{{ $page.props.auth.user.name }}</h1>
                                    <h1 class="text-sm">{{ $page.props.auth.user.email }}</h1>
                                </div>

                            </div>

                            <Sidebar />

                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 w-0 overflow-hidden">
                <main class="relative flex-1 overflow-y-auto focus:outline-none">
                    <div class="bg-white border-b p-4 px-6 flex justify-between items-center">
                        <div>
                            <h1 class="text-xl font-bold">UIC Bookstore Reservation System</h1>
                        </div>
                        <div class="">
                            <div class="relative ml-3">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                    </div>
                    <div class="p-10">
                        <slot />
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
