<template>
    <div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employees</h1>
        </div>
        <div class="card mx-auto">
            <div v-if="showMessage">
                <div class="alert alert-success"> {{ message }}</div>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-row align-items-start">
                                <div class="col">
                                    <input
                                        id="inlineFormInput"
                                        v-model="search"
                                        class="form-control mb-2"
                                        placeholder="Jane Doe"
                                        type="search">
                                </div>
                                <div class="col">
                                    <select
                                        id="city"
                                        v-model="selectedDepartment"
                                        :value="selectedDepartment"
                                        class="form-select"
                                        name="city"
                                        @change="">
                                        <option disabled value="null">Choose Department</option>
                                        <option value="">All</option>
                                        <option
                                            v-for="department in departments"
                                            :key="department.id"
                                            :value="department.id">
                                            {{ department.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary mb-2" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <router-link
                            :to="{name: 'employees.create'}"
                            class="btn btn-primary float-right">
                            Create
                        </router-link>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Department</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="employee in employees" :key="employee.id">
                        <th scope="row">#{{ employee.id }}</th>
                        <td>{{ employee.first_name }}</td>
                        <td>{{ employee.last_name }}</td>
                        <td>{{ employee.address }}</td>
                        <td>{{ employee.department.name }}</td>
                        <td>
                            <router-link
                                :to="{name: 'employees.edit', params: {id: employee.id}}"
                                class="btn btn-success">
                                Edit
                            </router-link>
                            <button class="btn btn-danger" @click="deleteEmployee(employee.id)">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            employees: [],
            showMessage: false,
            message: '',
            search: null,
            selectedDepartment: null,
            departments: [],
        };
    },
    watch: {
        search() {
            this.getEmployees();
        },
        selectedDepartment() {
            this.getEmployees();
        },
    },
    created() {
        this.getEmployees();
        this.getDepartments();
    },
    methods: {
        getEmployees() {
            axios.get('/api/employees', {
                params: {
                    search: this.search,
                    department_id: this.selectedDepartment,
                },
            }).then(res => {
                this.employees = res.data.data;
            }).catch(error => {
                console.log(error);
            });
        },
        getDepartments() {
            axios.get('/api/employees/departments')
                .then(res => {
                    this.departments = res.data;
                }).catch(error => {
                console.log(error);
            });
        },
        deleteEmployee(id) {
            axios.delete(`/api/employees/${id}`).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getEmployees();

                setTimeout(() => {
                    this.showMessage = false;
                    this.message = '';
                }, 10000);
            });
        },
    },
};
</script>
