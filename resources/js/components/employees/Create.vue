<template>
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Countries</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Create Employee
                            <router-link :to="{name: 'employees.index'}" class="float-right">
                                Employees
                            </router-link>
                        </div>

                        <div class="card-body">
                            <form @submit.prevent="storeEmployee">
                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="first_name">
                                        First Name
                                    </label>

                                    <div class="col-md-6">
                                        <!--is-invalid-->
                                        <input
                                            id="first_name"
                                            v-model="form.first_name"
                                            class="form-control"
                                            required
                                            type="text">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="middle_name">
                                        Middle Name
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="middle_name"
                                            v-model="form.middle_name"
                                            class="form-control"
                                            required
                                            type="text">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="last_name">
                                        Last Name
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="last_name"
                                            v-model="form.last_name"
                                            class="form-control"
                                            required
                                            type="text">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="address">
                                        Address
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="address"
                                            v-model="form.address"
                                            class="form-control"
                                            required
                                            type="text">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="country">Country</label>

                                    <div class="col-md-6">
                                        <select
                                            id="country"
                                            v-model="form.country_id"
                                            :value="form.country_id"
                                            class="form-select"
                                            name="country"
                                            @change="getStates()">
                                            <option disabled value="">Choose Country</option>
                                            <option
                                                v-for="country in countries"
                                                :key="country.id"
                                                :value="country.id">
                                                {{ country.name }}
                                            </option>
                                        </select>
                                        <!--                                        <span class="invalid-feedback" role="alert">-->
                                        <!--                                            <strong>{{ $message }}</strong>-->
                                        <!--                                        </span>-->
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end" for="state">State</label>

                                    <div class="col-md-6">
                                        <select
                                            id="state"
                                            v-model="form.state_id"
                                            :value="form.state_id"
                                            class="form-select"
                                            name="state"
                                            @change="getCities()">
                                            <option disabled value="">Choose State</option>
                                            <option
                                                v-for="state in states"
                                                :key="state.id"
                                                :value="state.id">
                                                {{ state.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="department">
                                        Department
                                    </label>

                                    <div class="col-md-6">
                                        <select
                                            id="department"
                                            v-model="form.department_id"
                                            :value="form.department_id"
                                            class="form-select"
                                            name="department">
                                            <option disabled value="">Choose Department</option>
                                            <option
                                                v-for="department in departments"
                                                :key="department.id"
                                                :value="department.id">
                                                {{ department.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="city">
                                        City
                                    </label>

                                    <div class="col-md-6">
                                        <select
                                            id="city"
                                            v-model="form.city_id"
                                            :value="form.city_id"
                                            class="form-select"
                                            name="city"
                                            @change="">
                                            <option disabled value="">Choose City</option>
                                            <option
                                                v-for="city in cities"
                                                :key="city.id"
                                                :value="city.id">
                                                {{ city.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label
                                        class="col-md-4 col-form-label text-md-end"
                                        for="zip_code">
                                        Zip Code
                                    </label>

                                    <div class="col-md-6">
                                        <input
                                            id="zip_code"
                                            v-model="form.zip_code"
                                            class="form-control"
                                            required
                                            type="text">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">
                                        Birthdate
                                    </label>
                                    <div class="col-md-6">
                                        <VueDatePicker v-model="form.birthdate"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">
                                        Date Hired
                                    </label>
                                    <div class="col-md-6">
                                        <VueDatePicker v-model="form.date_hired"/>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-primary" type="submit"> Store</button>
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
import moment from 'moment';

export default {
    data() {
        return {
            countries: [],
            states: [],
            departments: [],
            cities: [],
            form: {
                first_name: '',
                middle_name: '',
                last_name: '',
                address: '',
                country_id: '',
                state_id: '',
                department_id: '',
                city_id: '',
                zip_code: '',
                birthdate: null,
                date_hired: null,
            },
        };
    },
    created() {
        this.getCountries();
        this.getDepartments();
    },
    methods: {
        getCountries() {
            axios.get('/api/employees/countries')
                .then(res => {
                    this.countries = res.data;
                }).catch(error => {
                console.log('console.error');
            });
        },
        getStates() {
            axios.get(`/api/employees/${this.form.country_id}/states`)
                .then(res => {
                    this.states = res.data;
                }).catch(error => {
                console.log('console.error');
            });
        },
        getCities() {
            axios.get(`/api/employees/${this.form.state_id}/cities`)
                .then(res => {
                    this.cities = res.data;
                }).catch(error => {
                console.log('console.error');
            });
        },
        getDepartments() {
            axios.get(`/api/employees/departments`)
                .then(res => {
                    this.departments = res.data;
                }).catch(error => {
                console.log('console.error');
            });
        },
        storeEmployee() {
            axios.post('/api/employees', {
                first_name: this.form.first_name,
                middle_name: this.form.middle_name,
                last_name: this.form.last_name,
                address: this.form.address,
                country_id: this.form.country_id,
                state_id: this.form.state_id,
                department_id: this.form.department_id,
                city_id: this.form.city_id,
                zip_code: this.form.zip_code,
                birthdate: this.formatDate(this.form.birthdate),
                date_hired: this.formatDate(this.form.date_hired),
            }).then(res => {
                console.log(res);
            }).catch(error => {
                console.log(error);
            });
        },
        formatDate(value) {
            if (value) {
                return moment(String(value)).format('YYYYMMDD');
            }
        },
    },
};
</script>

<style lang="scss" scoped>

</style>
