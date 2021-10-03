<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Birouri</h1>
        </div>
        <div class="row">
            <div class="card  mx-auto">
                <div v-if="showMessage">
                    <div class="alert alert-success">{{ message }}</div>
                </div>
                <div class="card-header">
                    
                    <div class="row">
                        
                        <div>
                            <router-link
                                :to="{ name: 'BirourisCreate' }"
                            
                                class="btn btn-primary mb-2 mr-3"
                                >Adauga</router-link
                            >
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#Id</th>
                                <th scope="col">Nume Birou</th>
                                <th scope="col">Gestioneaza</th>
 
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="birouri in birouris"
                                :key="birouri.id"
                               
                            >
                          
                                <th scope="row">#{{ birouri.id }}</th>
                                <td>{{ birouri.Denumire_birouri }}</td>
                               
                                        
                                <td>
                                    <router-link
                                        :to="{
                                            name: 'BirourisEdit',
                                            params: { id: birouri.id }
                                        }"
                                        class="btn btn-success"
                                        >Editeaza</router-link
                                    >
                                    <button
                                        class="btn btn-danger"
                                        @click="deleteBirouris(birouri.id)"
                                    >
                                        Sterge
                                    </button>
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>
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
            showMessage: false,
            message: "",
        };
    },
    created() {
        this.getBirouris();
    },
    methods: {
       
        getBirouris() {
            axios
                .get("/api/birouris")
                .then(res => {
                    this.birouris = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        
        deleteBirouris(id) {
            axios.delete("api/birouris/"+ id).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getBirouris();
            });
        }
    }
};
</script>

<style>

</style>