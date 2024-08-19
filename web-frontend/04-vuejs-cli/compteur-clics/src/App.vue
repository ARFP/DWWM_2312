<script>

</script>

<template>
  <h1>Compteur de clics</h1>
  <nav>
    <ul>
      <li><a href="/">Accueil</a></li>
      <li><a href="/about">A Propos</a></li>
      <li><RouterLink to="/">Accueil (router)</RouterLink></li>
      <li><RouterLink to="about">A propos (router)</RouterLink></li>
    </ul>
  </nav>
  <RouterView />
</template>

<style>

</style>
