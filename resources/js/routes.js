import ProductIndex from './components/products/index.vue';
import ProductCreate from './components/products/create.vue';
import ProductEdit from './components/products/edit.vue';

export const routes = [
    {
        path: '/logbooks',
        component: ProductIndex,
        name: "ProductIndex"
    },
    {
        path: '/logbooks/create',
        component: ProductCreate,
        name: "ProductCreate"
    },
    {
        path: '/logbooks/edit/:id',
        component: ProductEdit,
        name: "ProductEdit"
    }
];