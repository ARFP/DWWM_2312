import { Employee } from "./Employee";

export class EmployeeRepository 
{
    /**
     * 
     * @param {Array} _employeeList 
     */
    constructor(_employeeList) {
        this.employees = _employeeList;
    }

    get count() {
        return this.employees.length;
    }

    get total_salary() {
        return this.employees.reduce((acc, cur) => { return acc + cur.employee_monthly_salary }, 0)
    }

    delete(_id) {
        /*let pos = this.employees.findIndex((x) => x.id == _id);
        this.employees.splice(pos, 1);*/
        this.employees = this.employees.filter(x => x.id !== _id);
    }

    duplicate(_id) {
        // Recherche de l'employé à dupliquer
        let empToDuplicate = this.employees.find(x => x.id === _id);

        if(empToDuplicate === undefined) {
            console.error('L\'identifiant est inconnu !');
            return;
        }

        // Recherche de l'identifiant le plus élevé
        let maxId = Math.max.apply(null, this.employees.map(x => x.id));

        // Création du nouvel employé
        let newEmp = new Employee(empToDuplicate);

        // Affection du nouvel identifiant à l'employé
        newEmp.id = ++maxId;

        // Ajout du nouvel employé dans la collection
        this.employees.push(newEmp);
    }

    sortBySalaryAsc() {
        return this.employees.sort((a,b) => a.employee_salary - b.employee_salary);
    }

    sortBySalaryDesc() {
        return this.sortBySalaryAsc().reverse();
    }








}