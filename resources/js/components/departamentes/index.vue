<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Departamente</h1>
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
                                :to="{ name: 'DepartamentesCreate' }"
                            
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
                                <th scope="col">Nume Departament</th>
                                 <th scope="col">Birouri</th>
                                <th scope="col">Gestioneaza</th>
 
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="departamente in departamentes"
                                :key="departamente.id"
                               
                            >
                          
                                <th scope="row">#{{ departamente.id }}</th>
                                <td>{{ departamente.Nume_departamente }}</td>

                                <td>
                                  
                                        <div v-for="birouri in birouris"
                                        :key="birouri.id">
                                        <div v-if="departamente.birouri_id == birouri.id">
                                            {{ birouri.Denumire_birouri }}
                                        </div>  
                                        </div>
                             
                                 </td>
                               
                                        
                                <td>
                                    <router-link
                                        :to="{
                                            name: 'DepartamentesEdit',
                                            params: { id: departamente.id }
                                        }"
                                        class="btn btn-success"
                                        >Editeaza</router-link
                                    >
                                    <button
                                        class="btn btn-danger"
                                        @click="deleteDepartamentes(departamente.id)"
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
            departamentes: [],
            showMessage: false,
            message: "",
            birouris: []
        };
    },
    created() {
        this.getDepartamentes();
        this.getBirouris();
    },
    methods: {
       
        getDepartamentes() {
            axios
                .get("/api/departamentes")
                .then(res => {
                    this.departamentes = res.data.data;
                })
                .catch(error => {
                    console.log(error);
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
        deleteDepartamentes(id) {
            axios.delete("api/departamentes/"+ id).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getDepartamentes();
            });
        }
    }
};
</script>

<style>

</style>