<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h4>TAMBAH POST</h4>
                        <hr>

                        <form @submit.prevent="store">
                            <div class="form-group">
                                <label for="type_kamar" class="font-weight-bold">Type Kamar</label>
                                <input type="text" class="form-control" v-model="kamar.type_kamar" placeholder="Masukkan Type Kamar">
                                <!-- validation -->
                                <div v-if="validation.type_kamar" class="mt-2 alert alert-danger">
                                    {{ validation.type_kamar[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="font-weight-bold">Url Gambar</label>
                                <input type="text" class="form-control" v-model="kamar.url_gambar" placeholder="Masukkan Url Gambar">


                                <!-- validation -->

                                <div v-if="validation.url_gambar" class="mt-2 alert alert-danger">
                                    {{ validation.url_gambar[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="font-weight-bold">Nama Fasilitas</label>
                                <input type="text" class="form-control" v-model="kamar.nama_fasilitas" placeholder="Masukkan Nama Fasilitas">
                                <!-- validation -->
                                <div v-if="validation.nama_fasilitas" class="mt-2 alert alert-danger">
                                    {{ validation.nama_fasilitas[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="font-weight-bold">harga</label>
                                <input type="text" class="form-control" v-model="kamar.harga" placeholder="Masukkan Harga">
                                <!-- validation -->
                                <div v-if="validation.harga" class="mt-2 alert alert-danger">
                                    {{ validation.harga[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                                <textarea class="form-control" rows="4" v-model="kamar.deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                                <!-- validation -->
                                <div v-if="validation.deskripsi" class="mt-2 alert alert-danger">
                                    {{ validation.deskripsi[0] }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="font-weight-bold">Jumlah Kamar</label>
                                <input type="text" class="form-control" v-model="kamar.jml_kamar" placeholder="Masukkan Jumlah Kamar">
                                <!-- validation -->
                                <div v-if="validation.jml_kamar" class="mt-2 alert alert-danger">
                                    {{ validation.jml_kamar[0] }}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive, ref } from 'vue'
import { useRouter } from 'vue-router'
import axios from 'axios'

export default {
    name: 'create-kamar',
    setup() {

        //state kamar
        const kamar = reactive({
            type_kamar: '',
            url_gambar: '',
            nama_fasilitas: '',
            harga: '',
            deskripsi: '',
            jml_kamar: ''
        })

        //state validation
        const validation = ref([])

        //vue router
        const router = useRouter()

        //method store
        function store() {

            let type_kamar      =    kamar.type_kamar
            let url_gambar      =    kamar.url_gambar
            let nama_fasilitas  =    kamar.nama_fasilitas
            let harga           =    kamar.harga
            let deskripsi       =    kamar.deskripsi
            let jml_kamar       =    kamar.jml_kamar

            axios.post('http://localhost:8000/api/kamar', {
                type_kamar: type_kamar,
                url_gambar: url_gambar,
                nama_fasilitas: nama_fasilitas,
                harga: harga,
                deskripsi: deskripsi,
                jml_kamar: jml_kamar
            }).then(() => {

                //redirect ke post index
                router.push({
                    name: 'kamar.index-kamar'
                })

            }).catch(error => {
                //assign state validation with error 
                validation.value = error.response.data
            })

        }

        //return
        return {
            kamar,
            validation,
            router,
            store
        }

    }

}
</script>

<style>
    body{
        background: lightgray;
    }
</style>