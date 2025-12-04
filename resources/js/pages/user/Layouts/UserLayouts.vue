<template>
    <!-- header -->
    <Header />
    <!-- end header -->

    <!-- add  -->
    <Hero></Hero>
    <!-- end  -->

    <!-- main content -->
    <slot />
    <!-- end main content  -->

    <!-- footer -->
    <Footer></Footer>
    <!-- end footer  -->
</template>

<script setup>

import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Header from './Header.vue'
import Footer from './Footer.vue'
import Hero from './Hero.vue'

onMounted(() => {
    initFlowbite();
})

</script>
