<template>
    <div class="container-fluid">

        <div class="box mt-3">
            <div class="">
                <div class="box">
                    <div class="d-flex p-3">
                        <div class="align-self-center box__title">Members</div>
                        <div class="ml-auto"><a href="/team/create"
                                class="btn btn-primary z-depth-0 waves-effect waves-light"><span class="mr-2"><i
                                        class="fa fa-plus"></i></span> New Member</a></div>
                    </div>
                </div>
            </div>
            <div class="box__body">
                <table class="table table-responsive-sm">
                    <thead class="thead-light">
                        <tr class="text-uppercase">
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sagar Kathariya</td>
                            <td>Developer</td>
                            <td>9814747898</td>

                            <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/user/1/edit"
                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                    class="mx-2">|</span>
                                <form action="http://127.0.0.1:8000/user/1" method="post"
                                    onsubmit="return confirm('Are you sure to delete ?')" class="form-inline d-inline">
                                    <input type="hidden" name="_token" value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py">
                                    <input type="hidden" name="_method" value="delete"> <button type="submit"
                                        class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Sagar Kathariya</td>
                            <td>Developer</td>
                            <td>9814747898</td>


                            <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/user/1/edit"
                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                    class="mx-2">|</span>
                                <form action="http://127.0.0.1:8000/user/1" method="post"
                                    onsubmit="return confirm('Are you sure to delete ?')" class="form-inline d-inline">
                                    <input type="hidden" name="_token" value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py">
                                    <input type="hidden" name="_method" value="delete"> <button type="submit"
                                        class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Sagar Kathariya</td>
                            <td>Developer</td>
                            <td>9814747898</td>

                            <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/user/1/edit"
                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                    class="mx-2">|</span>
                                <form action="http://127.0.0.1:8000/user/1" method="post"
                                    onsubmit="return confirm('Are you sure to delete ?')" class="form-inline d-inline">
                                    <input type="hidden" name="_token" value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py">
                                    <input type="hidden" name="_method" value="delete"> <button type="submit"
                                        class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Sagar Kathariya</td>
                            <td>Developer</td>
                            <td>9814747898</td>

                            <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/user/1/edit"
                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                    class="mx-2">|</span>
                                <form action="http://127.0.0.1:8000/user/1" method="post"
                                    onsubmit="return confirm('Are you sure to delete ?')" class="form-inline d-inline">
                                    <input type="hidden" name="_token" value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py">
                                    <input type="hidden" name="_method" value="delete"> <button type="submit"
                                        class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Sagar Kathariya</td>
                            <td>Developer</td>
                            <td>9814747898</td>

                            <td class="text-nowrap text-right"><a href="http://127.0.0.1:8000/user/1/edit"
                                    class="action-btn text-primary"><i class="fa fa-edit"></i></a> <span
                                    class="mx-2">|</span>
                                <form action="http://127.0.0.1:8000/user/1" method="post"
                                    onsubmit="return confirm('Are you sure to delete ?')" class="form-inline d-inline">
                                    <input type="hidden" name="_token" value="OUFynXomP4rPddpb8TrpRl7cHyUE4VMkAmod35Py">
                                    <input type="hidden" name="_method" value="delete"> <button type="submit"
                                        class="action-btn text-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</template>

