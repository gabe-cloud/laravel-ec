<template>
    <!-- header -->
    <Header />
    <!-- end header -->

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

onMounted(() => {
    initFlowbite();
})

</script>
