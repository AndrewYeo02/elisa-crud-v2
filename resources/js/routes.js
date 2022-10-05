import LogbookIndex from './components/logbooks/index.vue';
import LogbookCreate from './components/logbooks/create.vue';
import LogbookEdit from './components/logbooks/edit.vue';

export const routes = [
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