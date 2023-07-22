<template>
    <div>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employees</h1>
        </div>
        <div class="card mx-auto">
            <div>
                <div class="alert alert-success">
                </div>
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input
                                        id="inlineFormInput"
                                        class="form-control mb-2"
                                        name="search"
                                        placeholder="Jane Doe"
                                        type="search">
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

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-success" href="">Edit</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>

</style>
