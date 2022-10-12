import TraineeIndex from './components/trainees/index.vue';
import TraineeCreate from './components/trainees/create.vue';
import TraineeEdit from './components/trainees/edit.vue';
import ElisaHome from './components/home/elisa.vue';
import AdminLogin from './components/login/adminLogin.vue';
import TaskIndex from './components/tasks/task.vue';
import LogbookIndex from './components/logbooks/index.vue';
import LogbookCreate from './components/logbooks/create.vue';
export const routes = [
    {
        path:'/trainees/logbook/list',
        component: LogbookIndex,
        name: "LogbookIndex"
    },
    {
        path:'/trainees/logbook/create',
        component: LogbookCreate,
        name: "LogbookCreate"
    },
    {
        path:'/trainees/task',
        component: TaskIndex,
        name: "TaskIndex"
    },
    {
        path:'/',
        component: AdminLogin,
        name: "AdminLogin"
    },

    {
        path:'/home',
        component: ElisaHome,
        name: "ElisaHome"
    },
    {
        path: '/trainees',
        component: TraineeIndex,
        name: "TraineeIndex"
    },
    {
        path: '/trainees/create',
        component: TraineeCreate,
        name: "TraineeCreate"
    },
    {
        path: '/trainees/edit/:id',
        component: TraineeEdit,
        name: "TraineeEdit"
    }
];