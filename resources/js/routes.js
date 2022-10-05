import LogbookIndex from './components/logbooks/index.vue';
import LogbookCreate from './components/logbooks/create.vue';
import LogbookEdit from './components/logbooks/edit.vue';
import ElisaHome from './components/home/elisa.vue';
export const routes = [
    {
        path:'/',
        component: ElisaHome,
        name: "ElisaHome"
    },
    {
        path: '/logbooks',
        component: LogbookIndex,
        name: "LogbookIndex"
    },
    {
        path: '/logbooks/create',
        component: LogbookCreate,
        name: "LogbookCreate"
    },
    {
        path: '/logbooks/edit/:id',
        component: LogbookEdit,
        name: "LogbookEdit"
    }
];