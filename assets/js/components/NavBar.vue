
<template>
  <mdb-navbar expand="large" dark color="default">
    <mdb-navbar-brand class="logo" href="#">
      Sahel
    </mdb-navbar-brand>
    <mdb-navbar-toggler>
      <mdb-navbar-nav right>
        <mdb-nav-item href="#" active>Accueil</mdb-nav-item>
        <mdb-nav-item href="#">Information</mdb-nav-item>
        <mdb-nav-item class="disabled" href="#">Contact</mdb-nav-item>
      </mdb-navbar-nav>
    </mdb-navbar-toggler>
  </mdb-navbar>
</template>


<script>
 import { mdbNavbar, mdbNavbarBrand, mdbNavbarToggler, mdbNavbarNav, mdbNavItem } from 'mdbvue';
export default {
    
    name: "navbar",
    template: "< navbar/>",
      components: {
      mdbNavbar,
      mdbNavbarBrand,
      mdbNavbarToggler,
      mdbNavbarNav,
      mdbNavItem
    }

}
</script>

<style>

</style>