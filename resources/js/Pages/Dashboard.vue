<template>
    <app-layout title="Dashboard">
        <div class="ml-2 ">
            <div>
                <!-- La ruta tendrá que ir a TutorDsahboard -->
             <Link class="font-medium" :href="route('login')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-left w-20 h-20 pl-8 text-amarillo" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg></Link>
            </div>
            <div class= "text-center">
                                                                                                    
                        
            <h1 class="text-3xl font-bold leading-tight text-center text-azul">
                Categoria de Tareas
            </h1>
            <p class="pt-2 pb-4 font-semibold leading-tight text-center text-gray-800">
                Estas son tus tareas predeterminadas
            </p>
        </div>
        </div>
        
            <div>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-60">
               <!-- La ruta tendrá que ir a tareas básicas  -->
            <body>
                        <div class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center><svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </center>
                                <h1 class="text-xl font-bold text-center">Tareas Básicas</h1>
                               </Link> 
                            </div>
                              <Link class="font-medium" :href="route('login')"><svg xmlns="http://www.w3.org/2000/svg" class="float-right w-6 h-6 text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg> </Link> 

                        </div>

                    <div class="py-4">
                        <!-- La ruta tendrá que ir a tareas instrumentales  -->
                        <div class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center><svg class="w-16 h-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg></center>
                                <h1 class="text-xl font-bold text-center">Tareas Instrumentales</h1></Link>
                            </div>
                            <Link class="font-medium" :href="route('login')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-right w-6 h-6 text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg> </Link>

                        </div>

                    </div>

                   <!-- La ruta tendrá que ir a tareas avanzadas  -->

                        <div class="flex items-center justify-center py-2 border-4 rounded-lg border-amarillo">
                            <div class="p-6 rounded-lg">
                                <Link class="font-medium" :href="route('login')">
                                <center>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-azul"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>

                                </center>
                                <h1 class="text-xl font-bold text-center">Tareas Avanzadas</h1></Link>
                            </div>
                            <Link class="font-medium" :href="route('login')"><svg xmlns="http://www.w3.org/2000/svg" class="float-right w-6 h-6 text-azul" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
</svg></Link>

                        </div>

                    
            </body>
                
                                                                                                                                                                </div>
            </div>
    </app-layout>

    <div class="dashboard_container">
        <div class="flex self-end ">
            <button class="px-3 py-2 font-bold bg-white rounded hover:bg-gray-300 text-amber-300">
                Asignación Técnico ->
            </button>
        </div>

        <h2 class="mx-auto mb-3 text-xl font-bold leading-tight font-poppings text-azul">
            Control de roles
        </h2>

        <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="pl-3 font-bold text-white bg-amarillo font-poppings">
                        Técnicos
                    </td>
                </tr>
            </thead>
            <tr class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none form-check-input checked:bg-azul checked:border-azul focus:outline-none"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-azul checked:border-azul focus:outline-none"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                            />
                        </div>
                    </td>
                </div>
            </tr>

            <!--             <tr class="flex-col font-bold text-black basis-0">
                <td v-for="(person, index) in fakedata" :key="index">
                    <strong> {{person.name}} </strong> {{person.email}}
                </td>
            </tr> -->
        </table>

                <table class="mb-4">
            <thead>
                <tr class="mb-4">
                    <td colspan="3" class="pl-3 font-bold text-white bg-amarillo font-poppings">
                        Usuarios
                    </td>
                </tr>
            </thead>
            <tr class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none form-check-input checked:bg-azul checked:border-azul focus:outline-none"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-azul checked:border-azul focus:outline-none"
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
                    <td colspan="3" class="pl-3 font-bold text-white bg-amarillo font-poppings">
                        Pendiente
                    </td>
                </tr>
            </thead>
            <tr class="flex flex-row justify-between w-11/12 mx-auto mb-4 font-bold text-black">
                <div>
                    <td>Nombre</td>
                </div>
                <div>
                    <td class="px-1">Técnico</td>
                    <td class="px-1">Usuario</td>
                </div>
                
            </tr>
            <tr
                class="flex flex-row justify-between w-11/12 mx-auto mb-2 font-bold text-black"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none form-check-input checked:bg-azul checked:border-azul focus:outline-none"
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
                                class="float-left w-4 h-4 mt-1 mr-2 align-top transition duration-100 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-full appearance-none cursor-pointer form-check-input checked:bg-azul checked:border-azul focus:outline-none"
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
            class="float-left w-3/5 px-4 py-2 mx-auto font-bold rounded bg-azul hover:bg-azul/80 text-white-300">
            Aceptar
        </button>
    </div>
</template>

<script>
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
