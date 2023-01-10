<template>
        <div class="box p-3">
            <form @submit.prevent="submit" method="POST">
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" name="position" v-model="form.position" class="form-control"
                        id="exampleInputEmail1" placeholder="Position">
                        <small class="text-danger pl-3">{{ form.errors.first("position") }}</small>
                </div>

                <a href="/position" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">{{ button }}</button>
            </form>
        </div>



</template>

<script>
import Form from "form-backend-validation";
import { VueEditor } from "vue2-quill-editor";

export default {
    components: {
        VueEditor
    },
    data() {
        return {
            updateMode: false,
            'button': 'Save',

            form: new Form(
                {
                    position: "",
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
            this.button="Update";
            this.updateMode= true;

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
        edit(id){
            // this.edit='1';
            alert(id);
        }
    }

};
</script>

