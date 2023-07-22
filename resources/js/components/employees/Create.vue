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
                            Create Employees
                            <router-link :to="{name: 'employees.index'}" class="float-right">
                                Employees
                            </router-link>
                        </div>

                        <div class="card-body">
                            <form>
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
                                            class="form-select"
                                            name="country">
                                            <option selected>Choose Country</option>
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
                                            class="form-select"
                                            name="state">
                                            <option selected>Choose State</option>
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
                                            class="form-select"
                                            name="department">
                                            <option selected>Choose Department</option>
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
                                            class="form-select"
                                            name="city">
                                            <option selected>Choose City</option>
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
                                        <VueDatePicker v-model="birthdate"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">
                                        Date Hired
                                    </label>
                                    <div class="col-md-6">
                                        <VueDatePicker v-model="dateHired"/>
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
export default {
    data() {
        return {
            birthdate: null,
            dateHired: null,
        };
    },
};
</script>

<style lang="scss" scoped>

</style>
