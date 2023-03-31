<template>
    {{minutos}}:{{segundos}}:{{decimas}}
    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150" @click="startStop">{{start_stop}}</button>
    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150" @click="resetAll">Reset</button>
</template>

<script>
export default {
    name: "cronometro",
    data(){
        return {
            minutos:0,
            segundos:0,
            decimas:0,
            start_stop:"Start",
            funcionando:false
        }
    },
    mounted() {
        setInterval(()=>{
            if (this.funcionando)
            this.decimas++;
            if(this.decimas==10) {
                this.decimas=0;
                this.segundos++;
                if (this.segundos==60) {
                    this.segundos=0;
                    this.minutos++;
                }
            }

        },100)
    },
    methods: {
        startStop: function () {

            this.funcionando = !this.funcionando;
            this.start_stop = this.funcionando ? "Stop" : "Start";
           /* if (this.funcionando==true){
                this.start_stop="Start";
                this.funcionando=false;
            }else {
                this.start_stop="Stop";
                this.funcionando=true;
            }*/
        },
        resetAll: function () {
            this.minutos = 0;
            this.segundos = 0;
            this.decimas = 0;
            this.start_stop = "Start";
            this.funcionando = false;
        }
    }
}
</script>

<style scoped>

</style>
