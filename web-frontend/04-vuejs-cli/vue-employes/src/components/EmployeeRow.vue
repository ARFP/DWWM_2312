<script>
import { Employee } from '@/assets/Employee'
import EmployeeButton from '@/components/EmployeeButton.vue'

export default {
    components: { EmployeeButton },
    props: {
        emp : Employee
    },
    emits: ['duplicate', 'remove']
}
</script>
<template>
    <tr>
        <td>{{ emp.id }}</td>
        <td>{{ emp.employee_name }}</td>
        <td>{{ emp.employee_email }}</td>
        <td>{{ emp.employee_monthly_salary }}</td>
        <td>{{ emp.employee_year_of_birth }}</td>
        <td>
            <employee-button @click="$emit('duplicate', emp.id)">Duplicate</employee-button>
            <employee-button @click="$emit('remove', emp.id)">Remove</employee-button>
        </td>
    </tr>
</template>
<style scoped>

</style>