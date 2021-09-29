<template>
    <div class="container">
        <div class="row">
            <h1>Ajout de places</h1>
            <div class="col-md-6">
                <form action="#">
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" class="form-control">
                    <label for="type">Type</label>
                    <input id="type" name="type" type="text" class="form-control">
                    <label for="history">History</label>
                    <textarea id="history" name="history" type="text" class="form-control"> </textarea>
                    <label for="accessibility">Accessibility</label>
                    <input id="accessibility" name="accessibility" type="text" class="form-control">
                    <label for="province">Province</label>
                    <input id="province" name="province" type="text" class="form-control">
                    <input type="submit" value="Ajouter" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {};
</script>