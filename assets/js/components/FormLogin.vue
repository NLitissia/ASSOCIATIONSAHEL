<template>
<div>
 <center class="dacing titre"> <h3> Bienvenu sur le site de L'association Sahel</h3></center>
  <mdb-container class="formlogin">
  <form>
    <p class="h4 text-center mb-4 dacing">S'identifier </p>
    <div class="grey-text">
      <mdb-input label="Identifiant" icon="envelope" type="username"/>
      <mdb-input label="Your password" icon="lock" type="password"/>
    </div>
    <div class="text-center">
      <mdb-btn>Se Connecter </mdb-btn>
    </div>
  </form>
 </mdb-container>
 </div>
</template>
<script>
  import { mdbContainer,mdbInput, mdbBtn } from 'mdbvue';
  export default {
    name: "formlogin",
    template: "<formlogin/>",
    components: {
      mdbInput,
      mdbBtn,
      mdbContainer
    },
  }
</script>

<style>

</style>