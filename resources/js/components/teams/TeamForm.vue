<template>


</template>

<script>
import Form from "form-backend-validation";
import { VueEditor } from "vue2-quill-editor";

export default {
    components: {
        VueEditor
    },
    props: {
        positions: {
            default: () => ({}),
        },

    },

    data() {
        return {
            updateMode: false,
            'button': 'Save',


            form: new Form(
                {
                    member_name: "",
                    position: "",
                    phone: "",
                    image: "",
                    facebook: "",
                    twiter: "",
                    linkedin: "",
                    instagram: "",
                },
                {
                    resetOnSuccess: false,
                }
            ),
        }
    },
    mounted() {
        if (this.data.id) {
            this.form.position = this.data.position;
            this.button = "Update";
            this.updateMode = true;

        }
    },
    methods: {
        submit() {
            this.updateMode ? this.update() : this.create();
        },
        create() {

            this.form.post("/position/store").then((response) => {
                this.$swal(response.message).then(() => (window.location.href = "/position"));
            });
        },

        update() {
            this.form.put((`/position/update/${this.data.id}`)).then((response) => {
                this.$swal(response.message).then(() => (window.location.href = "/position"));
            });
        },
    }

};
</script>
