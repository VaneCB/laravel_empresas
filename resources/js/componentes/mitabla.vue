<template>
    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <h1 v-html="mensaje"></h1>
        <caption class="titulo">{{ tabla }}</caption>


        <tr>
            <th class="cabeceras" v-for='(campo,index) in campos' >
                <input class="text-center bg-cyan-50 text-black w-full"
                       @keyup="filtra(campo,valor[index])"
                       type="text"
                       :size=len_campo[index]
                       v-model='valor[index]'
                /><br>

                <button @click='ordenar(campo)'>⇑ ⇓
                    {{ campo }}
                </button>

            </th>
            <th class="cabeceras" colspan="3">Opciones</th>
        </tr>
        <tr v-for='(fila) in filas.data'>
            <td class="filas" v-for='(valor) in fila'>{{ valor }}</td>
            <td class="filas">
                <button class="boton" @click='editar(fila.id)'>
                    Editar
                </button>
            </td>
            <td class="filas">
                <button class="boton" @click='borrar(fila.id)'>
                    Borrar
                </button>
            </td>
            <td class="filas">
                <button class="boton" @click='consultar(fila.id)'>
                    Consultar
                </button>
            </td>
        </tr>

    </table>
    <tailwind-pagination
        :data = "filas"
        @pagination-change-page="getResults"
    />
</template>

<script>
import axios from "axios";
import {TailwindPagination} from 'laravel-vue-pagination';

export default {
    name: "mitabla",
    components: {
        TailwindPagination
    },
    props:['filas_serializadas','campos_serializados','tabla'],
    data() {
        return{
            filas:Array,
            campos:Array,
            sortOrder: 1,
            valor: Array,
            len_campo: Array,
            mensaje:String
        }
    },
    mounted(){
        this.filas= JSON.parse(this.filas_serializadas);
        this.campos= JSON.parse(this.campos_serializados);
        this.mensaje="";
        /*this.campos.forEach((campo,index)=>{
          this.len_campo[index]= campo.length*2
        })*/
    },
    methods: {
        getResults(page = 1) {
            let url = window.location.href;
            let self = this;
            axios.get(
                url + "/paginate?page=" + page)
                .then(function (response) {
                    self.filas = response.data;
                    console.log("Respuesta " + response.data);
                })
                .catch(function (error) {
                    console.error("ERROR"+error);
                });
        },

        ordenar: function (campo) {
            this.filas.data.sort((a, b) => {
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
            this.filas.data = this.filas.data.filter((fila) => {
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
        borrar: function(id) {
            let url = window.location.href;
            if (url.endsWith('/')){
                url = url.slice(0, -1);
            }
            url = url +"/" + id;
            axios.delete(url)
                .then((response) =>{
                    this.filas = response.data;
                    this.mensaje="Se ha borrado en la tabla " +this.tabla +" " + "la fila de id" +id;
                })
                .catch((e)=>{
              this.mensaje="<span style='color:red'>Error borrando en la tabla " +this.table +" " + "la fila de id" +id+"</span>";
            })
        }
    },
}
</script>

<style scoped>

.titulo{
    @apply text-cyan-500 text-6xl
}

.boton{
    @apply inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2  transition ease-in-out duration-150
}

.filas{
    @apply border border-slate-300 p-2 text-center
}

.cabeceras{
    @apply border border-slate-300 bg-[#0c4a6e] text-white text-center
}
</style>

