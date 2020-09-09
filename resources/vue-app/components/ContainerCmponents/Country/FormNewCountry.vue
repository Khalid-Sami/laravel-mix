<template>
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Countries & Cities</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">New Country / Form</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div
                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                        m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                <span class="m-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">Support</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit">
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-md-8">

                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Create new country by vue-form-generator
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <div class="panel-body">
                            <form>
                                <vue-form-generator :schema="schema" :model="model" :options="formOptions" @validated="onValidated">
                                </vue-form-generator>
                            </form>
                        </div>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import 'vue-form-generator/dist/vfg.css';
    import "vue-form-generator/dist/vfg-core.js";
    import {validators, component as VueFormGenerator} from 'vue-form-generator';

    export default {
        data() {
            return {
                model: {
                    id: 1,
                    name: 'John Doe',
                    password: '',
                    skills: ['Javascript', 'VueJS'],
                    email: 'john.doe@gmail.com',
                    status: true
                },
                schema: {
                    groups: [
                        {
                            legend: 'User Details',
                            fields: [
                                {
                                    type: 'input',
                                    inputType: 'text',
                                    label: 'ID (disabled text field)',
                                    model: 'id',
                                    readonly: true,
                                    disabled: true
                                },
                                {
                                    type: "input",
                                    inputType: "text",
                                    label: "Name",
                                    model: "name",
                                    id: "full_name",
                                    readonly: false,
                                    maxlength: 15,
                                    // featured: true,
                                    disabled: false,
                                    required: true,
                                    default: "Anonymous",
                                    // hint: "Please enter your full name",
                                    // help: "This is an other longer help text",
                                    validator: validators.string,

                                    onChanged: function(model, newVal, oldVal, field) {
                                        console.log(`Model's name changed from ${oldVal} to ${newVal}. Model:`, model);
                                    },

                                    onValidated: function(model, errors, field) {
                                        if (errors.length > 0)
                                            console.warn("Validation error in Name field! Errors:", errors);
                                    }
                                }
                                ,
                                {
                                    type: 'input',
                                    inputType: 'email',
                                    label: 'E-mail',
                                    model: 'email',
                                    placeholder: 'User\'s e-mail address',
                                },
                                {
                                    type: 'input',
                                    inputType: 'password',
                                    label: 'Password',
                                    model: 'password',
                                    min: 6,
                                    required: true,
                                    hint: 'Minimum 6 characters',
                                    visible: function (model) {
                                        return model && model.email != ''
                                    },
                                    validator: ["string"]
                                }
                            ]
                        },
                        {
                            legend: 'Skills & Status',
                            fields: [
                                {
                                    type: 'select',
                                    label: 'Skills',
                                    model: 'skills',
                                    values: ['Javascript', 'VueJS', 'CSS3', 'HTML5']
                                },
                                {
                                    type: 'checkbox',
                                    label: 'Status',
                                    model: 'status',
                                    default: true
                                },
                                {
                                    type: "checklist",
                                    label: "Roles",
                                    model: "roles",
                                    listBox: true,
                                    values: [
                                        { value: "admin", name: "Administrator"},
                                        { value: "moderator", name: "Moderator"},
                                        { value: "user", name: "Registered User"},
                                        { value: "visitor", name: "Visitor"}
                                        ]
                                },
                                {
                                    type: "checklist",
                                    label: "Ingredient",
                                    model: "ingredient",
                                    values: [
                                        { uuid: "a11e3f4b-d4f1-45ed-87fc-4eabda4e667e", name: "Cherimoya"},
                                        { uuid: "5ceb59c6-efe6-4c8a-a4bd-0ef621cd1e5d", name: "Pummelo"},
                                        { uuid: "39f05038-39ba-4cb9-8508-720806dcb20b", name: "Jabuticaba"},
                                        { uuid: "94adbe8d-f9db-481c-97c0-7198d5f3d810", name: "Kiwano melon"}
                                    ],
                                    checklistOptions: {
                                        value: "uuid"
                                    }
                                },
                                {
                                    type: "radios",
                                    label: "Identify the dolphin's name from the photo",
                                    model: "dolphin",
                                    featured: true,
                                    values: [
                                        {common_name: "White-beaked dolphin", binomial_nomenclature:"Lagenorhynchus albirostris"},
                                        {common_name: "Peale's dolphin", binomial_nomenclature:"Lagenorhynchus australis"},
                                        {common_name: "Northern right whale dolphin", binomial_nomenclature:"Lissodelphis borealis"},
                                        {common_name: "Common bottlenose dolphin", binomial_nomenclature:"Tursiops truncatus"},
                                        {common_name: "Long-beaked common dolphin", binomial_nomenclature:"Delphinus capensis"},
                                        {common_name: "Pacific white-sided dolphin", binomial_nomenclature:"Lagenorhynchus obliquidens"},
                                        {common_name: "Pantropical spotted dolphin", binomial_nomenclature:"Stenella attenuata"},
                                        {common_name: "Chilean dolphin", binomial_nomenclature:"Cephalorhynchus eutropia"}
                                    ],
                                    radiosOptions: {
                                        value:"binomial_nomenclature",
                                        name:"common_name"
                                    }
                                },
                                {
                                    type: "select",
                                    label: "Language",
                                    model: "lang",
                                    required: true,
                                    values: function() {
                                        return [
                                            { id: "en-GB", name: "English (GB)" },
                                            { id: "en-US", name: "English (US)" },
                                            { id: "de", name: "German" },
                                            { id: "it", name: "Italic" },
                                            { id: "fr", name: "French" }
                                        ]
                                    },
                                    // validator: validators.required
                                },
                                {
                                    type: "textArea",
                                    label: "Biography",
                                    model: "bio",
                                    hint: "Max 500 characters",
                                    max: 500,
                                    placeholder: "User's biography",
                                    rows: 4,
                                    required: true,
                                    validator: validators.string
                                },
                                {
                                    type: "image",
                                    label: "Avatar",
                                    model: "avatar",
                                    readonly: true,
                                    required: true,
                                    preview: true
                                },
                                {
                                    type: "submit",
                                    buttonText: "Submit",
                                    onSubmit: function(){
                                        console.log('success')
                                    },
                                    validateBeforeSubmit: true
                                }
                            ]
                        },

                    ]
                },

                formOptions: {
                    validateAfterLoad: true,
                    validateAfterChanged: true,
                    validateAsync: true
                }
            }
        },
        components: {
            "vue-form-generator": VueFormGenerator
        },
        methods:{
            // onValidated(isValid, errors) {
            //     console.log("Validation result: ", isValid, ", Errors:", errors);
            // }
        },
        mounted() {
            validators.resources.textTooSmall = "Too short";
        }
    }
</script>

<style>
    pre {
        overflow: auto;
    }

    pre .string {
        color: #885800;
    }

    pre .number {
        color: blue;
    }

    pre .boolean {
        color: magenta;
    }

    pre .null {
        color: red;
    }

    pre .key {
        color: green;
    }

    h1 {
        text-align: center;
        font-size: 36px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 500;
    }

    fieldset {
        border: 0;
    }

    legend{
        color: #2fa360;
        /*font-family: Verdana, Arial, Helvetica, sans-serif;*/
        font-weight: bold;
    }

    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        border-color: #ddd;
    }

    .panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;

        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-body {
        padding: 15px;
    }

    .field-checklist .wrapper {
        width: 100%;
    }
</style>
