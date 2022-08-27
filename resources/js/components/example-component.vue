<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CRUD CUSTOMER</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr
                                    v-for="customer in customers"
                                    :key="customer"
                                ></tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "example-component",
    data: () => ({
        customers: [],
        customerForm: {},
    }),
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
