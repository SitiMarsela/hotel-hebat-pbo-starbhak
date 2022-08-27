<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>DATA KAMAR</h4>
                        <hr>
                        <router-link :to="{name: 'kamar.create-kamar'}" class="btn btn-md btn-success">TAMBAH KAMAR
                        </router-link>
                        <table class="table table-striped table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Type Kamar</th>
                                    <th scope="col">Nama Fasilitas</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Jumlah Kamar</th>
                                    <th scope="col">OPTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(kamar, index) in kamars" :key="index">
                                    <td>{{ kamar.type_kamar }}</td>
                                    <td>{{ kamar.nama_fasilitas }}</td>
                                    <td>{{ kamar.harga }}</td>
                                    <td>{{ kamar.deskripsi }}</td>
                                    <td>{{ kamar.jml_kamar }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'kamar.edit-kamar', params:{id: kamar.id }}"
                                            class="btn btn-sm btn-primary mx-2">EDIT</router-link>
                                        <button @click.prevent="kamarDelete(kamar.id)" class="btn btn-sm btn-danger">DELETE</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import {
        onMounted,
        ref
    } from 'vue'

    export default {

        name: 'index-kamar',
        setup() {

            //reactive state
            let kamars = ref([])
 
            //mounted
            onMounted(() => {

                //get API from Laravel Backend
                axios.get('http://localhost:8000/api/kamar')
                    .then(response => {

                        //assign state posts with response data
                        kamars.value = response.data.data

                    }).catch(error => {
                        console.log(error.response.data)
                    })

            })

            function kamarDelete(id) {
            
   //delete data post by ID
   axios.delete(`http://localhost:8000/api/kamar/${id}`)
   .then(() => {
              
       //splice posts 
       kamars.value.splice(kamars.value.indexOf(id), 1);

    }).catch(error => {
        console.log(error.response.data)
    })

}

            //return
            return {
                kamars,
                kamarDelete
            }

        }

    }
</script>

<style>
    body {
        background: lightgray;
    }
</style>