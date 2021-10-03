<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Adauga Birouri
                            <router-link
                                :to="{ name: 'BirourisIndex' }"
                                class="float-right"
                                >Inapoi</router-link
                            >
                        </div>

                        <div class="card-body">
                            <form @submit.prevent="storeBirouri">
                                <div class="form-group row">
                                    <label
                                        for="Denumire_birouri"
                                        class="col-md-4 col-form-label text-md-right"
                                        >Nume</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="Denumire_birouri"
                                            v-model="form.Denumire_birouri"
                                            type="text"
                                            class="form-control "
                                            required
                                        />
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
              
         
            form: {
                Denumire_birouri: "",
                          
            }
        };
    },
    
  
    methods: {
      
        storeBirouri() {
            axios
                .post("/api/birouris", {
                    Denumire_birouri: this.form.Denumire_birouri,
 
                   
                })
                .then(res => {
                    this.$router.push({ name: "BirourisIndex" });
                });
        }
        
        
    }
};
</script>

<style></style>