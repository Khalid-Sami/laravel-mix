import Dashboard from "../components/ContainerCmponents/Dashboard/Dashboard";
import Tables from "../components/ContainerCmponents/Base/Tables";
import Modal from "../components/ContainerCmponents/Base/Modal";
import Alerts from "../components/ContainerCmponents/Base/Alerts";
import Group from "../components/ContainerCmponents/Buttons/Group";
import Dropdown from "../components/ContainerCmponents/Buttons/Dropdown";
import FormBase from "../components/ContainerCmponents/Forms/Controls/Base";
import Checkbox from "../components/ContainerCmponents/Forms/Controls/Checkbox";
import FormControls from "../components/ContainerCmponents/Forms/Validation/FormControls";
import BasicDatatable from "../components/ContainerCmponents/Datatables/Basic/Basic";
import Scrollable from "../components/ContainerCmponents/Datatables/Basic/Scrollable";
import ColumnRendering from "../components/ContainerCmponents/Datatables/Advanced/ColumnRendering";
import MultipleControls from "../components/ContainerCmponents/Datatables/Advanced/MultipleControls";
import Countries from "../components/ContainerCmponents/Country/Countries";
import NewCountry from "../components/ContainerCmponents/Country/NewCountry";
import FormNewCountry from "../components/ContainerCmponents/Country/FormNewCountry";

export const routes = [
    {path: '/',name:'dashboard', component: Dashboard},
    {path: '/base/tables', component: Tables},
    {path: '/base/modal', component: Modal},
    {path: '/base/alerts', component: Alerts},
    {path: '/buttons/group', component: Group},
    {path: '/buttons/dropdown', component: Dropdown},
    {path: '/forms/controls/base', component: FormBase},
    {path: '/forms/controls/checkbox', component: Checkbox},
    {path: '/forms/validation/form-controls', component: FormControls},
    {path: '/datatables/basic/basic-tables', component: BasicDatatable},
    {path: '/datatables/basic/scrollable', component: Scrollable},
    {path: '/datatables/advanced/column-rendering', component: ColumnRendering},
    {path: '/datatables/advanced/multiple-controls', component: MultipleControls},
    {path: "/countries",component: () => import('../components/ContainerCmponents/Country'),
        children: [
            {
                path: "/",
                name: 'countries',
                component: Countries
            },
            {
                path: 'new',
                component: NewCountry
            },
            {
                path: 'form',
                component: FormNewCountry
            }
        ]},
    {path: '*', redirect: '/'}
]
