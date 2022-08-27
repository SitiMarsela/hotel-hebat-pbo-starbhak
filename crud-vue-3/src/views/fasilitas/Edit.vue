<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>EDIT DATA FASILITAS HOTEL</h4>
                        <hr>

                        <form @submit.prevent="update">

                            <div class="form-group">
                                <label for="url" class="font-weight-bold">Nama Fasilitas Hotel</label>
                                <input type="text" class="form-control my-2" v-model="fasilitashotel.nama_fasilitas_hotel" placeholder="Masukkan Nama Fasilitas Hotel">
                                <!-- validation -->
                                <div v-if="validation.nama_fasilitas_hotel" class="mt-2 alert alert-danger">
                                    {{ validation.nama_fasilitas_hotel[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control my-2" rows="4" v-model="fasilitashotel.deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                                <!-- validation -->
                                <div v-if="validation.deskripsi" class="mt-2 alert alert-danger">
                                    {{ validation.deskripsi[0] }}
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary my-2">SIMPAN</button>
                        </form>                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive, ref, onMounted } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import axios from 'axios'

export default {
    name: "edit-fasilitas",
    setup() {

        //state posts
        const fasilitashotel = reactive({
           nama_fasilitas_hotel: '',
           deskripsi: '',
        })

        //state validation
        const validation = ref([])

        //vue router
        const router = useRouter()

        //vue router
        const route = useRoute()

        //mounted
        onMounted(() => {

            //get API from Laravel Backend
            axios.get(`http://localhost:8000/api/fasilitashotel/${route.params.id}`)
            .then(response => {
              
              //assign state posts with response data
              fasilitashotel.nama_fasilitas_hotel  =   response.data.data.nama_fasilitas_hotel
              fasilitashotel.deskripsi             =   response.data.data.deskripsi 

            }).catch(error => {
                console.log(error.response.data)
            })

        })

        //method update
        function update() {

            let nama_fasilitas_hotel  =   fasilitashotel.nama_fasilitas_hotel
            let deskripsi             =   fasilitashotel.deskripsi

            axios.put(`http://localhost:8000/api/fasilitashotel/${route.params.id}`, {
                nama_fasilitas_hotel: nama_fasilitas_hotel,
                deskripsi: deskripsi,
            }).then(() => {

                //redirect ke post index
                router.push({
                    name: 'fasilitas.index-fasilitas'
                })

            }).catch(error => {
                //assign state validation with error 
                validation.value = error.response.data
            })

        }

        //return
        return {
            fasilitashotel,
            validation,
            router,
            update
        }

    }

}
</script>

<style>
    body{
        background: lightgray;
    }
</style>