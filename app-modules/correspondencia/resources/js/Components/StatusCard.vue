<template>
    <div class="flex gap-4">
        <div v-for="item in items" :key="item.label"
            class="w-64 border h-40 rounded-lg flex flex-row justify-between items-center px-8 transform transition duration-300 hover:scale-110 cursor-pointer" :class="item.bg, item.border">
            <div class="border border-white rounded-md p-6">
                <i :class="item.icon" class="text-white" style="font-size: 2rem"></i>
            </div>
            <div class="text-end text-white mt-2">
                <p class="font-semibold">{{ item.label }}</p>
                <p class="text-4xl">{{ item.value }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useCardItems } from "@/Composables/useCardItems";


const { items } = useCardItems("Welcome"); // o "Users"
</script>
