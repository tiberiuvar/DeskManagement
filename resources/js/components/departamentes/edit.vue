<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Editeaza Departamente
                            <router-link
                                :to="{ name: 'DepartamentesIndex' }"
                                class="float-right"
                                >Inapoi</router-link
                            >
                        </div>

                        <div class="card-body">
                            <form @submit.prevent="updateDepartamente">
                                <div class="form-group row">
                                    <label
                                        for="Nume_departamente"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Nume</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="Nume_departamente"
                                            v-model="form.Nume_departamente"
                                            type="text"
                                            class="form-control "
                                            required
                                        />
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label
                                        for="birouri_id"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Birouri</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            v-model="form.birouri_id"
                                             @change="getBirouris()"
                                            name="birouri_id"
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

export default {
   
    data() {
        return {
            birouris: [],
            form: {
                Nume_departamente: "",
                birouri_id: "",
                
            }
        };
    },
    created() {
        this.getBirouris();
        this.getDepartamentes();
    },
    methods: {
        getDepartamentes(){
             axios
                .get("/api/departamentes/" + this.$route.params.id)
                .then(res => {
                    this.form = res.data.data;
                   // this.getBirouris();
                    //this.getSalariati();
                })
                .catch(error => {
                    console.log(console.error);
                });

        },
    
        getBirouris() {
            axios
                .get("/api/departamentes/birouris")
                .then(res => {
                    this.birouris = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
      
        updateDepartamente() {
            axios
                .put("/api/departamentes/" + this.$route.params.id, {
                    Nume_departamente: this.form.Nume_departamente,
                    birouri_id: this.form.birouri_id,     
                   
                })
                .then(res => {
                    this.$router.push({ name: "DepartamentesIndex" });
                });
        },
      
    }
};
</script>

<style></style>