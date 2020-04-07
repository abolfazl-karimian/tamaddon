<template>
    <a href="#" @click="confirmComment(url_)" title="تایید نظر">
        <i class="fas fa-check text-success"></i>
    </a>
</template>

<script>
    import Swal from 'sweetalert2';

    export default {
        name: "ConfirmComment",
        props: [
          'url',
        ],
        data() {
          return {
              url_: this.url,
          }
        },
        methods: {
            confirmComment: function (route) {
                let formData = new FormData();
                formData.append("_method", "patch");
                Swal.fire({
                    type: "question",
                    text: `این نظر تایید شود ؟`,
                    confirmButtonText: "YES",
                    cancelButtonText: "NO",
                    showCancelButton: true,
                    showCloseButton: true
                }).then(result => {
                    if (result.value) {
                        axios({
                            method: "post",
                            url: route + "?_method=PATCH",
                            data: formData
                        })
                            .then(function (response) {
                                //comment confirmed
                                Swal.fire({
                                    type: "success",
                                    text: `نظر تایید شد!`,
                                });
                                //reload this page
                                location.reload();
                            })
                            .catch(function (err) {
                                let errors = err.response.data.errors;
                                console.log(errors);
                            });
                    }
                })

                // axios.post(route, {
                //     data: this.data,
                //     _method: 'patch'
                // })
                //     .then(function (response) {
                //         console.log(response);
                //     })
                //     .catch(function (error) {
                //         console.log(error);
                //     });
            }
        },
    }
</script>

<style scoped>

</style>
