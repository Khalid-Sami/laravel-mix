<template>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
                class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                 m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <router-link to="/" tag="li" class="m-menu__item" aria-haspopup="true"
                                 active-class="m-menu__item--active" exact>
                        <a class="m-menu__link "><i
                                class="m-menu__link-icon flaticon-line-graph"></i><span
                                class="m-menu__link-title"> <span
                                class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span
                                                    class="m-badge m-badge--danger">2</span></span> </span></span></a>
                    </router-link>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Components</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-layers"></i><span
                                class="m-menu__link-text">Base</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
                                <router-link to="/base/tables" tag="li" class="m-menu__item "
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                            class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Tables</span></a>
                                </router-link>
                                <router-link to="/base/modal" tag="li" class="m-menu__item"
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                            class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Modal</span></a>
                                </router-link>
                                <router-link to="/base/alerts" tag="li" class="m-menu__item"
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                            class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Alerts</span></a>
                                </router-link>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-web"></i><span
                                class="m-menu__link-text">Buttons</span><i
                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span></li>
                                <router-link to="/buttons/group" tag="li" class="m-menu__item"
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                            class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Button Group</span></a>
                                </router-link>
                                <router-link to="/buttons/dropdown" tag="li" class="m-menu__item"
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                            class="m-menu__link "><i
                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                            class="m-menu__link-text">Button Dropdown</span></a>
                                </router-link>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">CRUD</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">Forms
										& Controls</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                        class="m-menu__link"><span
                                        class="m-menu__link-text">Forms & Controls</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Form Controls</span><i
                                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <router-link to="/forms/controls/base" tag="li" class="m-menu__item"
                                                         active-class="m-menu__item--active" aria-haspopup="true">
                                                <a
                                                        class="m-menu__link "><i
                                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                        class="m-menu__link-text">Base Inputs</span></a>
                                            </router-link>
                                            <router-link to="/forms/controls/checkbox" tag="li" class="m-menu__item"
                                                         active-class="m-menu__item--active" aria-haspopup="true">
                                                <a
                                                        class="m-menu__link "><i
                                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                        class="m-menu__link-text">Checkbox &
																Radio</span></a>
                                            </router-link>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Form Validation</span><i
                                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <router-link to="/forms/validation/form-controls" tag="li"
                                                         class="m-menu__item"
                                                         active-class="m-menu__item--active" aria-haspopup="true">
                                                <a
                                                        class="m-menu__link "><i
                                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                        class="m-menu__link-text">Form
																Controls</span></a>
                                            </router-link>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Countries & Cities</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                            class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">Countries</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">Countries</span></span></li>
                                <router-link to="/countries" tag="li" class="m-menu__item "
                                             active-class="m-menu__item--active" aria-haspopup="true" exact>
                                    <a
                                        class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">Countries</span></a>
                                </router-link>
                                <router-link to="/countries/new" tag="li" class="m-menu__item "
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                        class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">New Country</span></a>
                                </router-link>
                                <router-link to="/countries/form" tag="li" class="m-menu__item "
                                             active-class="m-menu__item--active" aria-haspopup="true">
                                    <a
                                        class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">New Country / Form</span></a>
                                </router-link>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        <router-view></router-view>
        <!-- container -->
    </div>

</template>

<script>
    export default {
        name: "Menu"
    }
</script>

<style scoped>

</style>
