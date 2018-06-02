<template>
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>Name</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Date of Birth</td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="student in students.data">
                <td>@{{ student.student_name }}</td>
                <td>@{{ student.student_address}}</td>
                <td>@{{ student.student_phone }}</td>
                <td>@{{ student.student_date_of_birth }}</td>
            </tr>
            </tbody>
        </table>
        <vue-pagination
                :pagination="students"
                @paginate="getStudents()"
                :offset="4"
        >

        </vue-pagination>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                students: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4
            }
        },
        mounted() {
            this.getStudents();
        },
        methods: {
            getStudents(){
                var url = '/student?page=' + this.students.current_page;
                axios.get(url)
                    .then((response) => {
                        this.students = response.data;
                    })
                    .catch(() => {
                        alert('cannot get data from server');
                    });
            }
        }
    }
</script>

<style scoped>

</style>