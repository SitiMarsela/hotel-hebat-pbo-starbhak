<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>DATA FASILITAS HOTEL</h4>
                        <hr>
                        <router-link :to="{name: 'fasilitas.create-fasilitas'}" class="btn btn-md btn-success">TAMBAH FASILITAS
                        </router-link>
                        <table class="table table-striped table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Fasilitas Hotel</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">OPTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(fasilitashotel, index) in fasilitashotels" :key="index">
                                    <td>{{ fasilitashotel.nama_fasilitas_hotel }}</td>
                                    <td>{{ fasilitashotel.deskripsi }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'fasilitas.edit-fasilitas', params:{id: fasilitashotel.id }}"
                                        class="btn btn-sm btn-primary mx-2">EDIT</router-link>
                                        <button @click.prevent="fasilitashotelDelete(fasilitashotel.id)" class="btn btn-sm btn-danger">DELETE</button>
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

        name: 'index-fasilitas',
        setup() {

            //reactive state
            let fasilitashotels = ref([])
 
            //mounted
            onMounted(() => {

                //get API from Laravel Backend
                axios.get('http://localhost:8000/api/fasilitashotel')
                    .then(response => {

                        //assign state posts with response data
                        fasilitashotels.value = response.data.data

                    }).catch(error => {
                        console.log(error.response.data)
                    })

            })

            function fasilitashotelDelete(id) {
            
            //delete data post by ID
            axios.delete(`http://localhost:8000/api/fasilitashotel/${id}`)
                .then(() => {
              
                    //splice posts 
                    fasilitashotels.value.splice(fasilitashotels.value.indexOf(id), 1);

                }).catch(error => {
                    console.log(error.response.data)
                })

            }

            //return
            return {
                fasilitashotels,
                fasilitashotelDelete
            }

        }

    }
</script>

<style>
    body {
        background: lightgray;
    }
</style>