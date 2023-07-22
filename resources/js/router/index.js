import { createRouter, createWebHistory } from 'vue-router';
import EmployeeIndex from '../components/employees/Index.vue';
import EmployeeCreate from '../components/employees/Create.vue';
import EmployeeEdit from '../components/employees/Edit.vue';

const routes = [
    {
        path: '/employees',
        name: 'employee.index',
        component: EmployeeIndex,
    },
    {
        path: '/employees/create',
        name: 'employee.create',
        component: EmployeeCreate,
    },
    {
        path: '/employees/:id',
        name: 'employee.edit',
        component: EmployeeEdit,
    },
    // {
    //   path: '/',
    //   name: 'login',
    //   component: LoginView,
    // },
    // {
    //   path: '/',
    //   component: HomeView,
    //   children: [
    //     {
    //       path: 'list',
    //       name: 'list',
    //       components: {
    //         default: UserListView,
    //         menu: MenuProfileView,
    //       },
    //     },
    //     {
    //       path: 'resume/add',
    //       name: 'resume.add',
    //       components: {
    //         default: ResumeAddView,
    //         menu: MenuStatisticsView,
    //       },
    //     },
    //     {
    //       path: 'resume/:resumeId(\\d+)',
    //       name: 'resume',
    //       components: {
    //         default: ResumeView,
    //         menu: MenuStatisticsView,
    //       },
    //       props: true,
    //     },
    //   ],
    // },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
