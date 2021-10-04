<template>
    <div class="container">
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    watch: {
        $route() {
            $("#navbarCollapse").collapse("hide");
        }
    }
};
</script>
