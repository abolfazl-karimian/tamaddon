<template>
    <a href="#" @click="deleteUser(url_)">
        <i class="fas fa-trash text-danger"></i>
    </a>
</template>

<script>
    import Swal from "sweetalert2";

    export default {
        name: "Delete",

        props: [
            'url',
        ],
        data() {
            return {
                url_: this.url
            }
        },
        methods: {
            deleteUser: function (route) {
                let formData = new FormData();
                formData.append("_method", "delete");
                Swal.fire({
                    type: "question",
                    text: `این آیتم حذف شود ؟`,
                    confirmButtonText: "YES",
                    cancelButtonText: "NO",
                    showCancelButton: true,
                    showCloseButton: true
                }).then(result => {
                    if (result.value) {
                        axios({
                            method: "post",
                            url: route + "?_method=DELETE",
                            data: formData
                        })
                            .then(function (response) {
                                // user deleted
                                Swal.fire({
                                    type: "success",
                                    text: `آیتم حذف شد!`,
                                });
                                //reload this page
                                location.reload();
                            })
                            .catch(function (err) {
                                let errors = err.response.data.errors;
                                console.log(errors);
                            });
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>
