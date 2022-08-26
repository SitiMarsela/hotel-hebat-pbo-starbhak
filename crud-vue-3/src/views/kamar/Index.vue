<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>DATA KAMAR</h4>
                        <hr>
                        <router-link :to="{name: 'create-kamar'}" class="btn btn-md btn-success">TAMBAH POST</router-link>

                        <table class="table table-striped table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Type Kamar</th>
                                    <th scope="col">url Gambar</th>
                                    <th scope="col">Nama Fasilitas</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Jumlah Kamar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(kamar, index) in kamar" :key="index">
                                    <td>{{ kamar.type_kamar }}</td>
                                    <td>{{ kamar.url_gambar }}</td>
                                    <td>{{ kamar.url_nama_fasilitas }}</td>
                                    <td>{{ kamar.harga }}</td>
                                    <td>{{ kamar.deskripsi }}</td>
                                    <td>{{ kamar.jml_kamar }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'edit-kamar', params:{id: kamar.id }}" class="btn btn-sm btn-primary mr-1">EDIT</router-link>
                                        <button class="btn btn-sm btn-danger ml-1">DELETE</button>
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
import { onMounted, ref } from 'vue'

export default {
        
        name: 'index-kamar',
    setup() {

        //reactive state
        let kamar = ref([])

        //mounted
        onMounted(() => {

            //get API from Laravel Backend
            axios.get('http://localhost:8000/api/kamar')
            .then(response => {
              
              //assign state posts with response data
              kamar.value = response.data.data

            }).catch(error => {
                console.log(error.response.data)
            })

        })

        //return
        return {
            kamar
        }

    }

}
</script>

<style>
    body{
        background: lightgray;
    }
</style>