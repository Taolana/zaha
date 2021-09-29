import PlacesIndex from "./components/places/Index";
import PlacesCreate from "./components/places/Create";
import PlacesEdit from "./components/places/Edit";

export const routes = [
    {
        path: "/index",
        name: "PlacesIndex",
        component: PlacesCreate
    },
    {
        path: "/create",
        name: "PlacesCreate",
        component: PlacesCreate
    },
    {
        path: "/:id",
        name: "PlacesEdit",
        component: PlacesEdit
    }
];
