<template>
    <app-layout title="Dashboard">
<<<<<<< HEAD
        <div class="ml-2 ">
            <div>
                <!-- La ruta tendrá que ir a TutorDsahboard -->
             <Link class="font-medium" :href="route('login')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-amarillo pl-8 h-20 w-20 float-left" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg></Link>
            </div>
            <div class= "text-center">
                                                                                                    
                        
            <h1 class="text-3xl font-bold leading-tight text-azul text-center">
                Categoria de Tareas
            </h1>
            <p class="font-semibold leading-tight text-gray-800 text-center pt-2 pb-4">
                Estas son tus tareas predeterminadas
            </p>
        </div>
        </div>
        
            <div>
                <div class="mx-auto max-w-6xl sm:px-6 lg:px-60">
               <!-- La ruta tendrá que ir a tareas básicas  -->
            <body>
                        <div class="flex items-center justify-center py-2 border-4 border-amarillo rounded-lg">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center><svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </center>
                                <h1 class="text-xl font-bold text-center">Tareas Básicas</h1>
                               </Link> 
                            </div>
                              <Link class="font-medium" :href="route('login')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg> </Link> 

                        </div>

                    <div class="py-4">
                        <!-- La ruta tendrá que ir a tareas instrumentales  -->
                        <div class="flex items-center justify-center py-2 border-4 border-amarillo rounded-lg">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center><svg class="h-16 w-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg></center>
                                <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1></Link>
                            </div>
                            <Link class="font-medium" :href="route('login')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg> </Link>

                        </div>

                    </div>

                   <!-- La ruta tendrá que ir a tareas avanzadas  -->

                        <div class="flex items-center justify-center py-2 border-4 border-amarillo rounded-lg">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>

                                </center>
                                <h1 class="text-xl font-bold text-center">Tareas Avanzadas</h1></Link>
                            </div>
                            <Link class="font-medium" :href="route('login')"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-right text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg></Link>

                        </div>

                    
            </body>
                
                                                                                                                                                                </div>
            </div>
=======
>>>>>>> origin/feature/admin
    </app-layout>

    <div class="dashboard_container">
        <div class="flex self-end ">
            <button class="bg-white hover:bg-gray-300 text-amber-300 font-bold py-2 px-3 rounded">
                Asignación Técnico ->
            </button>
        </div>

        <h2 class="font-bold font-poppings text-xl text-azul leading-tight mb-3 mx-auto">
            Control de roles
        </h2>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Técnicos
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>

            <!--             <tr class="text-black font-bold basis-0 flex-col">
                <td v-for="(person, index) in fakedata" :key="index">
                    <strong> {{person.name}} </strong> {{person.email}}
                </td>
            </tr> -->
        </table>

                <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Usuarios
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>
        </table>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="bg-amarillo text-white font-poppings font-bold pl-3">
                        Pendiente
                    </td>
                </tr>
            </thead>
            <tr class="text-black font-bold flex flex-row justify-between mb-4 w-11/12 mx-auto">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="text-black font-bold flex flex-row justify-between mb-2 w-11/12 mx-auto"
                v-for="(person, index) in fakedata"
                :key="index"
            >
                <div>
                    <td class="flex flex-col">
                        <div> <strong> {{ person.name }} </strong> </div>
                        <div> {{ person.email }} </div>
                    </td>
                </div>
                <div class="flex flex-row justify-between">
                    <td>
                        <div class="form-check"> <!-- form-check-inline -->
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-azul checked:border-azul focus:outline-none transition duration-100 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>
        </table>






        <button
            class="bg-azul hover:bg-azul/80 text-white-300 font-bold py-2 px-4 rounded float-left w-3/5 mx-auto">
            Aceptar
        </button>
    </div>
</template>

<script>
<<<<<<< HEAD
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        AppLayout,
        Head,
        Link,
    },
};
</script>

=======
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";

export default defineComponent({
    el: "#dashboard_container",

    data: () => ({
        fakedata: [
            { name: "Chiquito de la Calzada", email: "chiquito99@gmail.com" },
            { name: "Don Omar", email: "donomar@gmail.com" },
            { name: "Ash Ketchup", email: "pueblo_paleta_kid@gmail.com" },
            { name: "Cuphead Red", email: "cuphead-original@gmail.com" },
            { name: "Aloy Horizon", email: "Imzerodown@gmail.com" },
        ],
    }),

    components: {
        AppLayout,
        Welcome,
    },
});
</script>

<style scoped>
.dashboard_container {
    display: flex;
    flex-direction: column;
    width: 85%;
    margin-left: auto;
    margin-right: auto;
}
</style>
>>>>>>> origin/feature/admin
