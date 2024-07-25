<script>

import { EmployeeRepository } from '@/assets/EmployeeRepository.js'
import { DataProvider } from '@/assets/DataProvider.js'
import EmployeeRow from '@/components/EmployeeRow.vue'

export default {
    components: { EmployeeRow },
    data() {
       return {
        repository: null
       }
    },
    methods: {
        duplicateEv(id) {
            this.repository.duplicate(id)
        },
        removeEv(id) {
            this.repository.delete(id)
        }
    },
    async created() {
        let emps = await DataProvider.getJson('https://arfp.github.io/tp/web/javascript2/03-employees/employees.json');
        this.repository = new EmployeeRepository(emps.data);
        console.log(this.repository);
    },
    computed: {
        employees() {
            return this.repository.employees;
        }
    }
}
</script>
<template>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Year of birth</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody v-if="repository != null">
            <employee-row v-for="anEmployee of employees" :emp="anEmployee" @duplicate="duplicateEv" @remove="removeEv"></employee-row>
        </tbody>
        <tfoot>
            <tr>
                <td>COMPTEUR</td>
                <td colspan="2"></td>
                <td>TOTAL_SALAIRES</td>
                <td colspan="2"></td>
            </tr>
        </tfoot>
    </table>
</template>
<style scoped>
table, th, td {
    border: 1px solid black;
}
th, td {

}
</style>