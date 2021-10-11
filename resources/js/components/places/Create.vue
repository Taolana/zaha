<template>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    Create Place
                    <router-link :to="{ name: 'index' }" class="btn btn-primary ms-auto"
                    >Back</router-link
                    >
                </div>

                <div class="card-body">
                    <form @submit.prevent="storePlace">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="name"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Name</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="name"
                                            type="text"
                                            class="form-control"
                                            v-model="form.name"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="type"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Type</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="type"
                                            type="text"
                                            class="form-control"
                                            required
                                            v-model="form.type"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="history"
                                        class="col-md-4 col-form-label text-md-right"
                                    >History</label
                                    >

                                    <div class="col-md-6">
										<textarea
                                            id="history"
                                            type="text"
                                            class="form-control"
                                            v-model="form.history"
                                            required
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="accessibility"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Accessibility</label
                                    >

                                    <div class="col-md-6">
                                        <input
                                            id="accessibility"
                                            type="text"
                                            v-model="form.accessibility"
                                            class="form-control"
                                            required
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="province"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Province</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            name="province"
                                            class="form-select"
                                            v-model="form.province_id"
                                            @change="getRegions()"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="province in provinces"
                                                :key="province.id"
                                                :value="province.id"
                                            >
                                                {{ province.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="region"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Region</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            name="region"
                                            class="form-select"
                                            v-model="form.region_id"
                                            @change="getDistricts()"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="region in regions"
                                                :key="region.id"
                                                :value="region.id"
                                            >
                                                {{ region.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="district"
                                        class="col-md-4 col-form-label text-md-right"
                                    >District</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            name="district"
                                            class="form-select"
                                            v-model="form.district_id"
                                            @change="getCommunes()"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="district in districts"
                                                :key="district.id"
                                                :value="district.id"
                                            >
                                                {{ district.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="commune"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Commune</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            name="commune"
                                            class="form-select"
                                            v-model="form.commune_id"
                                            @change="getFokontany()"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="commune in communes"
                                                :key="commune.id"
                                                :value="commune.id"
                                            >
                                                {{ commune.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row mb-4">
                                    <label
                                        for="fokontany"
                                        class="col-md-4 col-form-label text-md-right"
                                    >Fokontany</label
                                    >

                                    <div class="col-md-6">
                                        <select
                                            name="fokontany"
                                            class="form-select"
                                            v-model="form.fokontany_id"
                                            aria-label="Default select example"
                                        >
                                            <option
                                                v-for="fokontany_item in fokontany"
                                                :key="fokontany_item.id"
                                                :value="fokontany_item.id"
                                            >
                                                {{ fokontany_item.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>

                        <div class="form-group row mb-4 mt-4">
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer requête
                                </button>
                            </div>
                            <div role="alert" class=" col-md-9 alert alert-success alert-dismissible fade show">
                                fhkh
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            provinces: [],
            regions: [],
            districts: [],
            communes: [],
            fokontany: [],
            form: {
                name: "",
                type: "",
                history: "",
                accessibility: "",
                province_id: "",
                region_id: "",
                district_id: "",
                commune_id: "",
                fokontany_id: ""
            }
        };
    },
    created() {
        this.getProvinces();
        this.getRegions();
        this.getDistricts();
        this.getCommunes();
        this.getFokontany();
    },
    methods: {
        getProvinces() {
            axios
                .get("/api/places/provinces")
                .then(res => {
                    this.provinces = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        getRegions() {
            axios
                .get("/api/places/" + this.form.province_id + "/regions")
                .then(res => {
                    this.regions = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        getDistricts() {
            axios
                .get("/api/places/" + this.form.region_id + "/districts")
                .then(res => {
                    this.districts = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        getCommunes() {
            axios
                .get("/api/places/" + this.form.district_id + "/communes")
                .then(res => {
                    this.communes = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        getFokontany() {
            axios
                .get("/api/places/" + this.form.commune_id + "/fokontany")
                .then(res => {
                    this.fokontany = res.data;
                })
                .catch(error => {
                    console.log(console.error);
                });
        },
        storePlace() {
            axios.post("/api/places", {
                name: this.form.name,
                type: this.form.type,
                history: this.form.history,
                accessibility: this.form.accessibility,
                fokontany_id: this.form.fokontany_id,
            }).then((res)=>{
                this.$router.push({name: "PlacesIndex"});
            });
        }
    }
};
</script>
