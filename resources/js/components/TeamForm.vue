<template>
    <div class="container-fluid">
        <div class="p-3">
            <div class="container-fluid font-noto">
                <div class="box">
                    <div class="box__header">
                        <div class="d-flex">
                            <div class="align-self-center box__title">प्रयोगकर्ताहरू</div>
                            <div class="ml-auto"><a href="http://127.0.0.1:8000/user/create"
                                    class="btn btn-primary z-depth-0 waves-effect waves-light"><span class="mr-2"><i
                                            class="fa fa-plus"></i></span> New User</a></div>
                        </div>
                    </div>
                    <div class="box__body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sagar Kathariya</td>
                                    <td>Developer</td>
                                    <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/change-password/1"
                                            class="action-btn text-primary"><i class="fas fa-key"></i></a> <span
                                            class="mx-2">|</span> <a href="http://127.0.0.1:8000/user/1/edit"
                                            class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                            class="mx-2">|</span>
                                        <form action="http://127.0.0.1:8000/user/1" method="post"
                                            onsubmit="return confirm('Are you sure to delete ?')"
                                            class="form-inline d-inline"><input type="hidden" name="_token"
                                                value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py"> <input type="hidden"
                                                name="_method" value="delete"> <button type="submit"
                                                class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

