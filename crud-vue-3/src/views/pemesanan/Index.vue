<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>DATA PEMESANAN</h4>
                        <hr>
                        <router-link :to="{name: 'pemesanan.create-pemesanan'}" class="btn btn-md btn-success">TAMBAH PEMESANAN
                        </router-link>
                        <table class="table table-striped table-bordered mt-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Pemesanan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nomer Telepon</th>
                                    <th scope="col">Kamar</th>
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Check In</th>
                                    <th scope="col">Check Out</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(pemesanan, index) in pemesanan" :key="index">
                                    <td>{{ pemesanan.nama_pemesan }}</td>
                                    <td>{{ pemesanan.email }}</td>
                                    <td>{{ pemesanan.telp }}</td>
                                    <td>{{ pemesanan.kamar_id }}</td>
                                    <td>{{ pemesanan.nama_tamu }}</td>
                                    <td>{{ pemesanan.tgl_checkin }}</td>
                                    <td>{{ pemesanan.tgl_checkout }}</td>
                                    <td>{{ pemesanan.jumlah }}</td>
                                    <td>{{ pemesanan.status }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'pemesanan.edit-pemesanan', params:{id: pemesanan.id }}"
                                            class="btn btn-sm btn-primary mx-2">EDIT</router-link>
                                        <button @click.prevent="pemesananDelete(pemesanan.id)" class="btn btn-sm btn-danger">DELETE</button>
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

        name: 'index-pemesanan',
        setup() {

            //reactive state
            let pemesanan = ref([])
 
            //mounted
            onMounted(() => {

                //get API from Laravel Backend
                axios.get('http://localhost:8000/api/pemesanan')
                    .then(response => {

                        //assign state posts with response data
                        pemesanan.value = response.data.data

                    }).catch(error => {
                        console.log(error.response.data)
                    })

            })

            function pemesananDelete(id) {
            
            //delete data post by ID
            axios.delete(`http://localhost:8000/api/pemesanan/${id}`)
                .then(() => {
              
                    //splice posts 
                    pemesanan.value.splice(pemesanan.value.indexOf(id), 1);

                }).catch(error => {
                    console.log(error.response.data)
                })

            }

            //return
            return {
                pemesanan,
                pemesananDelete
            }

        }

    }
</script>

<style>
    body{
        background: lightgray;
    }
</style>