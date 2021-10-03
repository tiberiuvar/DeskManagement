import SalariatisIndex from "./components/salariatis/Index";
import SalariatisCreate from "./components/salariatis/Create";
import SalariatisEdit from "./components/salariatis/Edit";

import DepartamentesIndex from "./components/departamentes/Index";
import DepartamentesCreate from "./components/departamentes/Create";
import DepartamentesEdit from "./components/departamentes/Edit";

import BirourisIndex from "./components/birouris/Index";
import BirourisCreate from "./components/birouris/Create";
import BirourisEdit from "./components/birouris/Edit";





export const routes = [
    {
        path: "/salariatis",
        name: "SalariatisIndex",
        component: SalariatisIndex
    },
    {
        path: "/salariatis/create",
        name: "SalariatisCreate",
        component: SalariatisCreate
    },
    {
        path: "/salariatis/:id",
        name: "SalariatisEdit",
        component: SalariatisEdit
    },
    
    {
        path: "/departamentes",
        name: "DepartamentesIndex",
        component: DepartamentesIndex
    },
    {
        path: "/departamentes/create",
        name: "DepartamentesCreate",
        component: DepartamentesCreate
    },
    {
        path: "/departamentes/:id",
        name: "DepartamentesEdit",
        component: DepartamentesEdit
    },

    {
        path: "/birouris",
        name: "BirourisIndex",
        component: BirourisIndex
    },
    {
        path: "/birouris/create",
        name: "BirourisCreate",
        component: BirourisCreate
    },
    {
        path: "/birouris/:id",
        name: "BirourisEdit",
        component: BirourisEdit
    }
    
];