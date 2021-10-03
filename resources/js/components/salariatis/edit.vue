<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Editeaza Salariati
                            <router-link
                                :to="{ name: 'SalariatisIndex' }"
                                class="float-right"
                                >Inapoi</router-link
                            >
                        </div>

                        <div class="card-body">
                            <form @submit.prevent="updateSalariati">
                                <div class="form-group row">
                                    <label
                                        for="Nume"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Nume</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="Nume"
                                            v-model="form.Nume"
                                            type="text"
                                            class="form-control "
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="Prenume"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Prenume</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="Prenume"
                                            v-model="form.Prenume"
                                            type="text"
                                            class="form-control "
                                            required
                                        />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label
                                        for="Email"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Email</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="Email"
                                            v-model="form.Email"
                                            type="text"
                                            class="form-control "
                                            required
                                        />
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label
                                        for="Data_de_nastere"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Data de nastere</label
                                    >
                                    <div class="col-md-6">
                                        <datepicker
                                            v-model="form.Data_de_nastere"
                                            input-class="form-control"
                                        ></datepicker>
                                    </div>
                                </div>

                                
                                
                                <div class="form-group row">
                                    <label
                                        for="departamentes_id"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Departament</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            v-model="form.departamentes_id"
                                            @change="getDepartamentes()"
                                            name="departamente"
                                            class="form-control"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="departamente in departamentes"
                                                :key="departamente.id"
                                                :value="departamente.id"
                                                >{{departamente.Nume_departamente }}</option
                                            >
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="birouris_id"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Birouri</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            v-model="form.birouris_id"
                                             @change="getBirouris()"
                                            name="birouri"
                                            class="form-control"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="birouri in birouris"
                                                :key="birouri.id"
                                                :value="birouri.id"
                                                >{{ birouri.Denumire_birouri }}</option
                                            >
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="Manager"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Manager</label
                                    >

                                    <div class="col-md-6">
                                       
                                         <select
                                            v-model="form.Manager"
                                            name="Manager"
                                            class="form-control"
                                            aria-label="Default select example"
                                        >
                                           <option value="1">Da</option>
                                           <option value="0">Nu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 mt-4">
                                    <div class="col-md-6 offset-md-4">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Salveaza
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Datepicker from "vuejs-datepicker";
import moment from "moment";
export default {
    components: {
        Datepicker
    },
    data() {
        return {
            departamentes: [],
            birouris: [],
            form: {
                Nume: "",
                Prenume: "",
                Email: "",
                Data_de_nastere: null,
                departamentes_id: "",
                birouris_id: "",
                Manager:""
                
            }
        };
    },
    created() {
        this.getDepartamentes();
        this.getBirouris();
        this.getSalariati();
    },
    methods: {
        getSalariati(){
             axios
                .get("/api/salariatis/" + this.$route.params.id)
                .then(res => {
                    this.form = res.data.data;
                   // this.getBirouris();
                    //this.getSalariati();
                })
                .catch(error => {
                    console.log(console.error);
                });

        },

        getDepartamentes() {
            axios
                .get("/api/salariatis/departamentes")
                .then(res => {
                    this.departamentes = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        getBirouris() {
            axios
                .get("/api/salariatis/birouris")
                .then(res => {
                    this.birouris = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
      
        updateSalariati() {
            axios
                .put("/api/salariatis/" + this.$route.params.id, {
                    Nume: this.form.Nume,
                    Prenume: this.form.Prenume,
                    Email: this.form.Email,
                    Data_de_nastere: this.format_date(this.form.Data_de_nastere),
                    departamentes_id: this.form.departamentes_id,
                    birouris_id: this.form.birouris_id,
                    Manager: this.form.Manager
                   
                   
                })
                .then(res => {
                    this.$router.push({ name: "SalariatisIndex" });
                });
        },
        format_date(value) {
            if (value) {
                return moment(String(value)).format("YYYYMMDD");
            }
        }
    }
};
</script>

<style></style>