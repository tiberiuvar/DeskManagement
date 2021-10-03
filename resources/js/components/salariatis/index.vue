<template>
    <div>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Salariati</h1>
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
                                :to="{ name: 'SalariatisCreate' }"
                            
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
                                <th scope="col">Nume</th>
                                <th scope="col">Prenume</th>
                                <th scope="col">Email</th>
                                <th scope="col">Data de nastere</th>
                                <th scope="col">Departament</th>
                                <th scope="col">Birou</th>
                                <th scope="col">Manager</th>
                                <th scope="col">Gestioneaza</th>
 
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="salariat in salariatis"
                                :key="salariat.id"
                               
                            >
                          
                                <th scope="row">#{{ salariat.id }}</th>
                                <td>{{ salariat.Nume }}</td>
                                <td>{{ salariat.Prenume  }}</td>
                                <td>{{ salariat.Email  }}</td>
                                <td>{{ salariat.Data_de_nastere  }}</td>
                               
                               
                                   <td>
                                        <div v-for="departament in departamentes"
                                        :key="departament.id">
                                        <div v-if="salariat.departamentes_id == departament.id">
                                            {{ departament.Nume_departamente }}
                                        </div>  
                                        </div>

                                    </td>

                                <td>
                              
                                        <div v-for="birou in birouris"
                                        :key="birou.id">
                                        <div v-if="salariat.birouris_id == birou.id">
                                            {{ birou.Denumire_birouri }}
                                        </div>  
                                        </div>
                                 </td>
                               
                                        <td v-if="salariat.Manager == 1">Da</td>
                                <td v-else>Nu</td>
                                <td>
                                    <router-link
                                        :to="{
                                            name: 'SalariatisEdit',
                                            params: { id: salariat.id }
                                        }"
                                        class="btn btn-success"
                                        >Editeaza</router-link
                                    >
                                    <button
                                        class="btn btn-danger"
                                        @click="deleteSalariatis(salariat.id)"
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
            salariatis: [],
            showMessage: false,
            message: "",
            departamentes: [],
            birouris: []
        };
    },
    created() {
        this.getSalariatis();
        this.getDepartamentes();
        this.getBirouris();
    },
    methods: {
       
        getSalariatis() {
            axios
                .get("/api/salariatis")
                .then(res => {
                    this.salariatis = res.data.data;
                })
                .catch(error => {
                    console.log(error);
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
        deleteSalariatis(id) {
            axios.delete("api/salariatis/"+ id).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getSalariatis();
            });
        }
    }
};
</script>

<style>

</style>
