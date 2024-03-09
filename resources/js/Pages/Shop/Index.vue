<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm, Head } from '@inertiajs/vue3';
 
defineProps(['chirps']);
 
const form = useForm({
    message: '',
});
</script>
 
<template>
    <Head title="Dashboard" />
 
<AuthenticatedLayout>
  <p class="p-2 text-xl font-bold mb-2">Best Shop Ever</p>
  <div class="py-12">
    <div class="max-w-screen mx-auto sm:px-6 lg:px-8">
      <div class="col-start-4 col-span-9">

              <div class="grid grid-cols-4 gap-8">

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>

      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>
      
      <div class="pb-4 bg-white border-[1px] shadow-md hover:scale-[1.1] ease-in-out duration-300 p-1">
          <img src="https://cdn.kingitus.ee/storage/photos/products/085827/21804.jpg?w=454&h=421&fit=crop" alt="">
          <div class="p-2">
            <p class="text-xl font-bold mb-2">Toode</p>
              <p class="text-xl font-bold text-rose-600">25 EUR</p>
              <p class="text-sm font-bold line-through text-end">30 EUR</p>
              <p class="text-xs font-bold mb-2">Kirjeldus</p>
          </div>
      </div>
      


    </div>
      </div>
    </div>
  </div>
</AuthenticatedLayout>
</template>