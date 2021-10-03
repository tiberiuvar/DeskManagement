<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Adauga Departamente
                            <router-link
                                :to="{ name: 'DepartamentesIndex' }"
                                class="float-right"
                                >Inapoi</router-link
                            >
                        </div>

                        <div class="card-body">
                            <form @submit.prevent="storeDepartamente">
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
                                            Adauga
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
       
    },
    methods: {

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
      
        storeDepartamente() {
            axios
                .post("/api/departamentes", {
                    Nume_departamente: this.form.Nume_departamente,
                    birouri_id: this.form.birouri_id,
 
                   
                })
                .then(res => {
                    this.$router.push({ name: "DepartamentesIndex" });
                });
        }
        
        
    }
};
</script>

<style></style>