<template>
    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <caption>{{ tabla }}</caption>
        <tr>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white" v-for='(campo) in campos' >{{ campo }}</th>
        </tr>
        <tr v-for='(fila) in filas'>
            <td class="border border-slate-300 p-2" v-for='(valor) in fila'>{{ valor }}</td>
        </tr>
    </table>

</template>

<script>
export default {
    name: "mitabla",
    props:['filas_serializadas','campos_serializados','tabla'],
    data() {
        return{
            filas:Array,
            campos:Array,
        }
    },
    mounted() {
        this.filas= JSON.parse(this.filas_serializadas)
        this.campos= JSON.parse(this.campos_serializados)
    }
}
</script>

<style scoped>

</style>
