<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">Liste des places</div>

          <div class="card-body">
            Places list
          </div>
          <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'create' }"
            >
              create
            </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>