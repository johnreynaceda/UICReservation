
<script setup>
import { Link } from '@inertiajs/vue3';
import logo from "@/images/logo.png"




const navigations = [
    {
        name: 'Dashboard',
        url: '/admin/dashboard',
    },
    {
        name: 'Departments',
        url: '/admin/departments',
    },

]
</script>

<template>
    <nav class="flex-1 space-y-1 ">
        <ul>

            <Link :href="nav.url" v-for="(nav, index) in navigations" :key="index" :class="{
                'hover:bg-white hover:scale-95 hover:text-[#F37F9E] hover:fill-[#F37F9E]': !$page.url.startsWith(nav.url),
                'bg-white scale-95 text-[#F37F9E] fill-[#F37F9E]': $page.url.startsWith(nav.url),
            }"
                class="inline-flex items-center w-full px-4 fill-gray-500 py-3 mt-1 text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline">
            <component :is="nav.icon" class="flex-shrink-0 w-6 h-6 mr-3 "></component>
            {{ nav.name }}
            </Link>

            <!-- <li>
                <a class="inline-flex items-center w-full px-4 fill-gray-500 py-3 mt-1 text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-white hover:scale-95 hover:text-[#F37F9E] hover:fill-[#F37F9E]"
                    href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 md hydrated">
                        <path
                            d="M21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM19 9H14V4H5V20H19V9ZM8 7H11V9H8V7ZM8 11H16V13H8V11ZM8 15H16V17H8V15Z">
                        </path>
                    </svg>
                    <span class="ml-3"> Product </span>
                </a>
            </li>
            <li>
                <a class="inline-flex items-center w-full px-4 fill-gray-500 py-3 mt-1 text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-white hover:scale-95 hover:text-[#F37F9E] hover:fill-[#F37F9E]"
                    href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 md hydrated">
                        <path
                            d="M21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM19 9H14V4H5V20H19V9ZM8 7H11V9H8V7ZM8 11H16V13H8V11ZM8 15H16V17H8V15Z">
                        </path>
                    </svg>
                    <span class="ml-3"> Reservation </span>
                </a>
            </li> -->


        </ul>
    </nav>
</template>

