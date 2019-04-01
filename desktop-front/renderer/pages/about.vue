<template>
  <div class="container">
    <h2>Version1</h2>
    <p><a :href="resolve('home')">Version2</a></p>
  </div>
</template>

<style scoped>
.container {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: black;
  color: white;
  font-family: "Lucida Console", Monaco, monospace;
  padding-top: 130px;
  text-align: center;
}
a {
  color: silver;
}
</style>
