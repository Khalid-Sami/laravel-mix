<template>
  <div>
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <header-side></header-side>
      <menu-side></menu-side>
      <footer-side></footer-side>
    </div>
<!--    <sidebar></sidebar>-->
    <scroll-top></scroll-top>
  </div>
</template>

<script>
  import HeaderDiv from "../components/IndexComponents/Header";
  import MenuSide from "../components/IndexComponents/Menu";
  import ScrollTop from "../components/IndexComponents/ScrollTop";
  // import Sidebar from "../components/IndexComponents/Sidebar";
  import FooterSide from "../components/IndexComponents/Footer";

export default {
  name: "App",
  components: {
    headerSide: HeaderDiv,
    menuSide: MenuSide,
    scrollTop: ScrollTop,
    // sidebar: Sidebar,
    footerSide: FooterSide
  }
};
</script>

<style lang="scss">
</style>
