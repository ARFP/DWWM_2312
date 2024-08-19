export class Employee 
{
    /**
     * 
     * @param {Object} _employee Les données de l'employé
     */
    constructor(_employee) {
        //Object.assign(this, _employee);
        this.id = _employee.id;
        this.employee_name = _employee.employee_name;
        this.employee_salary = _employee.employee_salary;
        this.employee_age = _employee.employee_age;
    }

    get employee_email() {
        let fullname = this.employee_name.toLowerCase().split(' ');
        let firstname = fullname[0][0];
        let lastname = fullname[1];
        return firstname + '.' + lastname + '@example.com';
    }

    get employee_monthly_salary() {
        return this.employee_salary / 12;
        //return Math.round(this.employee_salary / 12 * 100) / 100;
    }

    get employee_year_of_birth() {
        return (new Date()).getFullYear() - this.employee_age;
    }

}
