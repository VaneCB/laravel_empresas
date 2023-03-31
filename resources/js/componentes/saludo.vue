<template>
<h1>Hola desde un componente Vue</h1>
    valor recibido {{nombre}}<br>
    valor generado {{valor1}}<br>
    <button @click="dime_algo">Haz click aqui</button>
</template>

<script>
export default {

    name: "saludo",
    props: ['nombre'],
    data(){
        return{
            valor1: '¿como estas hoy?'
        }
    },
    methods: {
        dime_algo: function () {
            return alert(this.valor1);
        }

    }
}
</script>

<style scoped>

</style>
