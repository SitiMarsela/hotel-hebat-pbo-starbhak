<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>EDIT DATA PEMESANAN</h4>
                        <hr>

                        <form @submit.prevent="update">
                            <div class="form-group">
                                <label for="nama_pemesan" class="font-weight-bold">Nama Pemesan</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.nama_pemesan" placeholder="Masukkan Nama Pemesan">
                                <!-- validation -->
                                <div v-if="validation.nama_pemesan" class="mt-2 alert alert-danger">
                                    {{ validation.nama_pemesan[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.email" placeholder="Masukkan Email">
                                <!-- validation -->
                                <div v-if="validation.email" class="mt-2 alert alert-danger">
                                    {{ validation.email[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telp" class="font-weight-bold">Nomer Telepon</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.telp" placeholder="Masukkan Nomer Telepon">
                                <!-- validation -->
                                <div v-if="validation.telp" class="mt-2 alert alert-danger">
                                    {{ validation.telp[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="kamar_id" class="font-weight-bold">Nama Kamar</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.kamar_id" placeholder="Masukkan Nama Kamar">
                                <!-- validation -->
                                <div v-if="validation.kamar_id" class="mt-2 alert alert-danger">
                                    {{ validation.kamar_id[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="nama_tamu" class="font-weight-bold">Nama Tamu</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.nama_tamu" placeholder="Masukkan Nama Tamu">
                                <!-- validation -->
                                <div v-if="validation.nama_tamu" class="mt-2 alert alert-danger">
                                    {{ validation.nama_tamu[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="tgl_checkin" class="font-weight-bold">Tanggal Checkin</label>
                                <input type="date" class="form-control my-2" v-model="pemesanan.tgl_checkin" placeholder="Masukkan Tanggal Checkin">
                                <!-- validation -->
                                <div v-if="validation.tgl_checkin" class="mt-2 alert alert-danger">
                                    {{ validation.tgl_checkin[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="tgl_checkout" class="font-weight-bold">Tanggal Chechkout</label>
                                <input type="date" class="form-control my-2" v-model="pemesanan.tgl_checkout" placeholder="Masukkan Tanggal Checkout">
                                <!-- validation -->
                                <div v-if="validation.tgl_checkout" class="mt-2 alert alert-danger">
                                    {{ validation.tgl_checkout[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="jumlah" class="font-weight-bold">Jumlah</label>
                                <input type="text" class="form-control my-2" v-model="pemesanan.jumlah" placeholder="Masukkan Jumlah">
                                <!-- validation -->
                                <div v-if="validation.jumlah" class="mt-2 alert alert-danger">
                                    {{ validation.jumlah[0] }}
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="status" class="font-weight-bold">Status</label> 
                                <select class="form-select" v-model="pemesanan.status">
                                <option selected value="Booking">Booking</option>
                                </select>
                                <!-- validation -->
                                <div v-if="validation.status" class="mt-2 alert alert-danger">
                                    {{ validation.status[0] }}
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
    name: "edit-pemesanan",
    setup() {

        //state posts
        const pemesanan = reactive({
            nama_pemesan: '',
            email: '',
            telp: '',
            kamar_id: '',
            nama_tamu: '',
            tgl_checkin: '',
            tgl_checkout: '',
            jumlah: '',
            status: ''
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
            axios.get(`http://localhost:8000/api/pemesanan/${route.params.id}`)
            .then(response => {
              
              //assign state posts with response data
              pemesanan.nama_pemesan   =   response.data.data.nama_pemesan
              pemesanan.email          =   response.data.data.email
              pemesanan.telp           =   response.data.data.telp
              pemesanan.kamar_id       =   response.data.data.kamar_id
              pemesanan.nama_tamu      =   response.data.data.nama_tamu
              pemesanan.tgl_checkin    =   response.data.data.tgl_checkin
              pemesanan.tgl_checkout   =   response.data.data.tgl_checkout
              pemesanan.jumlah         =   response.data.data.jumlah
              pemesanan.status         =   response.data.data.status

            }).catch(error => {
                console.log(error.response.data)
            })

        })

        //method update
        function update() {

            let nama_pemesan   =    pemesanan.nama_pemesan
            let email          =    pemesanan.email
            let telp           =    pemesanan.telp
            let kamar_id       =    pemesanan.kamar_id
            let nama_tamu      =    pemesanan.nama_tamu
            let tgl_checkin    =    pemesanan.tgl_checkin
            let tgl_checkout   =    pemesanan.tgl_checkout
            let jumlah         =    pemesanan.jumlah
            let status         =    pemesanan.status

            axios.put(`http://localhost:8000/api/pemesanan/${route.params.id}`, {
                nama_pemesan: nama_pemesan,
                email: email,
                telp: telp,
                kamar_id: kamar_id,
                nama_tamu: nama_tamu,
                tgl_checkin: tgl_checkin,
                tgl_checkout: tgl_checkout,
                jumlah: jumlah,
                status: status
            }).then(() => {

                //redirect ke post index
                router.push({
                    name: 'pemesanan.index-pemesanan'
                })

            }).catch(error => {
                //assign state validation with error 
                validation.value = error.response.data
            })

        }

        //return
        return {
            pemesanan,
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