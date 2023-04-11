<template>
    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <caption>{{ tabla }}</caption>


        <tr>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white text-center" v-for='(campo,index) in campos' >
                <input class="text-center text-black w-full"
                       @keyup="filtra(campo,valor[index])"
                       type="text"
                       :size=len_campo[index]
                       v-model='valor[index]'
                /><br>
                <button @click='ordenar(campo)'>
                    {{ campo }}
                </button>
            </th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white text-center" colspan="3">Opciones</th>
        </tr>
        <tr v-for='(fila,index) in filas'>
            <td class="border border-slate-300 p-2 text-center" v-for='(valor) in fila'>{{ valor }}</td>
            <td class="border border-slate-300 p-2 text-center">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150" @click='editar(fila.id)'>
                    Editar
                </button>
            </td>
            <td class="border border-slate-300 p-2 text-center">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150" @click='editar(fila.id)'>
                    Borrar
                </button>
            </td>
            <td class="border border-slate-300 p-2 text-center">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150" @click='editar(fila.id)'>
                    Consultar
                </button>
            </td>
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
            sortOrder: 1,
            valor: Array,
            len_campo: Array
        }
    },
    mounted(){
        this.filas= JSON.parse(this.filas_serializadas);
        this.campos= JSON.parse(this.campos_serializados);
        this.campos.forEach((campo,index)=>{
          this.len_campo[index]= campo.length*2
        })
    },
    methods: {
        ordenar: function (campo) {
            this.filas.sort((a, b) => {
                if (a[campo] > b[campo]) {
                    return this.sortOrder === 1 ? 1 : -1;
                } else {
                    return this.sortOrder === 1 ? -1 : 1;
                }
            });
            // Cambiar el orden actual
            this.sortOrder = this.sortOrder * -1;
        },
        filtra: function (campo, valor) {
            this.filas = JSON.parse(this.filas_serializadas);
            this.filas = this.filas.filter((fila) => {
                    let texto = new String(fila[campo]);
                    if (texto.indexOf(valor) > -1)
                        return fila
                }
            );
        },
        editar: function(id) {
            let url = window.location.href;
            url = url +'/' + id + '/edit';
            window.location.href = url;

        },
    },
}
</script>

<style scoped>

</style>

